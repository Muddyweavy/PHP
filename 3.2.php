<html>
<head>
  <title>Hoofdstuk 3 opdracht 2</title>
  <style>
    img {
      display:block
    }
  </style>
</head>
<body>

<?php

  $hkImages = array(
      'hk1.png',
      'hk2.png',
      'hk3.png',
      'hk4.png',
      'hk5.png',
      'hk6.png',
      'hk7.png',
      'hk8.png',
      'hk9.png',
      'hk10.png'
  );

  foreach ($hkImages as $image) {
    echo '<img src="' . $image . '" alt="" width="100" height="100">';
  }

?>


</body>
</html>
