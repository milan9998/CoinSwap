<page-register>
	<form method="post">
		<label>Username:</label>
		<input type="text" placeholder="Enter username" name="username" value="<?= $username ?? '' ?>">
		<label>Email:</label>
		<input type="email" placeholder="Enter email" name="loginemail" value="<?= $loginemail ?? '' ?>">
		<label>Password:</label>
		<input type="password" placeholder="Enter password" name="password">
		<button>Register</button>
	</form>
</page-register>