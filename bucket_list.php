<?php

echo("Hoe lang is jouw bucket list?".PHP_EOL);
$bucketlistentries = readline();
$j=1;
if(is_numeric($bucketlistentries)){
    for($i=0;$i<=$bucketlistentries-1;$i++){
        echo("Wat staat er op plaats ".$j."?".PHP_EOL);
        $bucketlist[$i] = readline();
        $j++;
    }
    for($x=0;$x<=$bucketlistentries-1;$x++){
        echo($bucketlist[$x].PHP_EOL);
    }
}
else{
    echo('"'.$bucketlistentries.'"'." Is geen getal.");
}