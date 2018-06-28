<?php
$pageTitle = __('Body Regions');
echo head(array('title' => $pageTitle, 'bodyclass' => 'collections browse'));
?>

<div class="large-12 cell">
    <h1><?php echo $pageTitle; ?></h1>
    <?php echo pagination_links(); ?>    
</div>

<div class="cell grid-x grid-padding-x small-up-1 medium-up-3">
<?php foreach (loop('collections') as $collection): ?>

<div class="cell collection">

    <h2><?php echo link_to_items_browse(__('%s', metadata('collection', array('Dublin Core', 'Title'))), array('collection' => metadata('collection', 'id')), array('class' => 'view-items-link')); ?></h2>
    <?php if ($collectionImage = record_image('collection')): ?>
        <?php echo link_to_collection($collectionImage, array('class' => 'image')); ?>
    <?php endif; ?>

    <?php if (metadata('collection', array('Dublin Core', 'Description'))): ?>
    <div class="collection-description">
        <?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'), array('snippet' => 150))); ?>
    </div>
    <?php endif; ?>

    

    <?php fire_plugin_hook('public_collections_browse_each', array('view' => $this, 'collection' => $collection)); ?>

</div><!-- end class="collection" -->

<?php endforeach; ?>

</div>

<?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_collections_browse', array('collections' => $collections, 'view' => $this)); ?>

<?php echo foot(); ?>
