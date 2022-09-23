<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/www/_lib/lib.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/www/_lib/_con.php";

$sqlGenre = "SELECT * FROM Genre ORDER BY name";
$resGenre = $conn1->query($sqlGenre);

$sqlAuthor = "SELECT * FROM Author ORDER BY name";
$resAuthor = $conn1->query($sqlAuthor);

$uid = 4;

$sqlUser = "SELECT * FROM Users WHERE id = $uid";
$resUser = $conn1->query($sqlUser);
$user = $resUser->fetch_assoc();

$likeAuthors = getLikeAuthors($conn1, $uid);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원수정</title>
    <style>
        .err {
            font-weight: normal;
            color: red;
        }

        .ok {
            font-weight: normal;
            color: green;
        }

        input:read-only {
            background-color: gray;
            color: darkgray;
        }

        input[type='submit'] {
            background-color: #fefefe;
            color: black;
        }
    </style>
</head>

<body>
    <form action="modify_ok.php" method="post">
        <table>
            <tr>
                <th><label for="userId">아이디</label></th>
                <td><input type="text" name="userId" id="userId" value="<?php echo $user["userId"] ?>" readonly><span id="hit"></span></td>
            </tr>
            <tr>
                <th><label for="userName">이름</label></th>
                <td><input type="text" name="userName" id="userName" value="<?php echo $user["name"] ?>"></td>
            </tr>
            <tr>
                <th>작가</th>
                <td>
                    <?php
                    if ($resAuthor->num_rows > 0) {
                        while ($row = $resAuthor->fetch_assoc()) {
                            $checked = "";
                            for ($i = 0; $i < count($likeAuthors); $i++) {
                                if ($likeAuthors[$i] == $row["id"]) {
                                    $checked = "checked";
                                }
                            }
                            echo "<label><input type=\"checkbox\" name=\"userAuthor[]\" $checked value=\"" . $row["id"] . "\"> " . $row["name"] . "</label>   ";
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>장르</th>
                <td>
                    <?php
                    if ($resGenre->num_rows > 0) {
                        while ($row = $resGenre->fetch_assoc()) {
                            echo "<label><input type=\"checkbox\" name=\"userGenre[]\" value=\"" . $row["id"] . "\"> " . $row["name"] . "</label>   ";
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="회원가입"></td>
            </tr>
        </table>
    </form>
    <script src="js/modify.js"></script>
</body>

</html>