<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['name'];
$className = $_REQUEST ['className'];
$birthday = $_REQUEST ['birthday'];
$sex = $_REQUEST ['sex'];
$nation = $_REQUEST ['nation'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "UPDATE student SET studentId='$studentId',name='$name',className='$className',birthday='$birthday',sex='$sex',nation='$nation' WHERE id=$id";
if (mysql_query ( $sql )) {
	echo "修改成功！！！<br/>";
	echo "<a href='index.php'>返回</a>";
} else {
	echo "修改失败！！！<br/>";
	echo "<a href='index.php'>返回</a>";
}


