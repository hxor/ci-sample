<div id="content">
	<a href="<?= base_url('post/create') ?>">Create</a>
	<?php foreach ($content as $row): ?>
		<a href="<?= base_url('/post/show/' . $row->id) ?>">
			<h2><?= $row->title ?></h2>
		</a>
		<p><?= $row->body ?></p>
	<?php endforeach ?>
	<p>Total : <?= $total ?></p>

	<div id="pagination">
		<?= $pagination ?>
	</div>
</div>
