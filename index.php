<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    



<div id="nav">
    <a href="index.php?page=Start">Start</a>
    <a href="index.php?page=zwei">zwei</a>
    <a href="index.php?page=drei">drei</a>
</div>

<?php

if ($_GET['page']=='Start') {
    echo '<h2>hello</h2>';
}
if ($_GET['page']=='zwei') {
    echo '<h2>zwei</h2>';
}
if ($_GET['page']=='drei') {
    echo '<h2>drei</h2>';
}




?>




<script src="style.js"></script>
</body>
</html>