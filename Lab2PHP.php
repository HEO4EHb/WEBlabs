<?php
// 1
echo "1 task\n";
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " Shit negro that all you had to say";
echo "Your order is: $very_bad_unclear_name.\n";

// 2
echo "\n2 task\n";
$a = 2;
echo $a;
echo "\n";
$b = 0.1;
echo "$b\n";
echo 13 - 1;
$last_month = 1187.23; $this_month = 1089.98;
echo "\nВ прошлом месяце я потратил на ", $last_month - $this_month, " больше\n";

//11
$num_languages = 4;
$months = 11;
$days = 16 * $months;
$days_per_language = $days / $num_languages;
echo "days_per_language = $days_per_language\n";

//#12
echo 8**2, "\n";

//13

$my_num = 228;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "answer = $answer\n";

//14

$a = 10;
$b = 3;
echo "a % b = ", $a % $b, "\n";
if( $a % $b == 0)
{
    echo "Делится:\t", $a / $b, "\n";
}
else
{
    echo "Делится с остатком:\t", $a % $b, "\n";
}
$st = pow(2, 10);
echo "2^10 = ", $st, "\n";
echo "sqrt(245) = ", sqrt(245), "\n";
$arr = Array(4,2,5,19,13,0,10);
$res = 0;
foreach ($arr as $n)
{
    $res += $n**2;
}
echo "sqrt(res) = ", sqrt($res), "\n";
echo "sqrt(379) = ", round(sqrt(379), 0), "\t",
round(sqrt(379), 1), "\t", round(sqrt(379), 2), "\n";
echo "sqrt(587) = ", ceil(sqrt(587)), "\t",
floor(sqrt(379)), "\n";
$arr = Array('floor' => floor(sqrt(379)), 'ceil' =>ceil(sqrt(587)));
echo "max = ", max(4,-2,5,19,-130,0,10), "\tmin = ", min(4,-2,5,19,-130,0,10), "\n";
echo "случайное число от 1 до 100: ", rand(1,100), "\n";
$arr = range(1,10);
for ($n=0; $n<10; $n++)
{
    $arr[$n] = rand(1,100);
    echo "arr[$n] = ", $arr[$n], "\t";
    if($n == 9)
    {
        echo "\n";
    }
}
$a = 3;
$b = 7;
echo "|a-b| = ", abs($a-$b), "\n";
$arr = Array(1,2,-1,-2,3,-3);
for($n=0; $n < sizeof($arr); $n++)
{
    if($arr[$n] < 0)
    {
        $arr[$n] *= -1;
    }
    echo "arr[$n] = ", $arr[$n], "\t";
    if($n == sizeof($arr)-1)
    {
        echo "\n";
    }
}
$val = 100;
$arr = Array(1);
echo "arr[0] = ", 1, "\t";
$iter = 0;
for($n=2; $n <= floor(sqrt($val)); $n++)
{
    if($val % $n == 0)
    {
        $arr = array_pad($arr, sizeof($arr) + 1, $n);
        $iter++;
        echo "arr[$iter] = ", $arr[$iter], "\t";
        $arr = array_pad($arr, sizeof($arr) + 1, $val / $n);
        $iter++;
        echo "arr[$iter] = ", $arr[$iter], "\t";
    }
}
$arr = array_pad($arr, sizeof($arr) + 1, 100);
echo "arr[", sizeof($arr)-1, "] = ", 100, "\n";

$arr = range(1,10);
$result = $arr[0];
for($n=1; $n < 10; $n++)
{
    $result += $arr[$n];
    if( $result > 10)
    {
        echo "Складываем ", $n+1, " элементов\n";
        break;
    }
}

//15
function printStringReturnNumber()
{
    echo "function\n";
    return 0;}
$my_num = printStringReturnNumber();
echo "my_num = ", $my_num, "\n";

//16

function increaseEnthusiasm($str)
{
    return ($str."!");
}
echo increaseEnthusiasm("what a wonderfull day"), "\n";

function repeatThreeTimes($str)
{
    return ($str.$str.$str);
}
echo repeatThreeTimes("The Holy Trinity?"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("Damn bruh")), "\n";

function cut($str, $num, $p2=10)
{
    return mb_substr($str, 0, $num);
}

