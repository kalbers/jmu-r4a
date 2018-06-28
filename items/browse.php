<?php
$pageTitle = __('Body Parts');
echo head(array('title' => $pageTitle, 'bodyclass' => 'items browse'));
?>

<div class="cell">
   <h1><?php echo $pageTitle;?></h1> 

<?php echo pagination_links(); ?>

</div>

<div class="cell grid-x grid-padding-x small-up-1 medium-up-3">

<?php foreach (loop('items') as $item): ?>
<div class="item cell hentry">
    <h2><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h2>
    <div class="item-meta">
    <?php if (metadata('item', 'has files')): ?>
    <div class="item-img">
        <?php echo link_to_item(item_image()); ?>
    </div>
    <?php endif; ?>

    <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet' => 250))): ?>
    <div class="item-description">
        <?php echo $description; ?>
    </div>
    <?php endif; ?>

    <?php if (metadata('item', 'has tags')): ?>
    <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
        <?php echo tag_string('items'); ?></p>
    </div>
    <?php endif; ?>

    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' => $item)); ?>

    </div><!-- end class="item-meta" -->
</div><!-- end class="item hentry" -->
<?php endforeach; ?>

</div>

<?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_items_browse', array('items' => $items, 'view' => $this)); ?>

<?php echo foot(); ?>
