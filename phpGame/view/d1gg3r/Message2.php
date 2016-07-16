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
                    <h1>Message 7</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p><?php echo $answer_error; ?></p>
                    <p><?php echo $challenge[0]; ?></p>
                    <p>
                        49 20 66 6f 75 6e 64 20 61 6e 6f 74 68 65 72 20 68 65 6c
                        70 65 72 20 66 6f 72 20 6f 75 72 20 63 61 75 73 65 2e 20 
                        48 65 27 73 20 74 68 65 20 63 75 72 72 65 6e 74 20 6d 61 
                        6e 20 77 68 6f 20 72 75 6e 73 20 74 68 65 20 4e 6f 72 74 
                        68 77 65 73 74 20 43 6c 75 73 74 65 72 2e 20 47 65 74 74 
                        69 6e 67 20 74 6f 20 68 69 6d 20 69 73 20 67 6f 69 6e 67 
                        20 74 6f 20 62 65 20 64 69 66 66 69 63 75 6c 74 2e 20 49 
                        64 6f 6e 27 74 20 6b 6e 6f 77 20 6f 66 20 61 6e 79 20 6d 
                        61 6e 20 77 68 6f 20 68 61 73 20 74 68 65 20 70 6f 77 65 
                        72 20 74 68 61 74 20 68 65 20 64 6f 65 73 2e 20 49 74 27 
                        73 20 73 75 72 70 72 69 73 69 6e 67 20 74 68 61 74 20 68 
                        65 20 70 65 72 73 6f 6e 61 6c 6c 79 20 6f 77 6e 73 20 34 
                        20 73 74 61 74 65 73 2e 20 46 69 6e 64 20 68 69 73 20 73 
                        63 68 65 64 75 6c 65 2c 20 6f 72 20 63 6f 6e 74 61 63 74 
                        20 68 69 6d 20 64 69 72 65 63 74 6c 79 20 61 6e 64 20 74 
                        61 6c 6b 20 61 62 6f 75 74 20 6f 75 72 20 6d 69 73 73 69 
                        6f 6e 20 74 6f 20 68 69 6d 2e 20 48 65 20 69 73 20 61 20 
                        6d 61 6e 20 74 68 61 74 20 63 61 6e 20 62 65 20 72 65 61 
                        73 6f 6e 65 64 20 77 69 74 68 2e 20 54 61 6c 6b 20 74 6f 
                        20 4b 6c 69 6e 65 2e
                    </p>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleCheck.php' ?>
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