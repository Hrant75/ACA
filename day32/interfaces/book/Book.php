<?php

include "iWriter.php";

class Book extends Writer
{
    public $title;
    public $author;
    public $year;

//    public function printBook()
//    {
//        echo 'Author : '.$this->author.'<br>';
//        echo 'Title : '.$this->title.'<br>';
//        echo 'Year : '.$this->year.'<br>';
//    }

    public function getJSON()
    {
        // TODO: Implement getJSON() method.
        $book = [
            "title" => $this->title,
            "author" => $this->author,
            "year" => $this->year
        ];
        
        return json_encode($book);
    }

    public function getXML()
    {
        // TODO: Implement getXML() method.
    }
}