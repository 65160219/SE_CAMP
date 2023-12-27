<html>
<head>
    <meta charset="utf-8" />
</head>

<body>
    <h1>ตารางสูตรคูณแม่ <?php echo $input ?></h1>
    <table>
        <tbody>
            <tr>
                <div>
                <?php for($i=1 ; $i<=24 ; $i++){ ?>
                    <?php $sum = $input * $i ;
                    $output = $input . " x " . $i ." = " . $sum ;
                    print $output ;
                    echo "<br/>" ; ?>
                <?php } ?>
                </div>
            </tr>
        </tbody>
    </table>

    <style>
        div {
            width: 130px;
            height: 225px;
            border: 1px solid black;
            overflow: scroll;
            background-color: #F6C8B6;
            margin: auto;
            padding: 10px
        }
    </style>
</body>

</html>
