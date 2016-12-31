<?php

require 'src/News.php';

$news = new News();
$result = $news->listSources();

$temp = json_decode( $result );

$i = 0;
while( $i < count($temp->sources) ){

	var_dump( $temp->sources[$i]->name );
	$i++;
}

//var_dump( $result );