<?php
declare(strict_types=1);

class Message
{
    private $title;
    private $content;
    private $autor;
    private $date;

    public function _construct () {
       
    }

    

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setContent($content){
        $this->content = $content;        
    }

    public function getContent(){
        return $this->title;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }
    
    public function getAutor(){
        return $this->title;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getDate(){
        return $this->title;
    }

}

?>