<?php
$friend_name = $_GET["recipient"];
$my_name = $_GET["sender"];
$plural_noun = $_GET["nouns"];
$place = $_GET["place"];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Create a greeting!</title>
</head>
<body>
    <div class="container">
        <h1>Fill in your name and your friend's name to create your custom greeting!</h1>

        <form action="letter.php">
            <div class="form-group">
                <label for="sender">Your name</label>
                <input id="sender" name="sender" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="recipient">Your friend's name</label>
                <input id="recipient" name="recipient" class="form-control" type="text">
            </div>
            <button type="submit" class="btn">Go!</button>
        </form>

    </div>
    <div class="container">
        <h1>Fill in your name and your friend's name to create your custom greeting!</h1>

        <form action="letter2.php">
            <div class="form-group">
                <label for="sender">Your name</label>
                <input id="sender" name="sender" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="recipient">Your friend's name</label>
                <input id="recipient" name="recipient" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="nouns">Plural noun</label>
                <input id="nouns" name="nouns" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="place">Place</label>
                <input id="place" name="place" class="form-control" type="text">
            </div>
            <button type="submit" class="btn">Go!</button>
        </form>

    </div>
</body>
</html
