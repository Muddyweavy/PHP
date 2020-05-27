<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>h3 opdracht 3</title>
    <style>

      div#kerstboom {
        text-align: center;
      }

    </style>
  </head>
  <body>

    <div id="kerstboom">

    <?php

    for ($i = 1 ; $i <= 9 ; $i++) {
      for ($j = 0 ; $j < $i ; $j++) {

        echo '*';

      }
      echo '<br>';
    }
   ?>

    </div>

  </body>
</html>
