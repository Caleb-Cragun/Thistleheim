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
                    <h1>Message 2</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/puzzleNavigation.php' ?>
                    <p><?php echo $answer_error; ?></p>
                    <p><?php echo $challenge[0]; ?></p>
                    <p>
                        mi byly cm nby zcfym nbun sio umeyx gy ni myhx sio. eyyj nbyg muzy, jfyumy. 
                        C hyyx nbymy ni byfj gy Yrcn nby wcns uhx ni vy uvfy ni mnuln u hyq fczy. 
                        fyupy nbyg ch nby myqylm, von xih'n guey nbyg nii 
                        Yums ni zchx. C xih'n quhn nbimy qbi uly gs yhygcym 
                        Ni zchx nbyg uhx omy nbyg uauchmn gy. Cn'm bulx ni 
                        Ilxyl inbylm uliohx qbyh gs ncgy cm mi fcgcnyx. 
                        hiq um ni qbun C iqy sio. C ug nlscha ni acpy sio 
                        Qbun C iqy sio, von nbun gus vy u fcnnfy xczzcwofn ni 
                        Buhxfy lcabn hiq. Cn'm mowb u fulay ugiohn. Sio uly 
                        Ufqusm nby yrjyhmcpy wiolcyl. Biqypyl, C qcff 
                        Fyupy sio qbun C iqy sio ch nby jimn izzcwy. Wbywe 
                        y 27 zil siol jusgyhn. Nbuhem zil siol byfj.
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