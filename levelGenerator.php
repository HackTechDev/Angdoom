<?php

// 640x480
// 21 * 30 => 630
// 32 * 15 => 480

// 21*32 = 672

$lines = file('level.txt');

$county = 0;

$mapId = 0;
$mapCounter = 0;


// World array initialization 
$world = array(
            array (
                array () 
                )
         );


// Fill the world 
foreach ($lines as $line) {
    $posy = $county - (($county % 15) * 15);


    for($countx = 0; $countx < strlen($line); $countx++) {

        $tile = substr($line, $countx, 1);
        $mapId = ($countx % 30) * ($county % 15);

        $posx = $countx - (($countx % 30) * 30);

        if ($tile == 0 ) {
            $world[$mapId][$posy][$posx] = 0;
        }
        if ($tile == 1 ) {
            $world[$mapId][$posy][$posx] = 1;
        }
   
    }
    $county++;
}


// Display the world

?>
