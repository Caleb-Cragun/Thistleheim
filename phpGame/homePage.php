<!doctype html>
<html lang="en">
    <head>
        <title>Portfolio | PHP App</title>
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
                    <h1>PHP App</h1>
                    <p>
                        This is a php game that I made for my backend web 
                        development class. It's made to serve as an ARG (or 
                        alternative reality game) which is based on a story idea
                        that I had laying around. So I thought that I'd give it
                        a shot at trying to create one of these. The puzzles are
                        from a variety of codes and ciphers that I have learned 
                        about through school and on my own time. So best of luck
                        to you as you try to solve the puzzles. Go and enjoy.
                    </p>
                    <p>
                        <a href="/phpGame/index.php">Go to the game</a>
                    </p>
                    <p>
                        <a href="/phpGame/presentation.php">Go to presentation</a>
                    </p>
                </div>
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
