<!DOCTYPE html>
<html>

<head>
    <title>HOMEWORK 7</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <h1 style="color: aliceblue">ตารางสูตรคูณ</h1>
    <br>
    <h2>
    <input type="text" id="number" value="" style="padding: 12px 5px;">
    <button onclick="myFunction()" style="background-color: rgb(0, 94, 0); color:aliceblue; padding: 10px; font-size: 18px">submit</button>
    </h2>
    <br>
    <p id="show"></p>

    <script>
        let ready ="Ready!";
        document.getElementById("show").innerHTML = ready;
        function myFunction() {
            var x = document.getElementById("number").value;
            let text = "";
            for (let i = 1; i <= 12; i++) {
                text += x + " x " + i + " = " + x * i + "<br>";
                document.getElementById("show").innerHTML = text;
            }
        }
    </script>

</body>
<style>
    h1 {
        font-family: 'Mitr', sans-serif;
        text-align: center;
        font-size: 64px;
        color: #212121;
        margin: auto;
        padding: 10px;
    }

    h2{
        margin: auto;
        text-align: center;
    }

    p {
        font-family: 'Mitr', sans-serif;
        width: 250px;
        height: 300px;
        border: 1px solid black;
        overflow: scroll;
        background-color: #ffc783;
        margin: auto;
        padding: 10px;
        text-align: center;
    }

    body {
        text-align: center;
        background-image: url(https://i.pinimg.com/564x/10/f5/2f/10f52f1bf00b5f2e4d272d9464ca7252.jpg);
        background-size: cover;
        padding: 250px;
    }

</style>

</html>
