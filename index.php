<?php
$a="Hello";
$b="World";
echo $a."<br/>";
echo $b."<br/>";
for($i=0;$i<10;$i++){
    echo "i = ".$i."<br/>";
}
$arr["name"]="le thanh dat";
$arr["age"]="18";
$arr["tel"]="0976870115";
foreach ($arr as $key=>$value) {
    echo "<div>".$key."</div>";
    echo $value;
    echo "<br/>";
}