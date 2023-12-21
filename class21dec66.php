<!--
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <tbody>
            <tr>
                <td></td>
                <td>x</td>
                <td></td>
                <td>=</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <style>
        table {
            width: 150px;
            height: 265px;
        }
    </style>
</body>

</html>
    -->

<!--code class21dec66.php-->

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1><?php echo "Hello World<br><br>";?></h1>
        <?php echo "Hello World<br><br></h1>"?>
        <?php $var_a="SE CAMP"?>
        <?php echo $var_b = 'Hello World $var_a'?>
        <br>
        <?php echo $var_c = "Hello World $var_a"?>
        <br>
        <?php 
        $var_c += $var_b = 1;
        $var_c = '1';
        echo $var_b <=> $var_c;
        echo "<br>";
        If($var_b === $var_c){ 
            //true
            echo '$var_b === $var_c';
        }elSe iF($var_b <> $var_c){ 
            //true
            echo '$var_b <> $var_c';
        }Else{
            //false
            echo 'else';
        } ?>
        <br>
        <?php echo $var_c = 2;?>
        <br>
        <?php echo $var_c?>
    </body>
