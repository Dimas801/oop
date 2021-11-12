<?php
    include_once('product.php');

    class CDCabinet extends Product{
        private $capacity;
        private $model;

        public function setCapacity($data){
            return $this->capacity = $data;
        }
        public function setModel($data){
            return $this->model = $data;
        }

        public function getCapacity(){
            return $this->capacity;
        }
        public function getModel(){
            return $this->model;
        }
    }

?>