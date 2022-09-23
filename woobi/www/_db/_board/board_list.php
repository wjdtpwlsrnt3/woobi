<?php
include('common.php');

function page($start, $totalCount, $rowPerPage, $blockSet, $first, $pre, $next, $last)
{
    echo "<a href='?start=0'>$first</a>  ";

    $page = floor($start / ($rowPerPage * $blockSet));
    if ($totalCount > $rowPerPage) {
        if ($start + 1 > $rowPerPage * $blockSet) {
            $pre_start = $page * $rowPerPage * $blockSet - $rowPerPage;
            echo "<a href='?start=$pre_start'>$pre</a>";
        } else echo "$pre";
    } else echo "$pre";

    if ($totalCount > 0) echo "| ";

    for ($vj = 0; $vj < $blockSet; $vj++) {
        $ln = ($page * $blockSet + $vj) * $rowPerPage;
        $page_num = $page * $blockSet + $vj + 1;
        if ($ln < $totalCount) {
            if ($ln != $start) echo "<a href='?start=$ln'><b>$page_num</b></a> | ";
            else echo "[<b>$page_num</b>] | ";
        }
    }

    if ($totalCount > (($page + 1) * $rowPerPage * $blockSet)) {
        $n_start = ($page + 1) * $rowPerPage * $blockSet;
        echo "<a href='?start=$n_start'>$next</a>";
    } else echo  $next;

    $end_start = floor($totalCount / $rowPerPage - 1) * $rowPerPage;
    echo "<a href='?start=$end_start'>$last</a>";
}

$sql = "select id, title, no
        from board
        ";
$result = $conn->query($sql);
$totalCount = $result->fetch_assoc()['cnt'];
$start = 0;
if (isset($_GET["start"])) {
    $start = $_GET["start"];
}

$sql = "SELECT COUNT(*) AS cnt FROM board";

$result = $conn->query($sql);
$totalCount = $result->fetch_assoc()['cnt'];
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/board.css">
    <title>리스트 페이징</title>
</head>

<body>
    <?php
    if ($totalCount == 0) {
        echo "데이터가 없습니다.";
    } else {
        $rowPerPage = 3;
        $blockSet = 5;
        $link = "";

        $sql = "select * from board limit " . $start . ", " . $rowPerPage;
        $result = $conn->query($sql);
    }
    ?>

        <div id="container">
            <div id="header">
                <h1>글 목록</h1>
            </div>
            <a class="category" href="board_write.php">글 작성</a>
            <table>
                <tr>
                    <td id="no">일련번호</td>
                    <td id="title">제목</td>
                    <td id="writer">작성자</td>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><a href="board_content.php?no=<?php echo $row['no'] ?>"><?php echo $row['no'] ?></a></td>
                        <td><a href="board_content.php?no=<?php echo $row['no'] ?>"><?php echo $row['title'] ?></a></td>
                        <td><?php echo $row['id'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <div id="paging">
                <?php page($start, $totalCount, $rowPerPage, $blockSet, "처음", "이전", "다음", "마지막"); ?>
            </div>
        </div>
</body>

</html>