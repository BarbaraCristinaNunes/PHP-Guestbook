<?php
declare(strict_types=1);

class User
{
    private $title;
    private $content;
    private $autor;
    private $date;

    public function _construct () {
        $this->title = $title;
        $this->content = $content;
        $this->autor = $autor;
        $this->date =$date;
    }

    public function getTitle($title){
        return $this->title = $title;
    }

    public function getContent($content){
        return $this->content = $content;        
    }

    public function getAutor($autor){
        return $this->autor = $autor;
    }

    public function getDate($date){
        return $this->date = $date;
    }
}

?>