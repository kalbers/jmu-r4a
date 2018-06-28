<?php echo head(array('bodyid'=>'home')); ?>

<div class="large-6 cell show-for-medium">
<img src="<?php echo img('SkeletonImage.jpg'); ?>" alt="Drawing of a Skeleton">
</div>

<div class="large-6 cell">
            <h2>Body Regions</h2>
            <ul>
              <li><a href="<?php echo url('items/browse?collection=9') ?>">Head &amp; Neck</a></li>
              <li><a href="<?php echo url('items/browse?collection=8') ?>">Pelvis</a></li>
              <li><a href="<?php echo url('items/browse?collection=7') ?>">Abdomen</a></li>
              <li><a href="<?php echo url('items/browse?collection=6') ?>">Thorax</a></li>
              <li><a href="<?php echo url('items/browse?collection=4') ?>">Back (vertebral column, spinal cord, meninges)</a></li>
              <li><a href="<?php echo url('items/browse?collection=3') ?>">Lower Limb</a></li>
              <li><a href="<?php echo url('items/browse?collection=2') ?>">Upper Limb</a></li>
            </ul>
          </div>

<?php echo foot(); ?>