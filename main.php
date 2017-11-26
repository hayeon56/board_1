
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    body{background: url('suda.png')}
</style>
<body>
<center>
    <h1>(∩´∀｀)∩스다 게시판(∩´∀｀)∩</h1>
    <table border="1" style="text-align: center">
        <tr>
            <td width="150">글번호</td>
            <td width="500">제목</td>
            <td width="150">작성자</td>
            <td width="150">조회수</td>
            <td width="200">작성일</td>
        </tr>
    </table>

</center>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-21
 * Time: 오전 10:08
 */
//아이디,비번 이런거 설정
//디비연결
//쿼리작성
//쿼리전송

define("HOST","localhost");
define("USER","root");
define("PASSWORD","autoset");
define("DB_NAME","yeon");
define("TB_NAME","suda_board");
$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
$query  = "select * from ".TB_NAME." ORDER BY reg_date DESC";
$result = mysqli_query($db_con,$query);

    @session_start();

echo "<center>";

echo "<table border='1' style='text-align: center'>";
while($row = mysqli_fetch_row($result)){
    if($row[1] <= 0) {
        echo "<tr>";
        echo "<td style='width: 150px'>$row[0]</td>";
        echo "<td style='width: 500px'><a href='view.php?num=$row[0]'>$row[4]</td>";
        echo "<td style='width: 150px'>$row[3]</td>";
        echo "<td style='width: 150px'>$row[6]</td>";
        echo "<td style='width: 200px'>$row[7]</td>";
        echo "</tr>";
    }
}
echo "</table>";
if(@$_SESSION['login']) {
    echo "<a href='logout.php'><input type='button' value='로그아웃'></a>";
}
else{
    echo "<a href='login.php'><input type='button' value='로그인'></a>";
}
if(@$_SESSION['login']) {
    echo " <a href=\"write.html\"><input type=\"button\" value=\"글쓰기\"></a>";
}
else{
    ?>
    <input type="button" value="글쓰기" onclick="alert('로그인 후~~~~~ 이용해 주세욘~')">
    <?
}
echo "<br><br>";
echo "<form action='such.php' method='post'>";
echo "<p>검색</p>";
echo "<input type='text' name='such'>";
echo "</form>";
echo "</center>";

if(@$_SESSION['login']){

    echo @$_SESSION[username]."님 어서오세욧!";
}


//로그인 전은 로그인 버튼 화면 보내야돼
//로그인 후에는 로그아웃
?>
