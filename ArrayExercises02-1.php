<?php
echo "Test Data\n";
for ($i=0; $i < 3; $i++) {
        $line = readline("Enter Number: ");
        readline_add_history($line);
}
$input= array(5,1,1);

$count_values = array();
foreach ($input as $a) {

     @$count_values[$a]++;

}
echo 'Duplicates count: '.count($count_values);
print_r($count_values);
?>