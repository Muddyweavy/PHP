<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>h3 opdracht 5</title>
    <style>

      body {
        text-align: center;
      }

      img {
        width: 225px;
      }

      img.green-border {
        border: solid 2px green;
      }

      img.red-border {
        border: solid 2px red;
      }

    </style>
  </head>
  <body>


    <?php

      for ($i = 1 ; $i <= 10 ; $i++) {
        if ($i % 2 == 0) {
        echo '<img class="red-border" src="hk' . $i . '.png" alt="hollow knight ' . $i . '">';
        } else {
        echo '<img class="green-border" src="hk' . $i . '.png" alt="hollow knight ' . $i . '">';
      }
  }

   ?>

  </body>
</html>
