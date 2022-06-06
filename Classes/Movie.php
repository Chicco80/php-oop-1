<?php
class Movie{
    private $title;
    private $genre;
    private $year;
    private $price;


    function __construct($_title, $_genre, $_year, $_price){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->price = $_price;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($_title){
        $this->title = $_title;

    }

    public function getGenres(){
        return $this->genre;
    }
    public function setGenres($_genres){
        $this->genre = $_genres;
    }

    public function getYear(){
        return $this->year;
    }
    public function setYear($_year){
        $this->year = $_year;
    }

    public function getPrice(){
        return $this->price;
    }
    public function setPrice($_price){
        $this->price = $_price;
    }
}