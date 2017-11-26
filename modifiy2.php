<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-25
 * Time: 오후 4:39
 */

$title = $_POST['title'];
$contents = $_POST['contents'];
$num = $_POST['num'];

define("HOST","localhost");
define("USER","root");
define("PASSWORD","autoset");
define("DB_NAME","yeon");
define("TB_NAME","suda_board");
$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
$query = "update ".TB_NAME." set subject = '$title', contents = '$contents' where board_id=$num";
mysqli_query($db_con,$query);

echo "<script>alert('수정 완료 되었습니다.')</script>";
echo "<script>location.href='main.php'</script>"

?>