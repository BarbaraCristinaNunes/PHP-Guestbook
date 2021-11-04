<?php
declare(strict_types=1);

class Post
{
    private $message;
    private $data = "data.json";
    private $newMessage = [];
    private $oldMessage = [];

    public function _construct(){
        
    }

    // create a json file
    public function addandcreatjson(){
        $creatfile = fopen($this->data, 'w');
    }

    // treat and save the messages in the json file
    

    public function decodeData(){
        $this->message = $message;

        $readFile = file_get_contents($this->data);
        $information = json_decode($readFile);
        $data = array("title" => $this->message[0], "content" => $this->message[1], "autor" => $this->message[2], "date" => $this->message[3]);

        array_unshift($this->newMessage, $data);

        if(isset($information)){
            $file = file_put_contents("data.json", $this->newMessage);
            
        }

        $this->oldMessage = $information;
    }

    public function encodeData($message){
       
        
    }

    // write the json file in the page
    public function writeMessage(){

            $getData = file_get_contents($this->data);
            $information = json_decode($getData);
            
            echo <<<_END
                <h1> $information->title </h1><br>
                <p> $information->content </p><br>
                <p> $information->autor </p><br>
                <p> $information->date </p>
            _END;
                
    }

       

}

?>