<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php


$str = "My Name is Ankit Kumar, I Am In MCA. ";
echo $str; echo "<br>";
$str2 = "Is";
echo $str;

echo "<br>"; 
echo "length: " . strlen($str);
echo "<br>";

echo "<br>";
echo "comparison: " . strcmp($str, $str2,);
echo "<br>"; 


echo "<br>";
echo "trim: " . trim($str);
echo "<br>";

$datatrimmed = trim($str);

echo "<br>";
echo "length: " . strlen($datatrimmed);
echo "<br>";

echo "<br>";
echo "StrPos: " . strpos($str, $str2, 5);
echo "<br>";

echo "<br>";
echo "StrPos: " . strrev($str);
echo "<br>";


echo "<br>";
echo "StrStr False: " . strstr($str, $str2, false);
echo "<br>";


echo "<br>";
echo "StrStr True: " . strstr($str, $str2, true);
echo "<br>";

echo "<br>";
echo "StriStr False: " . stristr($str, $str2, false);
echo "<br>";


echo "<br>";
echo "StriStr True: " . stristr($str, $str2, true);
echo "<br>";


echo "<br>";
echo "Lower: " . strtolower($str);
echo "<br>";


echo "<br>";
echo "Upper: " . strtoupper($str);
echo "<br>";


echo "<br>";
echo "Replace: " . str_replace("Ankit", "Ankit Kumar", $str);
echo "<br>";


echo "<br>";
echo "SubString: " . substr($str, 0, 5);
echo "<br>";



echo "<br>";
echo "SubString Count: " . substr_count($str, " ");
echo "<br>";


echo "<br>";
echo "<pre>";
print_r(explode(",", $str));
echo "<br>";

?>
</body>
</html>
    


