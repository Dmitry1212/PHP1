<?php
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт,
////который работает по следующему принципу:
////если $a и $b положительные, вывести их разность;
////если $а и $b отрицательные, вывести их произведение;
////если $а и $b разных знаков, вывести их сумму;
////Ноль можно считать положительным числом.

$a = rand(-10, 10);
$b = rand(-10, 10);

var_dump($a);
var_dump($b);


function checkAandB($a, $b)
{                                   // попробовал сделать упор на быстродействие, если нет нулей, то выполняется
    $s = $a * $b;                   // за одно действие и две проверки

    if ($s > 0) {       //если оба одного знака
        if ($a > 0) {   // оба больше нуля
            return 'оба больше нуля ' . ($a - $b);
        } else {        //оба меньше нуля
            return 'оба меньше нуля ' . $s;
        }
    } elseif ($s < 0) {  // разного знака и не нули
        return 'разного знака и не нули ' . ($a + $b);
    } else {            //если есть нули
        if (($a < 0) || ($b < 0)) {   // т.е. один из них меньше нуля, значит разного знака
            return $a + $b;
        } else {
            return $a - $b;
        }
    }
}

echo checkAandB($a, $b);
echo '<br>';

//2. Присвоить переменной $а значение в промежутке [0..15].
//С помощью оператора switch организовать вывод чисел от $a до 15.

$a = rand(0, 15);

echo "a = {$a} <br>";

switch ($a) {
    case 0:
        output($a++);
    case 1:
        output($a++);
    case 2:
        output($a++);
    case 3:
        output($a++);
    case 4:
        output($a++);
    case 5:
        output($a++);
    case 6:
        output($a++);
    case 7:
        output($a++);
    case 8:
        output($a++);
    case 9:
        output($a++);
    case 10:
        output($a++);
    case 11:
        output($a++);
    case 12:
        output($a++);
    case 13:
        output($a++);
    case 14:
        output($a++);
    default:
        output($a++);
};

function output($a)
{
    echo "{$a} <br>";
}

//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
//Обязательно использовать оператор return.

echo "a = {$a} <br>";
echo "b = {$b} <br>";

function sum($a, $b)
{
    return $a + $b;
}

function diff($a, $b)
{
    return $a - $b;
}

function compoz($a, $b)
{
    return $a * $b;
}

function divis($a, $b)
{
    if ($b == 0) {
        return "Нельзя делить на ноль!";
    } else
        return $a / $b;
}

echo "сумма равна " . sum($a, $b) . ' <br>';
echo "разность равна " . diff($a, $b) . ' <br>';
echo "произведение равно " . compoz($a, $b) . ' <br>';
echo "деление равно " . divis($a, $b) . ' <br>';

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
//где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
//В зависимости от переданного значения операции выполнить одну из арифметических операций
//(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'sum':
            return sum($arg1, $arg2);
        case 'diff':
            return diff($arg1, $arg2);
        case 'compoz':
            return compoz($arg1, $arg2);
        case 'divis':
            return divis($arg1, $arg2);
        default:
            return 'Команда не найдена';
    }
}

echo '<br> Проверка работы функции <br>';
echo "сумма равна " . mathOperation($a, $b, 'sum') . ' <br>';
echo "разность равна " . mathOperation($a, $b, 'diff') . ' <br>';
echo "произведение равно " . mathOperation($a, $b, 'compoz') . ' <br>';
echo "деление равно " . mathOperation($a, $b, 'divis') . ' <br>';
echo "направильная команда " . mathOperation($a, $b, 'fdfdfdf') . ' <br>';

//5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон,
//вывести текущий год в подвале при помощи встроенных функций PHP.
//см. DZ1_4.php


//6. *С помощью рекурсии организовать функцию возведения числа в степень.
//Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    } else {
        return $val * power($val, $pow - 1);
    }
}

echo '2^3 = ' . power(2, 3) . '<br>';
echo '1^3 = ' .  power(1, 3) . '<br>';
echo '4^0 = ' .  power(4, 0) . '<br>';
echo '5^2 = ' .  power(5, 2) . '<br>';

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

$hourEnds = ['ов','','а'];      //окончания для часов
$minutesEnds = ['','а','ы'];    //окончания для минут
$secondsEnds = ['','а','ы'];    //окончания для секунд

function getEnd($val, $ends){
    if ((intval( $val/10)) == 1) {
        return $ends[0];
    } else {
        switch ($val%10){
            case (1): {
                return $ends[1];
                break;
                }
            case (2):
            case (3):
            case (4):
            {
                return $ends[2];
                break;
            }
            default: return $ends[0];
        }
        }
}

$h = date('G');
$m = date('i');
$s = date('s');
echo "<br> Московское время:  {$h} час" . getEnd($h,$hourEnds) . " : {$m} минут" . getEnd($m,$minutesEnds) .
        " : {$s} секунд" .  getEnd($s,$secondsEnds);






