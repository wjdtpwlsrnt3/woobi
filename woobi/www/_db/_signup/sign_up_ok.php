<?php 

include('common.php');

$id = $_POST['id'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];
$name = $_POST['name'];
$adress = $_POST['adress'];
$birth = $_POST['birth'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "insert into sign_up set
        id = '$id',
        password = '$password',
        password_check = '$password_check',
        name = '$name',
        adress = '$adress',
        birth = '$birth',
        gender = '$gender',
        email = '$email',
        phone = '$phone'
        ";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        alert('ȸ�����Կ� �����߽��ϴ�.');
        location.href='sign_in.php';
    </script>
    ";
} else { 
    echo "
    <script>
        alert('ȸ�����Կ� �����߽��ϴ�.');
        // history.back();
    </script>
    ";
}