function my_next($arr, $i)
{
    if($i < sizeof($arr))
    {
        echo "arr[$i] = ", $arr[$i], "\t";
        my_next($arr, $i+1);
    }
    if($i == 0)
    {
        echo "\n";
    }
    return 0;
}
$arr = range(1,10);
my_next($arr, 0);

function my_add($val)
{

    if($val > 9)
    {
        $result = 0;
        $tmp = $val;

        while($tmp > 0)
        {
            $result += $tmp % 10;
            $tmp = (int)($tmp / 10);
        }
        if($result > 9) {
            $result = my_add($result);
        }
        else
        {
            return $result;
        }
    }
    else
    {
        return $val;
    }
}
echo my_add(228), "\n";

//17

$arr = Array('','','');
for($n = 0; $n < sizeof($arr); $n++)
{
    for($i = $n+1; $i > 0; $i--)
    {
        $arr[$n] .= 'x';
    }
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

function arrayFill($val, $len)
{
    if($len > 0)
    {
        $arr = Array($val);
        echo "arr[0] = ", $arr[0], "\t";
        for($n = 1; $n < $len; $n++)
        {
            array_push($arr, $val);
            echo "arr[$n] = ", $arr[$n], "\t";
        }
        echo "\n";
        return $arr;
    }
    else
    {
        return;
    }

}

$arr = arrayFill('x', 5);
for($n = 0; $n < 5; $n++)
{
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

$arr = Array(array(1,2,3),
    array(4,5),
    array(6),
);
echo (array_sum($arr[0]) + array_sum($arr[1]) + array_sum($arr[2])), "\n";

$arr = array();
$iter = 1;
for($n = 0; $n < 3; $n++)
{
    array_push($arr, array());
    for($j = 0; $j < 3; $j++)
    {
        array_push($arr[$n], $iter);
        $iter++;
        echo "arr[$n][$j] = ", $arr[$n][$j], "\t";
    }
}
echo "\n";

$arr = array(2,5,3,9);
$result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
echo "result = ", $result, "\n";

$user = array('name'=>'Yan', 'surname' => 'Matveyev', 'patronymic' => 'Olegovich');
echo $user['name'], " ", $user['surname'], " ", $user['patronymic'], "\n";

$date = array('year' => 2023, 'month' => 02, 'day' => 26);
echo $date['year'], ".", $date['month'], ".", $date['day'], "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Size of array: ", sizeof($arr), "\n";
echo "Last: ", array_pop($arr), "\tPre-Last: ", array_pop($arr), "\n";

//18

function Func10($a, $b)
{
    return (($a + $b) > 10);
}
echo Func10(4,7) ? 'true' : 'false', "\n";

function areEqual($a, $b)
{
    return ($a == $b) ;
}
echo areEqual(4,7) ? 'true' : 'false', "\n";

$test = 0;
echo (($test == 0) ? 'верно' : ''), "\n";

$age = 19;
if($age < 10 || $age > 99)
{
    echo "Число меньше 10 или больше 99\n";
}
else
{
    echo (array_sum(str_split($age)) <= 9) ? "Сумма цифр однозначна\n" : "Сумма цифр двузначна\n";
}

$arr = range(1,3);

function checkQuantity($arr)
{
    return (sizeof($arr)==3);
}
echo (checkQuantity($arr) == 1) ? array_sum($arr) : '';
echo "\n";

//19

for($n = 1; $n <=20; $n++)
{
    for($i = $n; $i >0; $i--)
    {
        echo "x";
    }
    echo "\n";
}

//20

$mas = range(1,10);
echo "Среднее арифметическое = ", (array_sum($mas) / sizeof($mas)), "\n";
echo "Сумма от 1 до 100 = ", (1+100)*100/2, "\n";
$arr = array(1,4,9,16,25);
$arr = array_map("sqrt", $arr);
echo "Массив с корнями: ";
foreach ($arr as $elem) echo $elem, ' ';

$letters = range('a', 'z');
$values = range(1,26);
$arr = array_combine($letters, $values);
foreach($letters as $n)
{
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

$str = '1234567890';
$arr = str_split($str, 2);
$result = array_sum($arr);
echo $result, "\n";

