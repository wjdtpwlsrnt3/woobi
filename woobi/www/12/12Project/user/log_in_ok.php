<?php
include("../common.php");
$id = $_POST['userId'];
$pw = $_POST['userPw'];
$sql = "
SELECT id,pw,no 
FROM project_user
where id = '$id'";
$res = $conn -> query($sql);
$db_pw = mysqli_fetch_assoc($res); 
if($db_pw){ 
    if($pw == $db_pw['pw']){
        $_SESSION['userId'] = $db_pw['id'];
        $_SESSION['userPw'] = $db_pw['pw'];
        echo"
        <script>
        console.log('�α����ߴ�');
        alert('�α��εǾ����ϴ�');
        location.href='../home.html';
        </script>
        ";
    } else{
        echo"
        <script>
        alert('���̵� Ȥ�� ��й�ȣ�� �ٸ��ϴ�');
        history.back()
        </script>
        ";
    }
}
else{
    echo"
    <script>
    alert('���̵� Ȥ�� ��й�ȣ�� �ٸ��ϴ�');
    history.back()
    </script>
    ";
}
?>
