<!DOCTYPE html>
<html>

<head>
    <title>HOMEWORK 7</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <h1>ตารางสูตรคูณ</h1>
    <input type="text" id="number" value="">
    <button onclick="myFunction()" style="background-color: rgb(0, 94, 0); color:aliceblue">submit</button>

    <p id="show"></p>

    <script>
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
        font-size: 32px;
        color: #212121;
        margin: auto;
        padding: 10px;
    }

    p {
        font-family: 'Mitr', sans-serif;
        width: 160px;
        height: 225px;
        border: 1px solid black;
        overflow: scroll;
        background-color: #ffc783;
        margin: auto;
        padding: 10px;
        text-align: center;
    }

    body{
        text-align: center;
    }
</style>
</html>
