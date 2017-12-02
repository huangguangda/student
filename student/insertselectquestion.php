<?php
// 访问数据库，查询学生表
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );
// 取表单数据
// if (isset ($_REQUEST ['title'])) {
//     $answer[] = isset($_REQUEST ['answer1'])?1:0;
//     $answer[] = isset($_REQUEST ['answer2'])?1:0;
//     $answer[] = isset($_REQUEST ['answer3'])?1:0;
//     $answer[] = isset($_REQUEST ['answer4'])?1:0;
//     var_dump($answer);
//     exit();
$id = $_REQUEST ['id'];
$subject = $_REQUEST ['subject'];
// $type = '单';
$title = $_REQUEST ['title'];
$memo = $_REQUEST ['memo'];
// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO select_question(subject,type,title,memo) VALUES ('$subject','$type','$title','$memo')";
// $result = mysql_query($sql);
// if ($result) {
//     $select_question_id = musql_insert_id();
//     $items[] = $_REQUEST ['item1'];
//     $items[] = $_REQUEST ['item2'];
//     $items[] = $_REQUEST ['item3'];
//     $items[] = $_REQUEST ['item4'];

// }}
?>

if (mysql_query ( $sql )) {
	echo "添加成功！！！<br/>";
	echo "<a href='index.php'>返回主页</a>";
} else {
	echo "添加失败！！！<br/>";
	echo "<a href='question.php'>重新添加</a>";
}
?>