
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
    <br><br>
    <a href="write.html"><input type="button" value="글쓰기"></a>
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
mysqli_connect(HOST,USER,PASSWORD,DB_NAME);


while(){

}




?>
