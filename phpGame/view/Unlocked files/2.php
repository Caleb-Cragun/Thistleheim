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
                    <h1>Bake-Kujira</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p>
                        <image src='/phpGame/media/bakekujira.jpg'/>
                    </p>
                    <p>
                        The Bake-kujira, or the skeleton whale is a thing of
                        supposed myth. The flying, floating skeleton of a whale
                        of size and proportion that rivals even aircraft 
                        carriers. The bones are extremely strong, and those who
                        have come into contact with it and tested the bone 
                        strength have broken even diamonds on them. We think that
                        this could help us with shipping things to various parts
                        of the world. The bones could be fixed with storage 
                        containers to store supplies and get them to their
                        locations. The only problem is, it still very much 
                        behaves like a whale. We'd need a whaling expert to help
                        us capture and tame this creature so it could be of use.
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