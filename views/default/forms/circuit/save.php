<div>
    <label><?php echo elgg_echo("title"); ?></label><br />
    <?php echo elgg_view('input/text',array('name' => 'title')); ?>
</div>

<div>
    <label><?php echo elgg_echo("body"); ?></label><br />
    <?php echo elgg_view('input/longtext',array('name' => 'body')); ?>
</div>
<div>
	<label><?php echo elgg_echo("schematic"); ?></label></br />
	<?php echo elgg_view('input/file', array('name' => 'schematic')); ?>
</div>
<div>
	<label><?php echo elgg_echo("board"); ?></label></br />
	<?php echo elgg_view('input/file', array('name' => 'board')); ?>
</div>
<div>
    <label><?php echo elgg_echo("tags"); ?></label><br />
    <?php echo elgg_view('input/tags',array('name' => 'tags')); ?>
</div>

<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('save'))); ?>
</div>