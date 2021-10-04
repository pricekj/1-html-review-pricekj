<?php 

$num = 2;
$foo = $num. " be";
$bar = "or not to be";

echo $foo ." ". $bar ."\n"; //sometimes breaks just print a space instead of a whole page break

echo $num * $num * $num;

// this is a comment
# this is also a comment

/* this is a 
multi-line 
comment
*/

if (true) {
    echo "TRUE \n";
} else {
    echo "FALSE \n";
}

while (true) {
    break;          //need a break or it will loop infinitely
}

$arr = [1,1,2,3,5,8]; //list of things just like in java script

$arr2 = [
    "first" => "Tom",         //syntax is different but the concept is the same
    "second" => "Bipin",
    "best" => "DS"
];

function printList($someArr) {
    echo "<ul>\n";
    foreach($someArr as $key => $val) {      //for list as value
        echo "<li>".$key." is ".$val."</li>\n";
    }
echo "</ul>\n";
}


printList($arr);
printList($arr2);

    echo json_encode(
        $arr2,
        JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR   //syntax from php.net
    );

    //camelCase php documentation
    //snake_case python documentation (dont mix the two just pick one)
    //kebab-case css documentation (only works in CSS)
    //PascalCase docuemntation (use for class names in PHP but not variables)
    //CAPS_SNAKE_CASE (common to use for constants, do not change)

