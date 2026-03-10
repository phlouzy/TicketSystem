<link rel="stylesheet" href="style.css">

<div class="container">
    <h1>Tickets on Demand</h1>
    <h2>ticket(s) receipt</h2>

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
        
        <div class = "section">
            <div class = "form">
                <h4>Names :</h4>
                <?php
                    $num = $_GET['number'];
                    $name1 = $_GET['name1'];
                    echo $name1;
                ?>

                <?php
                    if ($num > 1) 
                    {
                        $name2 = $_GET['name2'];
                        echo '<p>' . $name2 . '</p>';
                    }
                ?>

                <?php
                    if ($num > 2) 
                    {
                        $name3 = $_GET['name3'];
                        echo '<p>' . $name3 . '</p>';
                    }
                ?>

            </div>
            <div class = "form">
                <h4> Ticket Numbers :</h4>
                
                <?php
                    echo '<p>' . rand(10000000,99999999) . '</p>';
                ?>

                <?php
                    if ($num > 1)
                    {
                        echo '<p>' . rand(10000000,99999999) . '</p>'; 
                    }
                ?>

                <?php
                    if ($num > 1)
                    {
                        echo '<p>' . rand(10000000,99999999) . '</p>'; 
                    }
                ?>
                
                <h3>Total =
                    <?php
                        $total = 40 * $num;
                        echo '40 * ' . $num;
                        echo ' = ' . $total;
                    ?>
                </h3>
            </div>
        </div>
    </div>
</div>