<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/sign_in.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>�α���</title>
</head>

<body>
    <div id="log">
        <label for="name"></label>
        <h1>ȯ���մϴ�!</h1>
        <form action="">
            <input type="text" name="name" id="name" maxlength="16" placeholder="ID" required autofocus>
            <label for name="pw"></label>
            <input type="password" id="pw" maxlength="16" placeholder="PW" required>
            <input id="login" type="submit" value="LOGIN">
        </form>
        <label for="new"><a href="sign_up.php">[ȸ������]</a></label>
    </div>
</body>

</html>