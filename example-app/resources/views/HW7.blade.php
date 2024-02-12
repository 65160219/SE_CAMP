<!doctype html>
<html>

<head>
    <title>HOMEWORK 7</title>
</head>
<body>
    <h1>ตารางสูตรคูณ</h1>
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()">submit</button>
    <script>
        function myFunction(){
        var my_number = parseInt($('#my_number').val())
        var item = "";
        var v = document.getElementById("value");
        for( var i=1; i<=12; i++ ) {
            item = item + b+" x "+i+" = "+( b * i )+"<br/>";
        }
        v.innerHTML = item;
    }
    </script>
</body>
</html>
