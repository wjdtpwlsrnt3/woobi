<?php 

    include('common.php');

    $sql = "select id, title
            from board
            ";

    $result = $conn -> query($sql);

    if($result) {
        echo "
        <script>
            alert('�� �ۼ��� �����߽��ϴ�.');
            location.href='board_list.php';
        </script>";
    } else { 
        echo "
        <script>
            alert('�� �ۼ��� �����߽��ϴ�.');
            history.back();
        </script>";
    }
?>