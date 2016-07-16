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
                    <h1>Myron Savio</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p>
                        <image src='/phpGame/media/myron.jpg'/>
                    </p>
                    <p>
                        Myron Savio, an old whaler that spends a lot of time
                        down at Marlowe's Pub. He's very knowledgeable about 
                        whales, what they are capable of and their uses. He's
                        rumored to be an Ungaikyo since he has no reflection in
                        the mirror that resides on one part of the wall in the
                        pub. It could potentially be his mirror. His skill with
                        whales could provide useful as we hunt down and capture
                        the Bake-kujira. He could even be the tamer and driver
                        for the creature if we get to that point. He does do
                        odd jobs and strange work for people, but he's such a
                        frequent at the pub, that we don't know when he goes and 
                        does it. He is a man who does get results though.
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