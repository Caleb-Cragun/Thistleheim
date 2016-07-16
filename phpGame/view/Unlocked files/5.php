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
                    <h1>Ungaikyo</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p>
                        <image src='/phpGame/media/mirror.jpg'/>
                    </p>
                    <p>
                        The Ungaikyo, or the living mirror. In Japanese 
                        folklore this is a mirror that has existed for 100 years
                        and now has it's own sentience. The sentience tends to
                        be a manifistation in the mirror itself, or it can 
                        manifest itself as a physical entitiy in our world.
                        Don't be fooled by it's appearance though. They are
                        powerful in either world they are in. The most noted
                        characteristic of the entity is that they can be seen on
                        whichever side they're on. So, if the entity is in our
                        world, it has no reflection. So be watchful. We don't
                        know what they are capable of, so if one is discovered, 
                        then use caution.
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