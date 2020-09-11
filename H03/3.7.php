<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>h3 opdracht 7</title>
    <style>

    table {
      padding-left: 450px;
      padding-top: 160px;
    }

    img {
      padding-right: 10px;
    }

    tr, td {
        border: solid 1px grey;
        border-collapse: collapse;
      }
      td {
        padding: 10px;
      }
      td.borderless {
        border: none;
      }

    </style>
  </head>
  <body>

    <?php

    $zwemclubs = [
      "de spartelkuikens" => 25,
      "de waterbuffels" => 32,
      "plonsmderin" => 11,
      "bommetje" => 23
    ];

    echo '<table>';

    foreach ($zwemclubs as $clubnaam => $aantal_leden) {
      echo '<tr>';
      echo '<td>' . $clubnaam .'</td>';
      echo '<td>' . $aantal_leden .'</td>';
      $aantal_plaatjes = floor($aantal_leden / 5);
      echo '<td class="borderless">';
      for ($i = 0 ; $i < $aantal_plaatjes ; $i++) {
        echo '<img src="zwemmer.png" alt="zwemmer" width="30" height="30">';
      }
      echo '</td>';
      echo '</tr>';

    }
      echo '</table>';
   ?>


  </body>
</html>
