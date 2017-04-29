<div class="row">
	<div class="col-md-6">
		<div class="panel panel-filled">
			<div class="panel-heading">
				<div class="panel-tools">
					<a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
					<a class="panel-close"><i class="fa fa-times"></i></a>
				</div>
				Đăng Nhập
			</div>
			<div class="panel-body">
				<p>Dùng tài khoản facebook của bạn để <code>đăng nhập</code>, chúng tôi sẽ không lưu tài khoản của bạn cũng như sẽ bảo mật token của bạn 1 cách tuyệt đối.</p>
				<p>Mật khẩu có <code>kí tự đặc biệt</code> sẽ không thể đăng nhập.</p>
				<form action="login/login-sys.php" method="POST">
					<div class="form-group"><label for="exampleInputEmail1">Email/Username</label> <input type="text" class="form-control" id="email" name="account" placeholder="Email/Username"></div>
					<div class="form-group"><label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="pass" name="password" placeholder="Password"></div>
					<button type="submit" class="btn btn-default">Đăng nhập</button>
				</form>
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
						$res= @mysql_query("SELECT * FROM CamXuc LIMIT 10");
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
