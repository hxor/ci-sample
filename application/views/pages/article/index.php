<?= anchor("article/create", 'Create'); ?>

<?php foreach ($articles as $article) : ?>
<div class="article">
	<h2>
		<?= anchor("article/$article->id", $article->title); ?>
	</h2>
	<p><?= $article->body ?></p>
	<?= form_open("article/delete"); ?>
		<?= form_hidden('id', $article->id); ?>
		<?= anchor("article/edit/$article->id", 'Edit'); ?>
		<?= form_button(['type' => 'submit', 'content' => 'Delete']) ?>
	<?= form_close(); ?>
</div>
<?php endforeach ?>

<br>

<div id="pagination">
	<?= $pagination ?>
</div>

<div id="total">
	Total : <?= $total ?>
</div>
