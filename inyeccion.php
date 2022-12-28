<?php
    
    require_once("./database.php");
    class Conectar extends databases{

            public function GetData(){
                $sql = "select * from cursos";
                $query = $this->getConnection()->query($sql);
                return json_encode($query->fetchAll(PDO::FETCH_ASSOC));
            }
            public function DeleteData($id){
                $sql = "delete from cursos where id = :id";
                $query = $this->getConnection()->prepare($sql);
                $query->bindValue(':id',$id);
                $query->execute();
                if($query->rowCount()>0){
                    return json_encode("ok");
                }else{
                    return json_encode("nada");
                }
            }
            public function AddData($data){
               try {
                $sql = "insert into cursos(titulo,descripcion,instructor,imagen,precio) values(:titulo,:descripcion,:instructor,:imagen,:precio)";
                $query = $this->getConnection()->prepare($sql);
                $query->bindParam(":titulo",$data->titulo);
                $query->bindParam(":descripcion",$data->descripcion);
                $query->bindParam(":instructor",$data->instructor);
                $query->bindParam(":imagen",$data->imagen);
                $query->bindParam(":precio",$data->precio);
                $query->execute();
                if($query->rowCount()>0){
                    return json_encode("ok");
                }else{
                    return json_encode("nada");
                }
               } catch (Exception $th) {
                    return json_encode($th->getMessage());
               }
            }
    }

?>