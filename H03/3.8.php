<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>h3 opdracht 8</title>
    <style>

    </style>
  </head>
  <body>

    <?php

    $kappersagenda = [
      "9:15" => "mevr Pietersen",
      "9:30" => "mevr willems",
      "9:45" => "",
      "10:00" => "paul van den broek",
      "10:15" => "Karel de meeuw",
      "10:30" => ""
    ];

    print("de volgende momenten zijn nog beschikbaar:<ul>");
    foreach($kappersagenda as $tijd => $afspraak) {
      if ($afspraak == "") {
        print("<li>".$tijd."</li>") ;
      }
    }
   ?>

  </body>
</html>
