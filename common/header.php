<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?> no-js" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts','style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('what-input'); ?>
    <?php queue_js_file('foundation-min') ?>
    <?php queue_js_file('app'); ?>
    <?php echo head_js(); ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
<?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

<header class="grid-x grid-padding-x" role="banner">
    <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

        <div class="large-6 cell">
          <a href="<?php echo url(''); ?>"><img class="logo" src="<?php echo img('r4a_logo_v2.png'); ?>" alt="Logo for Radiology for Anatomists"></a>
        </div>
    
        <div class="large-6 grid-x grid-padding-x top">
            <?php 
                $navArray = array();
                $navArray[] = array('label' => 'About', 'uri' => url('about'), 'class' => 'about nav-item');
                $navArray[] = array('label' => 'Body Regions', 'uri' => url('collections'), 'class' => 'collections nav-item');
            ?>
            <?php echo nav($navArray)->addPageClassToLi()->setUlClass('vertical large-horizontal menu cell large-5')->setUlId('right-nav'); ?>

            <div id="search-container" role="search" class="large-7 cell">
            <?php echo search_form(array('show_advanced' => false,'submit_value' => 'Search')); ?>
            </div>
        </div>

</header>
    
<div id="content" class="grid-x grid-padding-x top" role="main">


<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
