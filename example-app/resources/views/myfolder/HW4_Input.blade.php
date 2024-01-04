<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>ตารางสูตรคูณ</h1>

    <form method="post" action="/my-route">
        <h2>{{ $Multiplication }}
        @csrf
        <input type="text" name="input">
        <button type="submit">Submit</button>
        </h2>
    </form>
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


</body>

<style>
    h1 {
            font-family: 'Itim', 'cursive';
            font-family: 'Kanit', sans-serif;
            text-align: center;
            font-size: 32px;
            color:#212121;
    }
    h2 {
            font-family: 'Itim', 'cursive';
            font-family: 'Kanit', sans-serif;
            text-align: left;
            font-size: 28px;
            color:#212121;
    }
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
