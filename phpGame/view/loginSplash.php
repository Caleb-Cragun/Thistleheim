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
                    <h1>Welcome Agent</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <p>
                        Welcome <?php echo $playerName ?> to Thistleheim. Many a
                        men and women have been part of this organization. This
                        job does have it's perks, though not without it's risks.
                        In order to help you understand how we operate, we are
                        starting you out in the translation department. Due to
                        the refugee crisis that is currenlty occuring, several
                        of our agents have been dispatched on humanitarian
                        missions throughout the world to help those that they 
                        can. We currently have three active field agents that 
                        are still in service, but we are a skeleton crew as of 
                        right now. So, we will need you to translate the 
                        messages that have been sent to us from our field agents 
                        in order to help us be of assistance to this current 
                        crisis. These files include things that may be of 
                        assistance to us as we are striving to find ways to help.
                        Click the messages tab to begin translating and to help
                        us discover these new venues.
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