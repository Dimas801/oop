<?php
    include_once('product.php');

    class CDMusic extends Product{
        private $artist;
        private $genre;

        public function setArtist($data){
            return $this->artist = $data;
        }
        public function setGenre($data){
            return $this->genre = $data;
        }

        public function getArtist(){
            return $this->artist;
        }
        public function getGenre(){
            return $this->genre;
        }
    }

?>