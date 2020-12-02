<?php
$hasShipTime = 0;
for ($i=0; $i < 10; $i++) { 
  if (!$hasShipTime) {
    $hasShipTime = 1;
    echo $i . '-' . 111;
  }
}

header('Link: </static/css/bootstrap.min.css>; rel=preload; as=css, </static/js/jquery.min.js>; rel=preload; as=js, </static/js/bootstrap.min.js>; rel=preload; as=js');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTTP/2</title>

    <link href="static/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <h5>你好，HTTP/2</h5>

    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>