<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-24
 * Time: 오후 9:32
 */

//디비연결
//글 내용 디비에서 불러와서 보여주기
//번호 불러와서 그 번호에 맞는 쿼리 선택해서 보여준다
$num = $_GET['num'];

define("HOST","localhost");
define("USER","root");
define("PASSWORD","autoset");
define("DB_NAME","yeon");
define("TB_NAME","suda_board");
$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
$query = "select * from ".TB_NAME." where board_id = $num";
$result = mysqli_query($db_con,$query);
$array = mysqli_fetch_array($result);

$replyQuery = "select * from ".TB_NAME." where board_pid = $num";
$replyResult = mysqli_query($db_con,$replyQuery);

echo "<p>글 내용</p>";
echo "<table border='1' style='text-align: center'>";
echo "<tr>";
echo "<td>$array[4]</td>";
echo "<td>$array[5]</td>";
echo "</tr>";
echo "</table>";
echo"<p>댓글</p>";
echo "<table border='1' style='text-align: center'>";
while($replyArray = mysqli_fetch_array($replyResult)){

    echo"   <tr>
                <td>$replyArray[3]</td>
                <td>$replyArray[5]</td>
                </tr>";


}
echo "</table>";


echo "<form action='modify.php' method='post'>";
echo "<input type='hidden' name='num' value='$num'>";
echo "<input type='submit' value='수정하기'>";
echo "</form>";

echo "<form action='delete.php' method='get'>";
echo "<input type='hidden' name='num' value='$num'>";
echo "<input type='submit' value='삭제하기'>";
echo "</form>";

echo "<form action='replyWrite.html' method='post'>";
echo "<input type='hidden' name='num' value='$num'>";
echo "<input type='submit' value='댓글쓰기'>";


?>