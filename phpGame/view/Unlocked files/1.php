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
                    <h1>Zavanna</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p>
                        <image src='/phpGame/media/zavanna.png'/>
                    </p>
                    <p>
                        Zavanna Inbar, an escapee from the Northwest Cluster. 
                        She's had a bit of a rough past. She immigrated to the
                        Northwest Cluster, but quickly found that the promises
                        and opportunities that were said to exist there were 
                        just air. She was able to find a path out of the 
                        Northwest Cluster and to gain her eventual freedom. 
                        She's traveled all around picking up various translation
                        and coding techniques to help keep communications 
                        private. She's also been able to make a few friends in
                        high places who she can call on for favors. She's one of
                        the better agents who work for Thistleheim.
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