<?php
include("common.php");
$no = $_POST['no'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$title = $_POST['title'];
$message = $_POST['message'];
$image = $_POST['image'];
$URL = './board_list.php';
$dir = "../_image/";


// if ($result) {
if ($_FILES['image']['name']) {
    $imageFullName = strtolower($_FILES['image']['name']);
    $imageNameSlice = explode(".", $imageFullName);
    $imageName = $imageNameSlice[0];
    $imageType = $imageNameSlice[1];
    $image_ext = array('jpg', 'jpeg', 'gif', 'png');
    $dates = date("mdhis", time());
    $newImage = chr(rand(97, 122)) . chr(rand(97, 122)) . $dates . rand(1, 9) . "." . $imageType;
    move_uploaded_file($_FILES['image']['tmp_name'], $dir . $newImage);

    $sql = "insert into board set
            no = 'null',
            id = '$id',
            pw = '$pw',
            title = '$title', 
            message = '$message',    
            image = '" . $dir . $newImage . "'
            ";
    $result = $conn->query($sql);
?>
    <script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}
?>