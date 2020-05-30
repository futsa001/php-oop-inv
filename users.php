<?php include "includes/header.php" ?>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="first_name" placeholder="First Name">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="last_name" placeholder="Last Name">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" name="addUser" type="submit" value="Add User">
					</div>
				</form>
			</div>

			<div class="col-md-8">
				<table class="table table-sm table-hover">
					<thead class="thead thead-dark">
						<th>Username</th>
						<th>Password</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Actions</th>
					</thead>
					<tbody>
						<?php 
						$userView = new UserView;
						$rows = $userView->allUsers();

						foreach ($rows as $key => $value) {
							?>
							<tr>
								<td><?php echo $value['username'] ?></td>
								<td><?php echo $value['password'] ?></td>
								<td><?php echo $value['first_name'] ?></td>
								<td><?php echo $value['last_name'] ?></td>
								<td>
									<a href="users.php?edit=<?php echo $value['id']?>" type="submit">Edit</a>
								</td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php include "includes/footer.php" ?>