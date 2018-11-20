<?php
//3. Объяснить, как работает данный код:

$a = 5;
$b = '05';
var_dump($a == $b);  // true, т.к. $а - число, РНР пробует преобразовать $b в число и применияет
//математическую операцию
var_dump((int)'012345');     //  12345 - явное преобразование к числе, ноль отбрасывается, т.к. он
//преобразуется в пробел, при выводе лишний пробел убирается браузером
var_dump((float)123.0 === (int)123.0); // false - идет сравнение сначала по типу данных
// слева дробное, справа целочисленное
var_dump((int)0 === (int)'hello, world'); // true -  сначала явное преобразование типов к целочисленному
//значениею, т.е. сравнение типов совпадет
//справа ни одной цифры => будет пустая строка, которая при преобразовании в строку даст ноль


//4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP.
//Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке
//контента из созданных переменных.
//см. site.php


//5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо,
//чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.


var_dump('Перменная а = ' . $a = 5);
var_dump('Перменная b = ' . $b = 10);
//классика
$a += $b;
$b = $a - $b;
$a -= $b;

var_dump('Перменная а = ' . $a);
var_dump('Перменная b = ' . $b);

//Через XOR
$a = $a ^ $b;
$b = $a ^ $b;
$a = $b ^ $a;

var_dump('Перменная а = ' . $a);
var_dump('Перменная b = ' . $b);


?>