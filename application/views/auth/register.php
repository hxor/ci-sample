<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style type="text/css">
		.validation-error {
			color: #ff0000;
		}
	</style>
</head>
<body>
	<?= form_open('auth/register'); ?>
		<p>
			<?= form_label('Name :', 'name'); ?>
			<?= form_input('name', $input->name); ?>
			<?= form_error('name') ?>
		</p>
		<p>
			<?= form_label('Email :', 'email'); ?>
			<?= form_input('email', $input->email, ['type' => 'email']); ?>
			<?= form_error('email') ?>
		</p>
		<p>
			<?= form_label('Password :', 'password'); ?>
			<?= form_password('password', $input->password); ?>
			<?= form_error('password') ?>
		</p>
		<p>
			<?= form_button(['type' => 'submit', 'content' => 'Submit']) ?>
		</p>
	<?= form_close(); ?>
</body>
</html>
