<?php 

    include('common.php');

    $sql = "select id, title
            from board
            ";

    $result = $conn -> query($sql);

    if($result) {
        echo "
        <script>
            alert('글 작성에 성공했습니다.');
            location.href='board_list.php';
        </script>";
    } else { 
        echo "
        <script>
            alert('글 작성에 실패했습니다.');
            history.back();
        </script>";
    }
?>