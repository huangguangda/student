<?php require_once 'base.php';?>
<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
?>
<style type="text/css">
#col-md-12{
	
}
</style>
<div id="page-wrapper" align='center'>
	<div class="row">
		<div class="col-md-12">
		<hr />
		<h1 align='center'>添加学生成绩</h1>
		<form action="insertscoredo.php" method='post'>
			
			<table width=300 align='center'>
			
				<tr>
					<td align='center'><i
							class='fa fa-apple fa-1x'>学号</td>
					<td><input type='text' name='studentId'
						 /></td>
				</tr>
				<tr>
					<td align='center'><i
							class='fa fa-pencil fa-1x'>学期</td>
					<td><input type='text' name='term' /></td>
				</tr>
				<tr>
					<td align='center'><i
							class='fa fa-list-alt fa-1x'>科目</td>
					<td><input type='text' name='subject'
						 /></td>
				</tr>
				</div>
				<tr>
					<td align='center'><i
							class='fa fa-book fa-1x'>成绩</td>
					<td><input type='text' 
						name='mark'  /></td>
				</tr>
				<tr>
					<td colspan=2 align='center'><input type='submit' class="btn btn-success" value='确认添加' /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</div>

</body>
</html>