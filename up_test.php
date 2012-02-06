<?php
session_start();
include_once 'files/realigo_conn.php';
?>

<?php
include_once 'files/realigo_header.php';
?>
	<div class="content">
		<div class="basic_gray" style="padding:30px">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td>
						
						<?php
						//select test
						$sql = "SELECT test_id, test_name, description FROM realigo_tests";
						$result = mysql_query($sql,$conn) or error_report("Could not retrieve tests",__FILE__,mysql_error());
						if(mysql_num_rows($result) > 0) {
						?>
							<div>Select the test you want to modify:</div>
							<?php
							while($row = mysql_fetch_array($result)) {
							?>
								<a class="blue_box" href="<?php echo VOID_HREF; ?>" onClick="return false;">
									<span class="test_title"><?php echo htmlspecialchars($row['test_name']); ?></span>
									<span class="test_desc"><?php echo nl2br(htmlspecialchars($row['description'])); ?></span>
								</a>
							<?php
							}
						}
						?>
						
						<?php
						//option to create new test
						?>
						<div class="gray_box">
							<div>Create new test</div>
							<div>
								<input type="text" style="font-size:14px;width:200px;">
							</div>
							<div>
								<textarea style="font-size:12px;width:200px;height:300px;"></textarea>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include_once 'files/realigo_footer.php';
?>				
	