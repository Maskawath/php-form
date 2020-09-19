<?php
echo ("Hekllo World !!!");
//
$name = ["Nahid", "Hasnat", "Reduan"];
//echo "<pre>";
//print_r($name);
//echo "<pre>";


//$place = ["Rampura"=> ["Roshmalai", "Kopta", "Jelawi"],
//         "Badda" => "Asif",
//         "Mirpur"=> ["Rosogolla", "Nhari", "Jam"]
//    ];
//
//echo "Place Array";
//echo "<pre>";
//print_r($place);
//echo "<pre>";

//foreach ($name as $value){
//    echo "Name is ". $value;
//}

array_unshift($name, "Md.");
echo ("<br>");
foreach ($name as  $value){
   echo $value." ";
}
echo "printing Array from print_r function";
echo "<pre>";
print_r($name);
echo "</pre>";


