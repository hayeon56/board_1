<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-25
 * Time: 오후 4:58
 */

$num = $_GET['num'];

const HOST = "localhost";
const USER = "root";
const PASSWORD = "autoset";
const DB_NAME = "yeon";
const TB_NAME = "suda_board";

$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
$query = "delete from ".TB_NAME." where board_id = $num";
mysqli_query($db_con,$query);

echo "<script>alert('삭제완료 됐습니다')</script>";
echo "<script>location.href='main.php'</script>"

?>