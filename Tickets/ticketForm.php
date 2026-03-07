<!-- Comments in this document are rather informal so that I know what to ask you about on tuesday :D (you said something about me using html4 instead of html5 somewhere
 but I can't remember where, so if you see it, be sure to let me know what it was!)-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets on Demand</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- From what I can tell, this is a better way to use flexbox (certaintly a visual improvement over last time!), but I'll be sure to ask on tuesday -->
<div class="container">
    <h1>Tickets on Demand</h1>

    <!-- the link tab on the left -->
    <div class="page">
        <div class = "link">
            <p>Links to other upcoming concerts!</p>
            <div><a href="https://en.wikipedia.org/wiki/Red_Hot_Chili_Peppers">Red Hot PHPeppers</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Kiss_(band)">C.i.S.S</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Pink_Floyd">PHPink Floyd</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Led_Zeppelin">$_GET Zepplin</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Sex_Pistols">The Flexbox Pistols</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Metallica">Metalliframe</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Talking_Heads">Cascading Heads</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Guns_N%27_Roses">Guns N' $_POSTs</a></div>
            <div><a href="https://en.wikipedia.org/wiki/Lynyrd_Skynyrd">LynrdSkynrd.php</a></div>
            
        </div>
        <div class = "form">
            <h3>please select number of tickets to purchase</h3>

            <!-- code snippet uses W3 school code snippet as a reference (basically all code we haven't learned in class is from W3 schools or online videos with one exception in the second form) -->
            <form action="namesForm.php" method="get">
            <select name="number" id="numbers">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <p><input type="submit" value="Submit"></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>