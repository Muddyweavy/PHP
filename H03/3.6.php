<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>h3 opdracht 6</title>
    <style>

    </style>
  </head>
  <body>


    <?php

    define("RITPRIJS", 10);
    define("SENIOR_AGE", 65);
    define("SENIOR_DISCOUNT", 50);
    define("JUNIOR_AGE", 12);
    define("JUNIOR_DISCOUNT", 50);
    define("KIDS_AGE", 3);
    define("KIDS_DISCOUNT", 100);

    $leeftijd = 2;
    $price = 10;

    if ($leeftijd > SENIOR_AGE) {
        $price = RITPRIJS * ((100 - SENIOR_DISCOUNT) / 100);
    }

    else if ($leeftijd <= KIDS_AGE) {
        $price = RITPRIJS * ((100 - KIDS_DISCOUNT) / 100);
    }

    else if ($leeftijd <= JUNIOR_AGE) {
        $price = RITPRIJS * ((100 - JUNIOR_DISCOUNT) / 100);
    }

    else {
      $price = RITPRIJS;
    }

    echo 'iemand van ' . $leeftijd . ' jaar oud betaald ' . $price . ' euro';



   ?>

  </body>
</html>
