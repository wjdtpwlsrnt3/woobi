<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/board_content.css">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>글 내용</h1>
        </div>

        <a class="category" href="board_write.php">글 작성</a>
        <a class="category" href="board_list.php">글 목록</a>

        <?php
        include('common.php');

        $no = $_GET['no'];

        $sql = "select id, title, no, message, image
            from board
            where no = '$no'
            ";
        $result = $conn->query($sql);
        $data = mysqli_fetch_assoc($result);

        if ($data) {
        } else {
            echo "
        <script>
            alert('실패');
            location.href='board_list.php';
        </script>
        ";
        }
        $sql = "select comment
                 from board_comment
                 where no = '$no'
                 ";
        $result1 = $conn->query($sql);
        $data1 = mysqli_fetch_assoc($result1);
        ?>
        

        <table>
            <tr>
                <td class="title">일련번호</td>
                <td class="content"><?php echo $data['no'] ?></td>
            </tr>
            <tr>
                <td class="title">작성자</td>
                <td class="content"><?php echo $data['id'] ?></td>
            </tr>
            <tr>
                <td class="title">제목</td>
                <td class="content"><?php echo $data['title'] ?></td>
            </tr>
            <tr>
                <td class="title">내용</td>
                <td class="content">
                    <?php echo "<img src='$data[image]' alt=''>"; ?>
                    <?php echo $data['message'] ?>
                </td>
            </tr>
        </table>
            <button class="del_btn">삭제</button>
            <a href="board_update.php">수정</a>

        <form action="comment_input.php" method="post">
            <div id="comment-input">
                <h2>댓글</h2>
                <textarea name="comment" required></textarea>
                <button>작성12완료</button>
            </div>
        </form>

        <div id="comment-output">
            <table>
                <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                    <tr id="row">
                        <td><?php echo $row['comment'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <script>
        let del_btn = document.querySelector('.del_btn');

        del_btn.addEventListener('click', function() {
            location.href='board_delete_ok.php?no=' + <?php echo $no ?>
        })
    </script>
</body>

</html>