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
</style>
