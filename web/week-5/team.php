<?php
require "database.php";
$db = get_db();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scriptures</title>
    <h3>Scriptures Resources</h3>
    <?php 
    // echo "HERE!!!";

    foreach ($db->query('SELECT * FROM scripture') as $row)
    {
      echo 'user: ' . $row['verse'];
      echo ' password: ' . $row['chapter'];
      echo '<br/>';
    }
    
    ?>
</head>
<body>
    
</body>
</html>