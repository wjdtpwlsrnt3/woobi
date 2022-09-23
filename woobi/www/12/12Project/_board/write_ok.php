<?php
include("../common.php");
$writer = $_SESSION['userId'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "
INSERT INTO project_board SET
writer = '$writer',
title = '$title',
content = '$content'
";
$result = $conn->query($sql); 

if($result) {
    echo "
    <script>
        location.href='../home.html';
        alert('��� ����.');
    </script>
    ";
} else {
    echo "
    <script>
        alert('��� ����.');
        location.href=./board.php';
    </script>
    ";
}

?>