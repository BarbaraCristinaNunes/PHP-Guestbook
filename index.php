<?php
declare(strict_types=1);

require 'Message.php';
require 'Post.php';

$message = new User();
$post = new Post();

if(isset($_POST['btn'])){
    $message->getTitle($_POST['title']);
    $message->getContent($_POST['content']);    
    $message->getAutor($_POST['autorName']);
    $message->getDate(date("Y/m/d"));
    
    var_dump($message->getTitle($_POST['title']));
    var_dump($message->getContent($_POST['content']));
    var_dump($message->getAutor($_POST['autorName']));
    var_dump($message->getDate(date("Y/m/d")));
    
    var_dump($post->writeMessage());
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
            </div>
        
        </form>
    </body>
</html>