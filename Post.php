<?php
declare(strict_types=1);

class Post
{
    private $data;
    private $message;

    public function _consruct(){
        $message = new User;
        $this->data = $data;
    }

    public function saveData(){
        file_put_contents('data.json', htmlspecialchars($message->getTitle()));
        file_put_contents('data.json', htmlspecialchars($message->getContent()));
        file_put_contents('data.json', htmlspecialchars($message->getAutor()));
        file_put_contents('data.json', htmlspecialchars($message->getDate()));
    }

    public function writeMessage(){
        echo file_get_contents('data.json');
    }

       

}

?>