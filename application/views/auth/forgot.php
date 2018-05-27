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
	<?= form_open('auth/forgot'); ?>
		<p>
			<?= form_label('Email :', 'email'); ?>
			<?= form_input('email', $input->email, ['type' => 'email']); ?>
			<?= form_error('email') ?>
		</p>
		<p>
			<?= form_button(['type' => 'submit', 'content' => 'Submit']) ?>
		</p>
	<?= form_close(); ?>
</body>
</html>
