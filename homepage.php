<?php require('elements/header.php'); ?>

<section class="hero">
	<div class="container">
		<img src="<?php echo $this->getThemePath(); ?>/img/Sunmark_logo.png" alt="Sunmark Logo" class="logo" />
		<h1>
			<a href="/">
				Charity Golf Classic
			</a>
		</h1>
		<div class="infobox">
			<!-- <div class="date"><span>26</span>August</div>  -->
			<div>
				Benefiting the Sunmark Charitable <br />Community Foundation<br />
				<span>Shaker Ridge Country Club, Albany NY</span>
			</div>
			<div>
				<span>GOLFING FOR A</span> 
				GREAT CAUSE
			</div>
		</div>
		<div class="btn-row sidebar">
			<!-- <a href="/sponsorship"><button>
				<img src="<?php echo $this->getThemePath(); ?>/img/icons/sponsors.svg" alt="Sponsors" />
				Sponsorship
			</button></a>
			<a href="/registration"><button>
				<img src="<?php echo $this->getThemePath(); ?>/img/icons/registration.svg" alt="Registration" />
				Registration
			</button></a> -->
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

<section class="schedule">
	
	<div class="container">
		<div>
			<h2>Agenda</h2>
			<p><span>11:00 am</span> – Registration</p>
			<p><span>11:30 am</span> – Lunch</p>
			<p><span>12:30 pm</span> – Shotgun (Scramble) Start
			</p>
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/img/icons/cocktails.svg" alt="Cocktails" />
			<p>Tournament will be immediately followed by a cocktail reception!</p>
		</div>
		
	</div>
	
</section>

<?php require('elements/footer.php'); ?>
