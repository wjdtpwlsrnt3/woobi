<?php
function randName() {
    $strUp = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $strDown = "abcdefghijklmnopqrstuvwxyz";
    $lnFirst = rand(4, 8);
    $lnLast = rand(7, 13);
    $strFirst = "";
    $strLast = "";

    for($i = 0; $i < $lnFirst; $i++) {
      if (!$i) {
        $strFirst .= $strUp[rand(0, strlen($strUp) - 1)];
      } else {
        $strFirst .= $strDown[rand(0, strlen($strDown) - 1)];
      }
    }

    for($i = 0; $i < $lnLast; $i++) {
      if (!$i) {
        $strLast .= $strUp[rand(0, strlen($strUp) - 1)];
      } else {
        $strLast .= $strDown[rand(0, strlen($strDown) - 1)];
      }
    }

    return $strFirst." ".$strLast;
   }

   $start = 11;
   $viewCount = 2;

   $sql = 
   "select *
   from paging
   limit $start, $viewCount";

   $rec = $conn->query($sql);
   while($row = $rec->fetch_assoc()) {
    echo $row["pID"].": ".$row["pName"]."<br>";
   }
   ?>