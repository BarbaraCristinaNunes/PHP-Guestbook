<?php
declare(strict_types=1);

class Message
{
    private $title;
    private $content;
    private $autor;
    private $date;
    private array $test=[];

    public function __construct ($title, $content, $autor, $date) {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAutor($autor);
        $this->setDate($date);
    }
  
    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function makeArray()
    {
        $this->test = ["title" => $this->title, "content" => $this->content, "autor" => $this->autor, "date" => $this->date];
        return $this->test;
    }

    public function setContent($content){
        $this->content = $content;        
    }

    public function getContent(){
        return $this->content;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }
    
    public function getAutor(){
        return $this->autor;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }

}

?>