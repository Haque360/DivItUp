<?php
    class Image{
        private $name;
        private $fileType;
        private $image;

        function __construct($name, $fileType, $image){
            $this->name = $name;
            $this->fileType = $fileType;
            $this->image = $image;
        }

        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getFileType(){
            return $this->fileType;
        }
        function getImage(){
            return $this->image;
        }
    }

?>
