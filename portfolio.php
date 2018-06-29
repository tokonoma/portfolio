<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://timothyreeder.com/kakikomi/?api');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);

?>


<!--HTML INCLUDES-->

<?php include('views/header.php'); ?>

<div id="side-nav"></div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 bg-1">
            <h3>hello world</h3>
            <p>
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                <pre><?php print_r($obj); ?></pre>
            </p>
        </div>

    </div>
</div>


<!--BOTTOM-->

<?php include('views/commonjs.php'); ?>

<?php include('views/ender.php'); ?>