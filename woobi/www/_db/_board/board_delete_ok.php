<?php
    include("common.php");
    $no = $_GET['no'];

    $sql = "delete from board
            where 
            no = '$no'
        ";
$result = $conn->query($sql);

if($result) {
    echo "
    <script>
    alert('�����Ϸ�');
        location.href='board_list.php';
    </script>";
} else { 
    echo "
    <script>        
    alert('��������');
        history.back();
    </script>";
}
?>
