<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/board_write.css">
    <title>글 작성</title>
</head>
    
<body>
    <div id="container">
        <div id="header">
            <h1>글 작성</h1>
        </div>
        <a class="category" href="board_list.php">글 목록</a>

        <form action="board_write_ok.php" method="POST" enctype="multipart/form-data">
            <div class="form-floating">
                <input name="id" type="text" class="form-control" id="board-id" autofocus required>
                <span id="board-repeat-id"></span>
                <label>ID</label>
            </div>
            <div class="form-floating">
                <input name="pw" type="password" class="form-control" id="board-pw" required>
                <span id="board-repeat-pw"></span>
                <label>Password</label>
            </div>
            <div>
                <input name="image" type="file">
            </div>
            <div class="form-floating">
                <input name="title" type="text" class="form-control" required>
                <label>Title</label>
            </div>
            <div class="form-floating">
                <textarea name="message" class="form-control" style="height: 300px;" required></textarea>
                <label>Message</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary">Send</button>
        </form>
    </div>
    <script src="./js/board_write.js"></script>
</body>

</html>