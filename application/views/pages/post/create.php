<div id="content">
	<?= form_open('post/create'); ?>
		<p>
			<?= form_label('Date :', 'date'); ?>
			<?= form_input('date'); ?>
		</p>
		<p>
			<?= form_label('Title :', 'title'); ?>
			<?= form_input('title'); ?>
		</p>
		<p>
			<?= form_label('Body :', 'body'); ?>
			<?= form_textarea('body'); ?>
		</p>
		<p>
			<?= form_button(['type' => 'submit', 'content' => 'Submit']) ?>
		</p>
	<?= form_close(); ?>
</div>
