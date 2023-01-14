<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">   
<meta http-equiv="Content-Type" content="text/html;">
<link rel="stylesheet" href="../Style/style.css" type="text/css"/>
<title>Тестируем PHP</title>
</head>
<body>
        <h2>Таблица истинности PHP</h2>
    <table>
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $a=0; ?></td>
                <td><?php echo $b=0; ?></td>
                <td><?php var_dump(!$a); ?></td>
                <td><?php var_dump($a || $b); ?></td>
                <td><?php var_dump($a && $b) ?></td>
                <td><?php var_dump($a xor $b) ?></td>
            </tr>
            <tr>
                <td><?php echo $a=0; ?></td>
                <td><?php echo $b2=1; ?></td>
                <td><?php var_dump(!$a); ?></td>
                <td><?php var_dump($a || $b); ?></td>
                <td><?php var_dump($a && $b) ?></td>
                <td><?php var_dump($a xor $b) ?></td>
            </tr>
            <tr>
                <td><?php echo $a=1; ?></td>
                <td><?php echo $b=0; ?></td>
                <td><?php var_dump(!$a); ?></td>
                <td><?php var_dump($a || $b); ?></td>
                <td><?php var_dump($a && $b) ?></td>
                <td><?php var_dump($a xor $b) ?></td>
            </tr>
            <tr>
                <td><?php echo $a=1; ?></td>
                <td><?php echo $b=1; ?></td>
                <td><?php var_dump(!$a); ?></td>
                <td><?php var_dump($a || $b); ?></td>
                <td><?php var_dump($a && $b) ?></td>
                <td><?php var_dump($a xor $b) ?></td>
            </tr>
        </tfoot>
    </table>

