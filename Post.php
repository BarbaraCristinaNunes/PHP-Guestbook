<?php
declare(strict_types=1);

class Post
{

    private array $entries;
    
    public function __construct(){
       
        
    }


    // treat and save the messages in the json file
    

    public function fillJson($message){

        $information = json_decode(file_get_contents("data.json"));
        array_unshift($information, $message);
        // $information[] = $message;
        file_put_contents("data.json", json_encode($information));


        // $array = [];
        // $information = json_decode(file_get_contents("data.json"));
        // array_push($array, $information);
        // array_unshift($array, $message);
        // // $information[] = $message;
        // file_put_contents("data.json", json_encode($array));


        
    }


    // write the json file in the page
    public function writeMessage(){

        $information = json_decode(file_get_contents("data.json"));
            // var_dump($information);
            for($i = 0; $i < count($information); $i++){
                echo "<h1>".$information[$i]->title. "</h1><br>";
                echo "<p>" .$information[$i]->content."</p><br>";
                echo "<p>" .$information[$i]->autor. "</p><br>";
                echo "<p>" .$information[$i]->date. "</p> <br>";
            }
            
                
    }

       

}

?>