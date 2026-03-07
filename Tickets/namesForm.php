<!-- In class we didn't start every form with the DOCTYPE and head labels, I didn't know if we weren't meant to, so I put this here -->
<link rel="stylesheet" href="style.css">

<div class="container">
    <h1>Tickets on Demand</h1>

    <!-- When you told us to avoid repetition I wasn't sure if that also applied to inter-form contents, so this will repeat on the third form as well -->
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
            <h3>Please enter the names belonging to each ticket</h3>

            <form action="display.php" method="get">
                <?php
                     $num = $_GET['number'];
                ?>

                <!-- Although I learned about hidden input fields through the W3 schools page, I eventually used ChatGPT to get unstuck on this below line, I didn't realise I could integrate php at the end 
                 as the W3 schools page does not detail this, the rest of this document was made using my initiative, W3 schools and online tutorials -->
                <input type="hidden" name="number" value="<?php echo $num; ?>">

                <p>ticket 1: <input type="text" name="name1"></p>

                <!-- PHP seems to have similar syntax to C#, my beloved, iteration and selection statements are very similar to those in C# (and I suppose other .NET languages too :D) -->
                <?php
                    if ($num > 1) 
                    {
                        echo '<p>ticket 2: <input type="text" name="name2"></p>';
                    }

                    if ($num > 2) 
                    {
                        echo '<p>ticket 3: <input type="text" name="name3"></p>';
                    }
                ?>
    
                <p><input type="submit" value="Submit"></p>
            </form>
        </div>
    </div>
</div>