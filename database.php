<?php

    class databases{
        private $base;
        private $root;
        private $pass;
        public function __construct(){
           try {
            $this->root = "root";
            $this->pass = "";
            $this->base = new PDO("mysql:host=localhost;dbname=apirest;charset=utf8",$this->root,$this->pass);
            
        } catch (Throwable $th) {
                echo $th->getMessage();
           }
        }
        public function getConnection(){
            if($this->base!=null){
                return $this->base;
            }
        }
    }

?>