<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
        }
        .baner, .stopka{
            background-color: #8C7B75;
            color: white;
            height: 70px;
            font-size: 150%;
            text-align: center;
        }
        .lewy, .prawy{
            background-color: #BCAAA4;
            height: 400px;
            width: 35%;
        }
        .srodek{
            display: flex;
            background-color: #EFDCD5;
            height: 400px;
            width: 30%;
        }
        .blok1{
            display: flex;
            justify-content: center;
        }
        .blok2{
            justify-content: center;
            border: 1px solid black;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="baner"><h1>Dzisiejsze promocje naszego sklepu</h1></div>
    <div class="container">
    <div class="lewy">
        <h2>Taniej o 30%</h2>
        <ol type="a">
            <li>Gumka do mazania</li>
            <li>Cienkopis</li>
            <li>Pisaki 60 szt.</li>
            <li>Markery 4 szt.</li>
        </ol>
    </div>
    <div class="srodek">
        <div class="blok1">
        <form method="post">
            <h2>Sprawdź cenę</h2>
            <select value="markery" >
                <option value="gumka">Gumka do mazania</option>
                <option value="cienkopis">Cienkopis</option>
                <option value="pisaki">Pisaki 60 szt.</option>
                <option value="markery">Markery 4 szt.</option>
            </select>
            <button>SPRAWDŹ</button>
        </form>
        </div>
        <div class="blok2">
            <span>cena regularna:</span><br><br>
            <span>cena promocyjna:</span>
        </div>
    </div>
    <div class="prawy"></div>
    </div>
    
    <div class="stopka"></div>
</body>
</html>