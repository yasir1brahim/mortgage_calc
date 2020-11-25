<?php 

$front_end = 'http://127.0.0.1:8080';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <title>mortgage_calculator</title>
  <link href="<?=$front_end?>/js/app.js" rel="preload" as="script"><link href="<?=$front_end?>/js/chunk-vendors.js" rel="preload" as="script"></head>
  <body>
    <noscript>
      <strong>We're sorry but mortgage_calculator doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    <!-- built files will be auto injected -->
  <script type="text/javascript" src="<?=$front_end?>/js/chunk-vendors.js"></script><script type="text/javascript" src="<?=$front_end?>/js/app.js"></script></body>
</html>