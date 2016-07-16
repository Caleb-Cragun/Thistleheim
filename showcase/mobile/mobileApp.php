<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio | Mobile App</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php' ?>
    </head>
    <body>
        <div>
            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php' ?>
                </div>    
            </header>
            <nav role='navigation'>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php' ?>
                </div>
            </nav>
            <main role='main'>
                <div>
                    <canvas id="myCanvas" width="320" height="400" style="background-color: #e3dedb"></canvas>
                    <div>
                        <button type="button" id="start" onclick="start(300, 0)">Start</button>
                        <button type="button" id="up" onmousedown="upOn()" onmouseup="upOff()">Up</button>
                        <button type="button" id="left" onmousedown="leftOn()" onmouseup="leftOff()">Left</button>
                        <button type="button" id="down" onmousedown="downOn()" onmouseup="downOff()">Down</button>
                        <button type="button" id="right" onmousedown="rightOn()" onmouseup="rightOff()">Right</button>
                    </div>
                    <div id="messageArea"></div> 
                    <h1>About this project:</h1>
                    <p>
                        This game was made in conjunction with my mobile app
                        development class. The objective of the class was to
                        make an application that would run in a web page. I
                        constructed this application along with the help of
                        my teammates Hunter Oakey and Ryan Joos. We had originally 
                        started out attempting to make a top down shooter game 
                        similar to asteroids. However, we were having trouble 
                        making the bullet physics and animations work. The game 
                        slowly evolved into what you see above you.
                    </p>
                    <p>
                        The objective of the game is to get as many points as
                        you can without dying. The green sphere will give you 
                        health, but the red sphere will subtract health and give
                        you points insted. As an additional feature to add
                        complexity to the game, our teacher, Lee Barney, suggested
                        that the screen rotate to make it more challenging for 
                        the player and we were happy to oblige.
                    </p>
                    <p>
                        What you see here is a slightly updated version of the 
                        game. Hunter took the original game and adapted it to
                        4 different games that he has hosted at the following link.
                    </p>
                    <p>
                        <a href="http://www.outer-pla.net/games/">Link to Hunter's website</a> 
                    </p>
                    <p>                    
                        <a href="https://github.com/Cragun-Caleb/Mobile-App-Development-Group/tree/master/public_html">Link to GitHub Repository</a>
                    </p>
                </div>
                <script src="/showcase/mobile/bouncingBallGame.js"></script>
            </main>
            <footer role='contentinfo'>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php' ?>
                    <?php echo 'Last updated: ' . date('j M Y', getlastmod()) ?>
                </div>
            </footer>
        </div>
    </body>
</html>