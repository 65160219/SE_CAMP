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
        <?php echo "<h1>Hello World<br><br></h1>"?>
        <?php $var_a = "SE CAMP"?>
        <?php echo $var_b = 'Hello World $var_a'?>
        <br>
        <?php echo $var_c = "Hello World $var_a"?>
        <br>
        <?php 
        $var_c = $var_b = 1;
        $var_c = '1';
        echo $var_b <=> $var_c;
        echo "<br>";
        If($var_b === $var_c){ 
            //true
            echo '$var_b === $var_c';
        }elSe 
        
        iF($var_b <> $var_c){ 
            //true
            echo '$var_b <> $var_c';
        }Else{
            //false
            echo 'else';
        } ?>
        <br>
        <?php 
        echo $var_c = 2; ?>
        <br>
        <?php 
        echo $var_c;
        echo "<br>";
        switch($var_c){
            caSE 1:
                EcHo "1";
                break;
            default:
                echo "test";
        }
        $arry = array(1,2,3);
        $arry1= [1,2,3];
        $arry2[] = 1;
        $arry2[] = 2;
        $arry2[] = 3;
    ?>  <?php print_r($arry);?>
        <pre><?php print_r($arry);?></pre>   
        <pre><?php print_r($arry1);?></pre>      
        <pre><?php print_r($arry2);?></pre> 
    <?php for($i = 0 ; $i< count($arry2); $i++){?>
    <h3><?php echo $arry2[$i]; ?></h3>
    <?php}?>

    <?php foreach($arry2 as $key => $value){?>
    <h3><?php echo $arry2[$key]; ?> : <?php echo $value; ?></h3>
    <?php}?>
</body>
</html>