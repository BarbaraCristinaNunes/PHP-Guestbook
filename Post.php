<?php
declare(strict_types=1);

class Post
{
    private $message;
    private $data = "data.json";

    public function _consruct($message){
        $this->message = $message;   
    }

    // create a json file
    public function addandcreatjson(){
        $creatfile = fopen($this->data, 'w');
    }

    // treat and save the messages in the json file
    public function saveData(){
        
        $data = array("title" => $this->message->getTitle(), "content" => $this->$message->getContent(), "autor" => $this->message->getAutor(), "date" => $this->message->getDate());
        $file = json_encode($data);
        file_put_contents('data.json', $file);
    }

    // write the json file in the page
    public function writeMessage(){
        echo json_decode('data.json');
    }

       

}

?>