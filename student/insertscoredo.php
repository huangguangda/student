<?php
// 访问数据库，查询学生表
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );
// 取表单数据

$studentId = $_REQUEST ['studentId'];
$term = $_REQUEST ['term'];
$subject = $_REQUEST ['subject'];
$mark = $_REQUEST ['mark'];
// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO score(studentId, term, subject,mark) VALUES ('$studentId','$term','$subject','$mark')";


if (mysql_query ( $sql )) {
	echo "添加成功！！！<br/>";
	echo "<a href='index.php'>返回主页</a>";
} else {
	echo "添加失败！！！<br/>";
	echo "<a href='insertscore.php'>重新添加</a>";
}
?>