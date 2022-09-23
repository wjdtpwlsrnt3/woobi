<?php
  $servername = "localhost"; 
  $username = "sejin1230"; 
  $password = "skaksdml12"; 
  $db = "sejin1230";

  $conn1 = new mysqli($servername, $username, $password, $db);
  if ($conn1->connect_error) {
    die("conn1 Connection failed: " . $conn1->connect_error);
  }

  $conn2 = mysqli_connect($servername, $username, $password, $db);
  if (!$conn2) {
    die("conn2 Connection failed: " . mysqli_connect_error());
  }

  try {
    $conn3 = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "conn3 Connection failed: " . $e->getMessage();
  }

  $sql = "select count(*) as total from paging";
  $res = $conn->query($sql);
  $row = $res->fetch_assoc();
  $total = $row["total"];

  $start = 0;
  $viewCount = 2;

  $page = $total / $viewCount;

  for ($i = 0; $i < $page; $i++) {
    echo ($i + 1)." ";
  }

  echo "<hr>";

  $sql = "select * from paging limit $start, $viewCount";
  $rec = $conn->query($sql);
  while($row = $rec->fetch_assoc()) {
    echo $row["pID"].": ".$row["pName"]. "<br>";
  }
  
?>