<?php

/* создание массива из формы*/

$ball1 = ($_POST['ball1']); 
$ball2 = ($_POST['ball2']); 
$ball3 = ($_POST['ball3']); 
$ball4 = ($_POST['ball4']); 
$ball5 = ($_POST['ball5']); 
$ball6 = ($_POST['ball6']); 

/* проверка условия ввода всех 6 цифр*/

if ($ball1!='' && $ball2!='' && $ball3!='' && $ball4!='' && $ball5!='' && $ball6!=''){
$massive = array($ball1, $ball2, $ball3, $ball4, $ball5, $ball6);
} else {
		die("Not all numbers are entered");
}

//var_export( $massive );

/*проверка условия, что 6 введёных чисел из диапазона 1..52 */
for ($i=0; $i <= 5; $i++) { 
	if ($massive[$i]>=1 && $massive[$i]<=52) {
		
		// тут должна быть проверка, чтоб не было повторных чисел

	} else {
		echo "Numbers out of range";
	}
	
}

$csv = array_map('str_getcsv', file('loto.csv'));
var_export($csv);

//if (in_array($massive, $csv)) {
//	echo "11";
//}

//for ($i=1;$i<=300;$i++){
//$file = file("loto.csv", FILE_IGNORE_NEW_LINES);
//$file[$i] = file("test2.csv", FILE_IGNORE_NEW_LINES);

/*foreach ($file as $v)
    if (preg_match(";(.*)$/", $v, $m))
        if (array_key_exists($m[1], $result))
            $result[$m[1]] = $m[2];
*/