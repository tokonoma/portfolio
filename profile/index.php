<?php include('../system/baseurl.php'); ?>

<?php

$activeLink = 'profile';

?>

<!--HTML INCLUDES-->
<?php include('../views/header.php'); ?>

<body class="profile">

<?php include('../views/nav.php'); ?>

<div class="container header">
	<div class="row">
		<div class="col-12">
			<a class="site-title" href="<?php echo $baseurl; ?>">timothy reeder</a>
		</div>
	</div>
</div>
<main class="container">

	<div class="row">
		<div class="col-12">
			<h1>Profile</h1>
			<p>Designer • Developer</p>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-md-10 col-lg-10 col-xl-8">

			<div class="timeline-entry">
				<div class="timeline-entry-top d-flex">
					<div class="dash-circle"></div>
					<div class="entry-date">2016 - Current</div>
				</div>
				<div class="timeline-entry-body">
					<h2>UX Design Manager</h2>
					<h3>Bloomberg BNA</h3>
					<p>
						As a Design Manager, I <span class="emphasis-span">lead a team of three UX designers</span>, ranging in experience level from Junior to Senior.
					</p>
					<p>
						I have played a central role in the creation of Fish Tank, the Bloomberg BNA <span class="emphasis-span">Design System</span>. I serve this team in a unique capacity, bridging the gap between design and engineering.
					</p>
					<p>
						I am currently Design Lead for Bloomberg Law, BNA’s flagship product.
					</p>
				</div>
			</div>

			<div class="timeline-entry">
				<div class="timeline-entry-top d-flex">
					<div class="dash-circle"></div>
					<div class="entry-date">2013 - 2016</div>
				</div>
				<div class="timeline-entry-body">
					<h2>UX Designer</h2>
					<h3>Bloomberg BNA</h3>
					<p>
						Having served as Design Lead on projects spanning the Bloomberg BNA product offering, I have provided UX support by creating wireframes, mockups, and prototypes, but most importantly, by advocating for <span class="emphasis-span">user-focused decision-making and lean, frequent user testing</span>.
					</p>
				</div>
			</div>

			<div class="timeline-entry">
				<div class="timeline-entry-top d-flex">
					<div class="dash-circle"></div>
					<div class="entry-date">2008 - 2010</div>
				</div>
				<div class="timeline-entry-body">
					<h2>MFA, Design and Technology</h2>
					<h3>Parsons School of Design, The New School</h3>
					<p>
						The core curriculum instills the critical value of iterative user testing, while building functional programming and development skills. During my time at Parsons, I applied these disciplines to build tools for language learning.
					</p>
				</div>
			</div>

			<div class="timeline-entry">
				<div class="timeline-entry-top d-flex">
					<div class="dash-circle"></div>
					<div class="entry-date">2004 - 2008</div>
				</div>
				<div class="timeline-entry-body">
					<h2>BFA, Dramatic Writing, Minor in Computer Applications</h2>
					<h3>Tisch School of the Arts, New York University</h3>
					<p>
						An education in crafting narrative structures has served me well as a UX designer. These skills have proven valuable in building intuitive UIs and architecting coherent workflows. The Computer Applications minor is offered through the Computer Science department and focuses on web technologies and development.
					</p>
				</div>
			</div>

		</div>
	</div>

</main>

<!--BOTTOM-->

<?php include('../views/commonjs.php'); ?>

</body>

<?php include('../views/ender.php'); ?>
