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
                    <h1>Kyorinrin</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p>
                        <image src='/phpGame/media/scroll.jpg'/>
                    </p>
                    <p>
                        The Kyorinrin, or the living scroll. In Japanese 
                        folklore this is a scroll that has existed for 100 years
                        and now has it's own sentience. These can be some of the
                        most knowledgeable of objects since it's thirst for 
                        knowledge is almost unquenchable. Some are able to 
                        remember the things that they have learned meaning that 
                        one scroll can know an entire library's worth of 
                        information along with the other things that it has 
                        learned. We're currently searching for one that could 
                        help us with the capture and taming of a Bake-kujira. 
                        However, once obtained, these scrolls are very difficult
                        to hold onto. They tend to wander off and get lost in
                        the closest bookstore or library.
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