<?php
include("common.php");
$no = $_POST['no'];
$comment = $_POST['comment'];
$URL = './board_list.php';


// if ($result) {
if (1) {
    $sql = "insert into board_comment set
            no = 'null',
            comment = '$comment'
            ";
    $result = $conn->query($sql);
?>
    <script>
        alert("<?php echo "��ϵǾ����ϴ�." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "��Ͽ� �����Ͽ����ϴ�.";
}
?>