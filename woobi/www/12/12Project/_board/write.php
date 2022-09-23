<?php
include("../common.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>���ۼ�</title>
</head>

<body>
    <form action="write_ok.php" method="post">
        <span>�ۼ���</span>
        <input type="hidden" type="text" name="userId" placeholder="�ۼ���">
        <br>

        <span>����</span>
        <input type="text" name="title" placeholder="����">
        <br>

        <span>����</span>
        <input type="text" name="content" placeholder="����">
        <input type="submit" value="�ۼ��Ϸ�">
    </form>

</body>

</html>