<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
	<section class="sponsors">
	<div class="bar">
		<h2>Our Sponsors</h2>
	</div>
	<div class="container">
		<div class="logos">
			<?php
              $fs = FileSet::getByName('sponsors');
              $fl = new FileList();
              $fl->filterBySet($fs);
              $fl->sortBy('fsDisplayOrder', 'asc');
              $files = $fl->get();
             
              foreach($files as $f) {
                $imagepath = $f->getRelativePath();
                $alt = $f->getTitle();
                 ?>
                 <div>
                	<img src='<?php echo $imagepath; ?>' alt='<?php echo $alt; ?>' />
            	</div>
              
              <?php }
            ?>
		</div>
	</div>
</section>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
