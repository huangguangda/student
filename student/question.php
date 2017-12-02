<?php require_once 'base.php';?>

<?php
require_once 'dbconfig.php';
// 访问student
$query = "select * from select_question";
$result = @mysql_query($query);
while($questions[] = mysql_fetch_array($result)){}
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>选择题题库</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"><a href='editQuestion.php'><button class='btn btn-warning'><i class='fa fa-paint-brush'>录入选择题</i></button></a></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>题号</th>
										<th>科目</th>
										<th>类别</th>
										<th>题目</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
                        		<?php
								$lineno = 0;
								foreach($questions as $row) {
									$lineno ++;
									$linestyle = $lineno % 2 == 1 ? "odd gradeX" : "even gradeC";
									echo "<tr class='" . $linestyle . "'>";
									echo "<td>" . $row ['id'] . "</td>";
									echo "<td>" . $row ['subject'] . "</td>";
									echo "<td>" . $row ['type'] . "</td>";
									echo "<td>" . $row ['title'] . "</td>";
									$url = "editselectquestion.php";
									$delurl = "deleteQuestion.php";
									
									echo "<td><a class='btn btn-primary btn-sm shiny' href='".$url."'><i class='fa fa-edit'>&nbsp;编辑</i></a>&nbsp;&nbsp;<a class='btn btn-danger btn-sm shiny' href='" . $delurl . "'><i class='fa fa-trash-o'>&nbsp;删除</i></a></td>";
									echo "</tr>";
								}
								?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
	$(document).ready(function() {
		$('#dataTables-example').dataTable();
	});
</script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>
</html>