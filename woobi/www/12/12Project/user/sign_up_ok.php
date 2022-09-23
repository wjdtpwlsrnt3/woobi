<?php
include("../common.php");

$id = $_POST['userId'];
$pw = $_POST['userPw'];
$name = $_POST['userName'];
$email = $_POST['userEmail'];
$phone = $_POST['userPhon'];

$sql = "INSERT INTO project_user SET
id = '$id',
pw = '$pw',
name = '$name',
email = '$email', 
phone = '$phone'
";

$res = $conn->query($sql);

if($res){
    echo "
    <script>
    location.href='log_in.php';
    alert('ȸ�����Կ� �����߽��ϴ�.');
    </script>
    ";
}else{
    echo "
    <script>
    location.href='sign_up.php';
    alert('ȸ�����Կ� �����߽��ϴ�.');
    </script>
    ";

}



?>