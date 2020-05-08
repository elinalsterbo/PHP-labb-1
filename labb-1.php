<!--
Skriv ett program där en användare kan välja att skicka iväg en av flera drivers för att försöka ta sig över en farlig vägsträcka. Vägsträckan består av 12 delar, och varje del är antingen en vänstersväng, en högersväng eller går rakt fram. Drivern är ett object, skapat ur en class och ska genom att skriva och läsa en .csv-fil komma ihåg sina framgångar och skriva i sina resultat.

Ditt program ska kunna skapa en väg, samt spara och läsa in den från en .csv-fil. Den väg som används följer vissa regler (och dessa kan dina drivers utnyttja):

• Vägen får inte vända tillbaka i sig själv, dvs det får exempelvis inte förekomma mer än två svängar åt samma håll innan en sväng åt andra hållet.
• Vägens sammansättning är jämnt fördelad mellan vänstersväng, högersväng och raksträcka.
• Om en driver väljer fel väg någonstans, så slutar färden där och drivern får börja från början
igen.

De drivers som ditt program använder ska ha någon form av intelligens, dvs de ska följa en eller flera enkla regler. De får alltså inte bara välja väg helt slumpmässigt. En regel kan vara så enkel som att drivern aldrig gör två högersvängar i följd.
När användaren valt en driver ska denna göra så många försök som det krävs för att ta sig över vägsträckan helskinnad. Antalet försök samt hur färden ser ut ska skrivas ut på sidan.
-->

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// include 'labb-1-class.php';
// use Road;
// use Driver;

// $road = new Road;
// $driver = new Driver;


if (isset($_POST['createRoad'])) {
  // $road = new Road($_POST['newRoad']);
  // $roads[] = $road;

  // Läser in filens innehåll och returnerar det i form av en array.
  $lines = file('labb-1.csv');
  shuffle($lines);
  
    // Loopar igenom arrayen
    foreach($lines as $line){
    echo $line . "</br>";
    }
}

?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labb1</title>
  </head>
  <body>
    <form action="labb-1.php" method="post">
      <input type="submit" name="createRoad" value="Create road">
    </form>  
  </body>
</html>