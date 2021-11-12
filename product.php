<?php

    class Product {
        public $name;
        public $price;
        public $discount;

        public function setName ($data){
            return $this->name = $data;
        }
        public function setPrice ($data){
            return $this->price = $data;
        }
        public function setDiscount ($data){
            return $this->discount = $data;
        }
        
        public function getName(){
            return $this->name;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getDiscount(){
            return $this->discount;
        }
    }

?>