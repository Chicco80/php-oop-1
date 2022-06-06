<?php
class Movie{
    private $img;
    private $title;
    private $genre;
    private $year;
    private $price;


    function __construct($_img, $_title, $_genre, $_year, $_price){
        $this->img = $_img;
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->price = $_price;
    }
    public function getImg(){
        return $this->img;
    }
    



    public function getTitle(){
        return $this->title;
    }


    public function getGenres(){
        return $this->genre;
    }


    public function getYear(){
        return $this->year;
    }


    public function getPrice(){
        return $this->price;
    }
    
}