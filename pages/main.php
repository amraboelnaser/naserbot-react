<div class="row">
	<div class="col-md-6">
		<div class="panel panel-filled">
			<div class="panel-heading">
				<div class="panel-tools">
					<a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
					<a class="panel-close"><i class="fa fa-times"></i></a>
				</div>
				Bảng Điều Khiển
			</div>
			<div class="panel-body">
				<p>Xin chào <code><?=$_SESSION['ten'];?></code> - <code><?=$_SESSION['idfb'];?></code></p>
				<?
					$check= @mysql_query("SELECT * FROM CamXuc WHERE idfb = '".$_SESSION[idfb]."'");
					$arr = @mysql_fetch_array($check);
					if(mysql_num_rows($check) < 1)
					{
						$status = 'Bạn Chưa Cài BOT';
					}
					else
					{
						$key = 1;
					 	$input = '<input type="hidden" name="capnhat"  value="capnhat">';
					 	$status = 'Bạn Đã Cài BOT '.$arr[camxuc];
					 } 
				?>
				<p>Tình Trạng: <code><?=$status;?></code></p>
				<form action="post/action.php" method="POST">
					<div class="radio"><label> <input type="radio" name="reaction" id="LOVE" value="LOVE" checked="checked"> Cảm Xúc: LOVE </label></div>
					<div class="radio"><label> <input type="radio" name="reaction" id="WOW" value="WOW">Cảm Xúc: WOW </label></div>
					<div class="radio"><label> <input type="radio" name="reaction" id="HAHA" value="HAHA">Cảm Xúc: HAHA </label></div>
					<div class="radio"><label> <input type="radio" name="reaction" id="SAD" value="SAD">Cảm Xúc: SAD </label></div>
					<div class="radio"><label> <input type="radio" name="reaction" id="ANGRY" value="ANGRY">Cảm Xúc: ANGRY </label></div>
					<div class="radio"><label> <input type="radio" name="reaction" id="ANGRY" value="tatbot">Tắt BOT </label></div>
					<?if($key==1)echo $input;?>
					<center><button type="submit" class="btn btn-w-md btn-success"><?if($key==1)echo "Cập Nhật BOT"; else echo "Cài BOT";?></button>
				</form>
				</center>                      
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-filled">
			<div class="panel-heading">
				<div class="panel-tools">
					<a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
					<a class="panel-close"><i class="fa fa-times"></i></a>
				</div>
				Thống Kê
			</div>
			<div class="panel-body">
				<p>Thông tin người dùng <code>mới nhất</code> được cập nhật tại đây.</p>
				<p>Số người dùng <code>104</code> .</p>
				<div class="table-responsive">
					<table  class="table table-hover table-striped">
						<thead>
							<tr>
								<th>CX</th>
								<th>Name</th>
								<th>ID</th>
							</tr>
						</thead>
						<tbody>
						<?
						$res= @mysql_query("SELECT * FROM CamXuc  LIMIT 10");
						while ($arr = mysql_fetch_array($res)) 
						{
						?>
							<tr>
								<td><?echo$arr['camxuc'];?></td>
								<td><?echo$arr['ten'];?></td>
								<td><?echo$arr['idfb'];?></td>
							</tr>
						<?}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>