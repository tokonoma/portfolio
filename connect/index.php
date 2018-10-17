<?php include('../system/baseurl.php'); ?>

<?php

$activeLink = 'connect';

?>

<!--HTML INCLUDES-->
<?php include('../views/header.php'); ?>

<body class="connect">

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
		<div class="col-12 col-md-10 col-lg-8 col-xl-6">
			<h1>Connect</h1>
			<p>Check out the following networks to get in touch with me and learn more about my design and development work.</p>
			<div class="social-links">
				<a href="https://www.linkedin.com/in/timothyreeder/">
					<i class="fab fa-linkedin"></i>
				</a>
			</div>
			<div class="social-links">
				<a href="https://github.com/tokonoma">
					<i class="fab fa-github-square"></i>
				</a>
			</div>
			<div class="social-links">
				<a href="https://dribbble.com/tokonopapa">
					<i class="fab fa-dribbble-square"></i>
				</a>
			</div>
			</div>
		</div>
	</div>
</main>

<!--BOTTOM-->

<?php include('../views/commonjs.php'); ?>

</body>

<?php include('../views/ender.php'); ?>
