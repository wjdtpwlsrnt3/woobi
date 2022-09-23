<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/rwb/_lib/lib.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/rwb/_lib/_con.php";

$userId = $_POST["userId"];
$userPwd = hash("sha256", $_POST["userPwd"]);

$sql = "SELECT * FROM Users WHERE userId = '$userId' AND pwd = '$userPwd'";

$res = $conn1->query($sql);
if ($res->num_rows) {
    $row = $res->fetch_assoc();
    $_SESSION['userName'] = $row['name'];
    $_SESSION['userId'] = $row['userId'];
    gotoUrl('../index.php');
} else {
    errHandler('../index.php', '아이디나 비번 체크 바람');
}
