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
                    <h1>Message 6</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p><?php echo $answer_error; ?></p>
                    <p><?php echo $challenge[0]; ?></p>
                    <p>
                        073 032 102 111 117 110 100 032 097 032 109 097 110 032 
                        119 104 111 032 099 111 117 108 100 032 112 111 116 101 
                        110 116 105 097 108 108 121 032 104 101 108 112 032 117 
                        115 032 105 110 032 111 117 114 032 099 097 117 115 101 
                        046 032 071 111 032 116 111 032 097 032 112 108 097 099 
                        101 032 099 097 108 108 101 100 032 077 097 114 108 111 
                        119 101 039 115 032 080 117 098 032 097 110 100 032 105 
                        110 113 117 105 114 101 032 097 102 116 101 114 032 097 
                        032 109 097 110 032 098 121 032 116 104 101 032 110 097 
                        109 101 032 111 102 032 077 121 114 111 110 046 032 072 
                        101 039 115 032 097 110 032 111 108 100 032 115 097 105 
                        108 111 114 032 119 104 111 039 115 032 107 110 111 119 
                        108 101 100 103 101 097 098 108 101 032 105 110 032 116 
                        104 101 032 119 097 121 115 032 111 102 032 116 104 101 
                        032 115 101 097 044 032 097 110 100 032 115 104 111 117 
                        108 100 032 098 101 032 097 098 108 101 032 116 111 032 
                        104 101 108 112 032 117 115 032 103 101 116 032 115 117 
                        112 112 108 105 101 115 032 119 104 101 114 101 032 116 
                        104 101 121 032 110 101 101 100 032 116 111 032 103 111 
                        046
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