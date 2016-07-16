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
                    <h1>Message 5</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p><?php echo $answer_error; ?></p>
                    <p><?php echo $challenge[0]; ?></p>
                    <p>
                        HPZX JNRY RSET WQBC 
                        RKOZ YOHQ CWYB PERT 
                        UXFM MFZW XAEI GQVV 
                        QQCQ UXVB TZEF JKPG 
                        RSKX EPZB KUDI BLMP 
                        NBTO WSDM VYPF QQLM 
                        RBAS IXRH PXGL ONCX 
                        FDMB QBFK PEXX BGNW 
                        VOMA YYEN PQYN FUVQ 
                        DHRA UVYW LBGP UCUH 
                        PFPI UTPC SAOL JOBR 
                        CSRA HXTH VVIU DTQV 
                        XEAM HSZA HUSJ POZC 
                        LOPZ UQBR CZHG OWLL 
                        QFUZ NVEC VJOL QDBM 
                        CBIL VKCP SNLQ AWLO 
                        SHEB SWWW XIWY DGBG 
                        ASGF ANBA LIPL AQLN 
                        FBKA SOZB NXHE EFSB 
                        KYEB BDH
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