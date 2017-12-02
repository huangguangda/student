<?php require_once 'base.php';?>
<?php

if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
require_once 'dbconfig.php';
// 访问student中指定的id
$id = $_REQUEST ['id'];
$query = "select * from student where id=$id";
$result = mysql_query ( $query );
$row = mysql_fetch_array ( $result );
?>
<style type="text/css">
#col-md-12{
	
}
</style>
<div id="page-wrapper" align='center'>
	<div class="row">
		<div class="col-md-12">
			<hr />
			<h1 align='center'>编辑学生信息</h1>
		<form action="editdo.php" method='post'>
			<input type='hidden' name='id' value='<?=$row ['id']?>' />
			<table width=350 cellspacing=0 cellpadding=5>
				<tr>
					<td width=100 align='center'><i class='fa fa-circle-o-notch fa-1x'></i>学号</td>
					<td><input type='text' name='studentId'
						value='<?=$row ['studentId']?>' /></td>
				</tr>
				<tr>
					<td width=100 align='center'><i
							class='fa fa-user fa-1x'></i>姓名</td>
					<td><input type='text' name='name' value=<?=$row ['name']?> /></td>
				</tr>
				<tr>
					<td width=100 align='center'><i
							class='fa fa-flag fa-1x'></i>班级</td>
					<td><input type='text' name='className'
						value=<?=$row ['className']?> /></td>
				</tr>
				</div>
				<tr>
					<td width=100 align='center'><i class='fa fa-birthday-cake fa-1x'></i>生日</td>
					<td><input class="laydate-icon" type='text' id='birthday'
						name='birthday' value=<?=$row ['birthday']?> /></td>
				</tr>
				<tr> 
					<td width=100 align='center'><i
							class='fa fa-female fa-1x'></i>性别</td>
					<td><input type='radio' name='sex' value='男'
						<?=$row ['sex']=='男'?'checked':''?>>男</input> <input type='radio'
						name='sex' value='女' <?=$row ['sex']=='女'?'checked':''?>>女</input>
					</td>
				</tr>
				<tr>
					<td width=100 align='center'><i
							class='fa fa-map-marker fa-1x'></i>民族</td>
					<td><input type='text' name='nation' value=<?=$row ['nation']?> /></td>
				</tr>
				<tr>
					<td width=100 align='center' colspan=2><input type='submit' 
						value='确认修改' /></td>
				</tr>
			</table>
		</form>
	</div>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}(); 
</script>
</body>
</html>