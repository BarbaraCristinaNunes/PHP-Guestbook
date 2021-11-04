<?php
declare(strict_types=1);

require 'Message.php';
require 'Post.php';


function makeComment(){
    if(isset($_POST['btn'])){  
        $message = new Message();
        $title;
        $content;
        $autor;
        $date; 

    // get the message of the user
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $autor = htmlspecialchars($_POST['autorName']);
        $date = date("d-m-Y");

    // send the message to the class Message
        $message->setTitle($title);
        // $message->getTitle($title);
        $message->setContent($content);    
        $message->setAutor($autor);
        $message->setDate($date);
        $array = $message->getArray();
  
    
        $post = new Post();
   

    // call the function that create a json file
        $post->addandcreatjson();

    // call the function that save the message of the user in the json file
        $post->saveData($array);
    

    // write the information of the json file in the page
        $post->writeMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guestbook</title>
    </head>
    <body>
        <form method="post">
        
            <div class="form-row">
                <div class="form-row">
                    <div class="form-col-6">
                        <label for="title">Title:</label>
                        <input type="text" value="" name="title" class="form-control"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col-6">
                        <label for="content">Message:</label>
                        <input type="content" value="" name="content" class="form-control"/>
                    </div>
                
                </div>
                <div class="form-row">
                    <div class="form-col-6">
                        <label for="autorName">Autor name:</label>
                        <input type="autorName" value="" name="autorName" class="form-control"/>
                    </div>
                    <div class="form-col-6">
                        <button type="submit" class="btn btn-primary" name="btn">Send message </button>
                    </div>                
                </div>
                <div class="form-row text-center">
                    <?php makeComment(); ?>
                </div>
            </div>
        
        </form>
    </body>
</html>