<?php
// Переменные для второй и третьей таблиц
$A1 = true;
$A2 = false;
$A3 = 1;
$A4 = 0;
$A5 = -1;
$A6 = "1";
$A7 = null;
$A8 = "php";
?>

 <!-- Вторая таблица -->
 <div class="title">
    <h2>Гибкое сравнение в PHP</h2>
    </div>
    <table>
            <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
        </tr>
            </thead>
            <tbody>
            <tr>
            <td id="style">true</td>
                <td><?php var_dump($A1 == $A1);?></td>
                <td><?php var_dump($A1 == $A2); ?></td>
                <td><?php var_dump($A1 == $A3); ?></td>
                <td><?php var_dump($A1 == $A4); ?></td>
                <td><?php var_dump($A1 == $A5); ?></td>
                <td><?php var_dump($A1 == $A6); ?></td>
                <td><?php var_dump($A1 == $A7); ?></td>
                <td><?php var_dump($A1 == $A8); ?></td>
            </tr>
            <tr>
            <td id="style">false</td>
                <td><?php var_dump($A2 == $$A1);?></td>
                <td><?php var_dump($A2 == $A2);?></td>
                <td><?php var_dump($A2 == $A3);?></td>
                <td><?php var_dump($A2 == $A4);?></td>
                <td><?php var_dump($A2 == $A5);?></td>
                <td><?php var_dump($A2 == $A6);?></td>
                <td><?php var_dump($A2 == $A7);?></td>
                <td><?php var_dump($A2 == $A8);?></td>
            </tr>
            <tr>
            <td id="style">1</td>
                <td><?php var_dump($A3 == $A1);?></td>
                <td><?php var_dump($A3 == $A2);?></td>
                <td><?php var_dump($A3 == $A3);?></td>
                <td><?php var_dump($A3 == $A4);?></td>
                <td><?php var_dump($A3 == $A5);?></td>
                <td><?php var_dump($A3 == $A6);?></td>
                <td><?php var_dump($A3 == $A7);?></td>
                <td><?php var_dump($A3 == $A8);?></td>
            </tr>
            <tr>
            <td id="style">0</td>
                <td><?php var_dump($A4 == $A1);?></td>
                <td><?php var_dump($A4 == $A2);?></td>
                <td><?php var_dump($A4 == $A3);?></td>
                <td><?php var_dump($A4 == $A4);?></td>
                <td><?php var_dump($A4 == $A5);?></td>
                <td><?php var_dump($A4 == $A6);?></td>
                <td><?php var_dump($A4 == $A7);?></td>
                <td><?php var_dump($A4 == $A8);?></td>
            </tr>
            <tr> 
            <td id="style">-1</td>
                <td><?php var_dump($A5 == $A1);?></td>
                <td><?php var_dump($A5 == $A2);?></td>
                <td><?php var_dump($A5 == $A3);?></td>
                <td><?php var_dump($A5 == $A4);?></td>
                <td><?php var_dump($A5 == $A5);?></td>
                <td><?php var_dump($A5 == $A6);?></td>
                <td><?php var_dump($A5 == $A7);?></td>
                <td><?php var_dump($A5 == $A8);?></td>
            </tr>
            <tr>
            <td id="style">"1"</td>
                <td><?php var_dump($A6 == $A1);?></td>
                <td><?php var_dump($A6 == $A2);?></td>
                <td><?php var_dump($A6 == $A3);?></td>
                <td><?php var_dump($A6 == $A4);?></td>
                <td><?php var_dump($A6 == $A5);?></td>
                <td><?php var_dump($A6 == $A6);?></td>
                <td><?php var_dump($A6 == $A7);?></td>
                <td><?php var_dump($A6 == $A8);?></td>
            </tr>
            <tr>
            <td id="style">null</td>
                <td><?php var_dump($A7 == $A1);?></td>
                <td><?php var_dump($A7 == $A2);?></td>
                <td><?php var_dump($A7 == $A3);?></td>
                <td><?php var_dump($A7 == $A4);?></td>
                <td><?php var_dump($A7 == $A5);?></td>
                <td><?php var_dump($A7 == $A6);?></td>
                <td><?php var_dump($A7 == $A7);?></td>
                <td><?php var_dump($A7 == $A8);?></td>
            </tr>
            <tr>
              <td id="style">"php"</td>
                <td><?php var_dump($A8 == $A1);?></td>
                <td><?php var_dump($A8 == $A2);?></td>
                <td><?php var_dump($A8 == $A3);?></td>
                <td><?php var_dump($A8 == $A4);?></td>
                <td><?php var_dump($A8 == $A5);?></td>
                <td><?php var_dump($A8 == $A6);?></td>
                <td><?php var_dump($A8 == $A7);?></td>
                <td><?php var_dump($A8 == $A8);?></td>
            </tr>
            </tbody>
        </table>
    </div>

     <!-- Третья таблица -->
     <div class="title">
        <h2>Жесткое сравнение в PHP</h2>
    </div>
 <table>
            <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
        </tr>
            </thead>
            <tbody>
            <tr>
            <td id="style">true</td>
                <td><?php var_dump($A1 === $A1);?></td>
                <td><?php var_dump($A1 === $A2); ?></td>
                <td><?php var_dump($A1 === $A3); ?></td>
                <td><?php var_dump($A1 === $A4); ?></td>
                <td><?php var_dump($A1 === $A5); ?></td>
                <td><?php var_dump($A1 === $A6); ?></td>
                <td><?php var_dump($A1 === $A7); ?></td>
                <td><?php var_dump($A1 === $A8); ?></td>
            </tr>
            <tr>
            <td id="style">false</td>
                <td><?php var_dump($A2 === $$A1);?></td>
                <td><?php var_dump($A2 === $A2);?></td>
                <td><?php var_dump($A2 === $A3);?></td>
                <td><?php var_dump($A2 === $A4);?></td>
                <td><?php var_dump($A2 === $A5);?></td>
                <td><?php var_dump($A2 === $A6);?></td>
                <td><?php var_dump($A2 === $A7);?></td>
                <td><?php var_dump($A2 === $A8);?></td>
            </tr>
            <tr>
            <td id="style">1</td>
                <td><?php var_dump($A3 === $A1);?></td>
                <td><?php var_dump($A3 === $A2);?></td>
                <td><?php var_dump($A3 === $A3);?></td>
                <td><?php var_dump($A3 === $A4);?></td>
                <td><?php var_dump($A3 === $A5);?></td>
                <td><?php var_dump($A3 === $A6);?></td>
                <td><?php var_dump($A3 === $A7);?></td>
                <td><?php var_dump($A3 === $A8);?></td>
            </tr>
            <tr>
            <td id="style">0</td>
                <td><?php var_dump($A4 === $A1);?></td>
                <td><?php var_dump($A4 === $A2);?></td>
                <td><?php var_dump($A4 === $A3);?></td>
                <td><?php var_dump($A4 === $A4);?></td>
                <td><?php var_dump($A4 === $A5);?></td>
                <td><?php var_dump($A4 === $A6);?></td>
                <td><?php var_dump($A4 === $A7);?></td>
                <td><?php var_dump($A4 === $A8);?></td>
            </tr>
            <tr> 
            <td id="style">-1</td>
                <td><?php var_dump($A5 === $A1);?></td>
                <td><?php var_dump($A5 === $A2);?></td>
                <td><?php var_dump($A5 === $A3);?></td>
                <td><?php var_dump($A5 === $A4);?></td>
                <td><?php var_dump($A5 === $A5);?></td>
                <td><?php var_dump($A5 === $A6);?></td>
                <td><?php var_dump($A5 === $A7);?></td>
                <td><?php var_dump($A5 === $A8);?></td>
            </tr>
            <tr>
            <td id="style">"1"</td>
                <td><?php var_dump($A6 === $A1);?></td>
                <td><?php var_dump($A6 === $A2);?></td>
                <td><?php var_dump($A6 === $A3);?></td>
                <td><?php var_dump($A6 === $A4);?></td>
                <td><?php var_dump($A6 === $A5);?></td>
                <td><?php var_dump($A6 === $A6);?></td>
                <td><?php var_dump($A6 === $A7);?></td>
                <td><?php var_dump($A6 === $A8);?></td>
            </tr>
            <tr>
            <td id="style">null</td>
                <td><?php var_dump($A7 === $A1);?></td>
                <td><?php var_dump($A7 === $A2);?></td>
                <td><?php var_dump($A7 === $A3);?></td>
                <td><?php var_dump($A7 === $A4);?></td>
                <td><?php var_dump($A7 === $A5);?></td>
                <td><?php var_dump($A7 === $A6);?></td>
                <td><?php var_dump($A7 === $A7);?></td>
                <td><?php var_dump($A7 === $A8);?></td>
            </tr>
            <tr>
              <td id="style">"php"</td>
                <td><?php var_dump($A8 === $A1);?></td>
                <td><?php var_dump($A8 === $A2);?></td>
                <td><?php var_dump($A8 === $A3);?></td>
                <td><?php var_dump($A8 === $A4);?></td>
                <td><?php var_dump($A8 === $A5);?></td>
                <td><?php var_dump($A8 === $A6);?></td>
                <td><?php var_dump($A8 === $A7);?></td>
                <td><?php var_dump($A8 === $A8);?></td>
            </tr>
            </tbody>
        </table>
    </div>

</body>
</html>