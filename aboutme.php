<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jovani Page </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>  
    <div class="flex-container">
        <div class="header">       
        <?php include 'header.php' ?>	   
        </div>   
        <div class="main img">
        
        <h>Welcome Jovani Giorgio page!</h>
        </div>
        <br>

        <div class="wrap_top"></div>
        <div class="wrap_block">
        
        <div class="about_me">
        
                <div class="main img">
                <img src="img/helmets.png" alt="php">                
                </div>

                <div class="maintext">
                When I was fifteen, sixteen,<br>
                When I really started to play guitar<br>
                I definitely wanted to become a musician<br>
                It was almost impossible because it was...<br>
                The dream was so big<br>
                That I didn't see any chance because<br>
                I was living in a little town; was studying<br>
                And when I finally broke away from school and became a musician<br>
                I thought, "Well, now I may have a little bit of a chance"<br>
                Because all I really wanted to do is music<br>
                And not only play music, but compose music<br>
                At that time, in Germany, in '69, '70, they had already discotheques<br>
                So, I would take my car, would go to a discotheque<br>
                Sing maybe thirty minutes<br>
                I think I had about seven, eight songs<br>
                I would partially sleep in the car<br>
                Because I didn't want to drive home and that helped me for about<br>
                Almost two years to survive<br>
                In the beginning, I wanted to do an album with<br>
                The sounds of the '50s, the sounds of the '60s, of the '70s<br>
                And then have a sound of the future<br>
                And I said, "Wait a second, I know the synthesizer<br>
                Why don't I use the synthesizer which is the sound of the future?"<br>
                And I didn't have any idea what to do<br>
                But I knew I needed a click, so we put a click on the 24-track<br>
                Which then was synced to the Moog Modular<br>
                I knew that could be a sound of the future<br>
                But I didn't realize how much the impact would be<br>
                My name is Giovanni Giorgio<br>
                But everybody calls me Giorgio<br>
                <br>
                Once you free your mind about a concept of<br>
                Harmony and of music being "correct"<br>
                You can do whatever you want<br>
                So, nobody told me what to do<br>
                And there was no preconception of what to do<br>
                </div>
            </div>
        <hr>
        <?php  include 'knowledge.inc.php'; ?>
        <div class="knowledge">
        <?php   echo $a, ' ', $b, ' ', $c; ?>
        <br>                                                   
        <?php
            $a = 124;
            $g = 230;
            $c = $a + $g;
            echo 'Если a = ';
            echo $a;
            echo ' И b = ';
            echo $g;
            echo '  То сумма a + b = ';
            echo $c;
        ?>
        <br>
        <?php
            $myString = "Hello! ";
            echo $myString;
            echo $f;
        ?>
        <br>
        <?php
            echo 'Name: ',$name, ', Surname: ', $surname;
        ?> <br>

        <?php
            echo $secondElement;
        ?> <br>
        
        <?php
        echo "Последний символ '$s' - '$s[-1]'.\n";
        ?>  <br>

        <?php
        echo "$people->john drank some $juices[0] juice.".PHP_EOL;
        ?>  <br>
        <?php
        echo "$people->john then said hello to $people->jane.".PHP_EOL;
        ?>  <br>
        <?php
        echo "$people->john's wife greeted $people->robert.".PHP_EOL;
        ?>



        </div>
        </div>
        <div class="wrap_bottom"></div>
        <!-- /Wrap Block Style -->
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
