<?php

$url="http://timothyreeder.com/kakikomi/api/";

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1 );
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch); 

if (curl_errno($ch)) { 
   print curl_error($ch);
}
curl_close($ch); 

?>

<!--HTML INCLUDES-->
<?php include('views/header.php'); ?>

<div id="side-nav"></div>

<div class="menu-buffer">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 bg-1">
                <h3>hello world</h3>
                <p>
                    Lorem ipsum dolor hello amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <?php var_dump(json_decode($result, true)); ?>
            </div>
        </div>
    </div>
</div>


<!--BOTTOM-->

<?php include('views/commonjs.php'); ?>

<?php include('views/ender.php'); ?>