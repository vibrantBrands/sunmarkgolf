<?php require('elements/header.php'); ?>

<section class="hero">
	<div class="container">
		<img src="<?php echo $this->getThemePath(); ?>/img/Sunmark_logo.png" alt="Sunmark Logo" class="logo" />
		<h1>
			<a href="/">
				<span>2020</span> Charity Golf Classic
			</a>
		</h1>
		<div class="infobox">
			<div class="date"><span>26</span>August</div>
			<div>
				Benefiting the Sunmark Charitable Community Foundation<br />
				<span>Shaker Ridge Country Club, Albany NY</span>
			</div>
			<div>
				<span>GOLFING FOR A</span> 
				GREAT CAUSE
			</div>
		</div>
	</div>
</section>

<section class="main">
	
	<div class="container photos">

		<div class="content">
			<h2>Photos</h2>

			<div class="photos">
				<?php
	              $fs = FileSet::getByName('photos');
	              $fl = new FileList();
	              $fl->filterBySet($fs);
	              $fl->sortBy('fsDisplayOrder', 'asc');
	              $files = $fl->get();
	             
	              foreach($files as $f) {
	                $imagepath = $f->getRelativePath();
	                $alt = $f->getTitle();
	                 ?>
	                 <div>
	                 	<a href="<?php echo $imagepath; ?>" data-lity data-lity-desc="<?php echo $alt; ?>">
	                 		<img src='<?php echo $imagepath; ?>' alt='<?php echo $alt; ?>' />
	                	</a>
	                <div class="enlarge">&#128269; Enlarge</div>
	            </div>
	              
	              <?php }
	            ?>
	        </div>
	    </div>
	<div class="sidebar">
		<a href="/sponsorship"><button>
				<img src="<?php echo $this->getThemePath(); ?>/img/icons/sponsors.svg" alt="Sponsors" />
				Sponsorship
			</button></a>
			<a href="/registration"><button>
				<img src="<?php echo $this->getThemePath(); ?>/img/icons/registration.svg" alt="Registration" />
				Registration
			</button></a>
			<a href="/photos"><button>
				<img src="<?php echo $this->getThemePath(); ?>/img/icons/photo.svg" alt="Photos" />
				Photos
			</button></a>
			<a href="/about"><button>
				<img src="<?php echo $this->getThemePath(); ?>/img/icons/about.svg" alt="About" />
				About
			</button></a>
		</div>
	</div>
</section>



<?php require('elements/footer.php'); ?>
