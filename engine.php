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
		die("Not all digits are entered");
}

//var_export( $massive );

/*проверка условия, что 6 введёных чисел из диапазона 1..52 */
for ($i=0; $i <= 5; $i++) { 
	if ($massive[$i]>=1 && $massive[$i]<=52) {
		
		// тут должна быть проверка, чтоб не было повторных чисел

	} else {
		echo "digits out of range";
	}
}

/* из CSV массив*/

$csv = array_map('str_getcsv', file('loto.csv'));
//var_export($csv);

/*
		тут должна быть регуляка, чтоб выбрать в строках комбинации из 6 цифр
		увеличиваем счётчик совпавших комбинаций при соблюдении условия что все 6 цифр совпало

		проверка 5 цифр // счётчик + 1

		проверка 4 цифр  //  счётчик + 1

		проверка 3 цифр  //  счётчик + 1

		проверка 2 цифр  //  счётчик + 1
*/

/*

		тут должен быть вывод результатов в таблицу
		6 x 6
		5 x 6
		4 x 6
		3 x 6
		2 x 6

*/