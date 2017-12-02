<?php
// 访问数据库，查询学生表
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );
// 取表单数据
$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['name'];
$className = $_REQUEST ['className'];
$birthday = $_REQUEST ['birthday'];
$sex = $_REQUEST ['sex'];
$nation = $_REQUEST ['nation'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO student(studentId, name, className, birthday, sex, nation) VALUES ('$studentId','$name','$className',$birthday,'$sex','$nation')";


if (mysql_query ( $sql )) {
	echo "添加成功！！！<br/>";
	echo "<a href='index.php'>返回主页</a>";
} else {
	echo "添加失败！！！<br/>";
	echo "<a href='insertstudent.php'>重新添加</a>";
}
?>