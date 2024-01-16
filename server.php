<?php

$stringList = file_get_contents('./json/dischi.json');
header('Content-Type: application/json');
echo $stringList;

