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
    $posy =  (($county - ($county % 15)) / 15) ;

    //   Number total of line  Number of line by map   Number of map
    //echo $county . " " .       $county % 15 . " " .    $posy . "\n";
    for($countx = 0; $countx < strlen($line); $countx++) {
        $posx = ($countx - ($countx % 30)) / 30;
        
        $tile = substr($line, $countx, 1);

        $mapId = ($posy * 15) + $posx;
    
        //echo  $county . " = (" .  $posx . ", " . $posy. ", " . $mapId . ") \n";

        $tiley = $county - (($county % 15) * 15);
        $tilex = $countx - (($countx % 30) * 30);

        if ($tile == 0) {
            $world[$mapId][$tiley][$tilex] = 0;
        }
 
        if ($tile == 1) {
            $world[$mapId][$tiley][$tilex] = 1;
        }
   
    }
    //echo "*************************\n";
    $county++;
}

// Display world
/*
for($y = 0; $y < 15; $y++) {
    for($x = 0; $x < 30; $x++) {
        echo $world[1][$y][$x];
    }
    echo "\n";
}*/

var_dump($world[2]);
?>
