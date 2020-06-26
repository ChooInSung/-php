<?php
$conn = mysqli_connect('localhost','root','tjddls933', 'opentutorials');
$sql = "
    INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
";
mysqli_query($conn, $sql);
echo '<a href="index.php">돌아가기</a>';
?>