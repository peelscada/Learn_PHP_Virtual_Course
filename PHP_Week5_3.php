<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>OldMan</title>
</head>

<body>

<?php

$array3= array(
    "one" => "thumb",
    "two" => "shoe",
    "three" => "knee",
    "four" => "door",
    "five" => "hive",
    "six" => "sticks",
    "seven" => "Heaven",
    "eight" => "gate",
    "nine" => "spine",
    "ten" => "pen"
);

function verse($key,$value){
    
print<<< START
This old man, he played $key, \n <br />
He played knick-knack on my $value;\n <br />
Knick-knack paddywhack,\n <br />
Give a dog a bone, \n <br />
This old man came rolling home. \n <br />
<br />
START;
}

foreach($array3 as $key => $value){
verse($key,$value);
}
?>

</body>
</html>
