<?php
// 访问数据库，查询学生表
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );
// 取表单数据
$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$term = $_REQUEST ['term'];
$subject = $_REQUEST ['subject'];
$mark = $_REQUEST ['mark'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "UPDATE score SET studentId='$studentId',term='$term',subject='$subject',mark='$mark' WHERE id=$id";
if (mysql_query ( $sql )) {
    echo "修改成功！！！<br/>";
    echo "<a href='index.php'>返回</a>";
} else {
    echo "修改失败！！！<br/>";
    echo "<a href='index.php'>返回</a>";
}
?>