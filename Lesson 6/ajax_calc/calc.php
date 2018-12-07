<?php
//require_once '..\..\DZ2.php';
//require_once '../../DZ2.php';
//почему то не хочет подключаться =(

$operand1 = (int)$_POST['operand1'];
$operand2 = (int)$_POST['operand2'];
$operaton = $_POST['operation'];


$response['result'] = mathOperation($operand1, $operand2, $operaton);
echo json_encode($response);

//функции из ДЗ2
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