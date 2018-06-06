<?php
global $action;
global $IC;
global $model;
global $itemtype;

$item_id = $action[1];
$item = $IC->getItem(array("id" => $item_id, "extend" => array("tags" => true, "mediae" => true, "comments" => true)));
?>
<div class="scene i:scene defaultEdit <?= $itemtype ?>Edit">
	<h1>Edit demo item</h1>
	<h2><?= strip_tags($item["title"]) ?></h2>

	<?= $JML->editGlobalActions($item) ?>

	<div class="item i:defaultEdit">
		<h2>Meeting item content</h2>
		<?= $model->formStart("update/".$item["id"], array("class" => "labelstyle:inject")) ?>

			<fieldset>
				<?= $model->input("published_at", array("value" => $item["published_at"])) ?>

				<?= $model->input("title", array("value" => $item["title"])) ?>
				<?= $model->input("participants", array("class" => "autoexpand short", "value" => $item["participants"])) ?>
				<?= $model->inputHTML("date", array("value" => $item["date"])) ?>
			</fieldset>

			<?= $JML->editActions($item) ?>

		<?= $model->formEnd() ?>
	</div>


	<?= $JML->editTags($item) ?>

	<?= $JML->editMedia($item) ?>

	<?= $JML->editComments($item) ?>

</div>
