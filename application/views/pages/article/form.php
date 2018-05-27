<div id="content">

	<style type="text/css">
		.validation-error {
			color: #ff0000;
		}
	</style>

<!-- 	<div class="validation-error">
		<?= validation_errors() ?>
	</div> -->

	<?= form_open($form_action); ?>
		<p>
			<?= form_label('Date :', 'date'); ?>
			<?= form_input('date', $input->date); ?>
			<?= form_error('date') ?>
		</p>
		<p>
			<?= form_label('Title :', 'title'); ?>
			<?= form_input('title', $input->title); ?>
			<?= form_error('title') ?>
		</p>
		<p>
			<?= form_label('Body :', 'body'); ?>
			<?= form_textarea('body', $input->body); ?>
			<?= form_error('body') ?>
		</p>
		<p>
			<?= form_button(['type' => 'submit', 'content' => 'Submit']) ?>
		</p>
	<?= form_close(); ?>
</div>
