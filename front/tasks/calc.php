<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/stylecalc.css" rel="stylesheet" type="text/css"/> 
    <title>Калькулятор</title>
</head>
<body>
    <div class="container">
        <div class="item input"><form name="form"><input type="text" name="textview" readonly></form></div>
        <div class="item clean" onclick="clean()">C</div>
        <div class="item back" onclick="back()">&larr;</div>
        <div class="item" onclick="insert('+')">+</div>
        <div class="item" onclick="insert('-')">-</div>
        <div class="item" onclick="insert('*')">&times;</div>
        <div class="item" onclick="insert('/')">&divide;</div>
        <div class="item" onclick="insert('7')">7</div>
        <div class="item" onclick="insert('8')">8</div>
        <div class="item" onclick="insert('9')">9</div>
        <div class="item" onclick="insert('(')">(</div>
        <div class="item" onclick="insert('4')">4</div>
        <div class="item" onclick="insert('5')">5</div>
        <div class="item" onclick="insert('6')">6</div>
        <div class="item" onclick="insert(')')">)</div>
        <div class="item" onclick="insert('1')">1</div>
        <div class="item" onclick="insert('2')">2</div>
        <div class="item" onclick="insert('3')">3</div>
        <div class="item equal" onclick="equal()">=</div>
        <div class="item zero" onclick="insert('0')">0</div>
        <div class="item" onclick="insert('.')">.</div>
    </div>
    
</body>
<script src="/scripts/calc.js"></script>
</html>