<?php
$friend_name = $_GET["recipient"];
$my_name = $_GET["sender"];
$plural_noun = $_GET["nouns"];
$place = $_GET["place"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Greetings!</title>
</head>
<body>
    <h1>Greetings From <? echo $place; ?></h1>
    <p>Dear <?php echo $friend_name; ?>,</p>
    <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the <?php echo $plural_noun; ?> of Tibet while I learn programming! </p>
    <p> <?php echo $friend_name; ?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
    <p>Looking forward to seeing you soon. I'll bring you back a souvenir. </p>
    <p>Cheers,</p>
    <p><?php echo $my_name; ?></p>
    <div>
    <form action="greetings_to_anyone.php">
      <button type="submit" class="btn btn-primary">Back to form</button>
    </div>
</body>
</html>
