<?php

$file = fopen("a.txt","r");
$line_count =0;
$lines = "";
while(! feof($file)) {
	$line = fgets($file);
	$line = str_replace("\x","",$line);
	$line = str_replace("(","",$line);
	$line = str_replace(")","",$line);
	$line = str_replace('"',"",$line);
	$line = str_replace('\r',"",$line);
	$line = str_replace('\n',"",$line);
	$line = trim($line);
	if ($line_count != 0) {
		$lines .= $line;
	}
	$line_count++;
}

$lines = chunk_split(strtoupper($lines), 8, "|");
$lines = explode("|",$lines);

foreach ($lines as $each_line) {
	$each_line = chunk_split($each_line, 2, "|");
	$each_line = explode("|",$each_line);
	echo $each_line[3];
	echo $each_line[2];
    echo $each_line[1];
    echo $each_line[0];
	echo "\n";
	$each_line = "";
}
fclose($file);

?>
