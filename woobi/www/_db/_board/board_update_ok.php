<?php
include("common.php");
$no = $_POST['no'];
$title = $_POST['title'];
$message = $_POST['message'];

$sql = "update board set
            title = '$title',
            message = '$message'
            where 
            no = '$no'
            ";
$result = $conn->query($sql);

if($result) {
    echo "
    <script>
        alert('성공했습니다.');
        location.href='board_list.php';
    </script>";
} else {
    echo "
    <script>
        location.href='board_list.php';
    </script>";
}
    ?>