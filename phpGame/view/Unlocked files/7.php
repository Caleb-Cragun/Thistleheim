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
                    <h1>Thaddeus Kline</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p>
                        <image src='/phpGame/media/kline.jpg'/>
                    </p>
                    <p>
                        Thaddeus Kline, owner of the Northwest Cluster. He's not
                        a man to be trifled with. He's very powerful and 
                        currently owns 4 complete states. He's got a variety of
                        companies that he runs to help keep his revenue up. 
                        The biggest of them is his shipping company, and I think
                        we could use that to our advantage. If we could cut a 
                        deal with him, we would be able to help more people.
                    </p>
                    <p>
                        Note from d1gg3r: Kline recently met with Myron Savio.
                        Savio and Kline met and then left the pub together. 
                        Kline left with an ornate sake jar that was on the shelf
                        in the pub and Savio seemed to vanish into it. I tapped
                        the phones to listen into the conversation and Kline is
                        also after the Bake-kujira. However, Kline wants Savio
                        to capture and tame the beast so Kline can fit it with
                        containers much like we were going to. Kline also said
                        that Savio would be the captain of this "living ship" 
                        and would work for him. Since Kline is attempting to
                        head up our plan anyway, I suggest we cut a deal that's
                        a partnership when negotiating with Kline.
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