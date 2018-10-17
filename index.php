<?php include('system/baseurl.php'); ?>

<?php

$activeLink = 'home';

?>

<!--HTML INCLUDES-->
<?php include('views/header.php'); ?>

<body class="home">

<?php include('views/nav.php'); ?>

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
			<h1>Hi, I&apos;m Tim</h1>
			<p>I am a designer and developer based out of Columbia, MD.<br>
			I’m a big fan of the moniker <span class="emphasis-span">Design Technologist.</span><br>
			Here you can learn about my work and experience.</p>
		</div>
	</div>
</main>


<!--BOTTOM-->

<?php include('views/ender.php'); ?>

<?php include('views/commonjs.php'); ?>

</body>

<?php include('views/ender.php'); ?>
