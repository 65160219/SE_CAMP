<!-- HOMEWORK 4 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1 -->
<html>
<head>
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <h1>ตารางสูตรคูณแม่ <?php echo $input ?></h1>
    <table>
        <div>
            <?php for($i=1 ; $i<=24 ; $i++){ ?>
                <?php $sum = $input * $i ;
                    $output = $input . " x " . $i ." = " . $sum ;
                    print $output ;
                    echo "<br/>" ; } ?>
        </div>
    </table>
    <style>
        h1 {
            font-family: 'Mitr', sans-serif;
            text-align: center;
            font-size: 32px;
            color:#212121;
            margin: auto;
            padding: 3%
        } div {
            font-family: 'Mitr', sans-serif;
            width: 160px;
            height: 225px;
            border: 1px solid black;
            overflow: scroll;
            background-color: #61ff22;
            margin: auto;
            padding: 10px
        } body{
            background-image: url(https://i.pinimg.com/564x/d4/23/a0/d423a0c9ea7b7c375191a9d57f7fffc3.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 120px;
        }
    </style>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/HW4_Output.blade.php ENDPATH**/ ?>