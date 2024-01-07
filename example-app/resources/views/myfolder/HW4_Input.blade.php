<!-- HOMEWORK 4 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1 -->
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <h1>ตารางสูตรคูณ</h1>
    <form method="post" action="/my-result">
        <h2>{{ $Multiplication }}
        @csrf
        <input type="text" name="input" size="30px">
        <button type="submit" style="background-color: rgb(0, 255, 0)">Submit</button>
        </h2>
    </form>
</body>
<style>
    h1 {
            font-family: 'Mitr', sans-serif;
            text-align: center;
            font-size: 32px;
            color:#212121;
            margin: auto;
            padding: 10px
    } h2 {
            font-family: 'Mitr', sans-serif;
            text-align: center;
            font-size: 24px;
            color:#212121;
            margin: auto;
    } body {
        background-image: url(https://i.pinimg.com/564x/c6/f9/23/c6f92353415922c613e067332c77ee9c.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding: 250px;
    }
</style>
