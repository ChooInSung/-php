<?php
$conn = mysqli_connect('localhost','root','tjddls933', 'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
var_dump($result-> num_rows);

?>