<?php
header('HTTP/1.1 503 Service Unavailable');
header('Retry-After: 300'); // 5 minutes in seconds
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=2, initial-scale=1, shrink-to-fit=no">
  <title>Site is temporarily down for maintenance</title>
  <style>
    body { margin: 100px 15px; background: white; color: #333; text-align: center; }
    h1 { font: bold 47px/1.5 sans-serif; margin: .6em 0 }
    p { font: 21px/1.5 Georgia,serif; margin: 1.5em 0 }
  </style>
</head>
<body>
  <h1>We're Sorry</h1>
  <p>
    The site is temporarily down for maintenance.
    <br>
    Please try again in a few minutes.
  </p>
</body>
</html>
<?php
exit;
