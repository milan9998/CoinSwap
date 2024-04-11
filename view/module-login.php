<page-login>
	<form method="post">
		<label>Username:</label>
		<input type="text" placeholder="Enter username" name="username" value="<?= $username ?? '' ?>">
		<label>Password:</label>
		<input type="password" placeholder="Enter password" name="password">
		<button>Login</button>
	</form>
</page-login>

