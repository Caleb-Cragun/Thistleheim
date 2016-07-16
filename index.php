<!doctype html>
<html lang="en">
    <head>
        <title>Portfolio | Home</title>
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
                    <h1>Welcome</h1>
                    <p>
                        Welcome to my online portfolio. I am using this site as 
                        a means to showcase some of the projects that I have 
                        worked on during my time in the information technology 
                        departement at Brigham Young University Idaho. Please 
                        feel free to explore the various projects that I have 
                        worked on.
                    </p> 
                    <p>
                        The projects that you see here were made in conjunction
                        with the front end web development class, the back end
                        web development class and the mobile application classes
                        that I took for school. I have included a description of
                        the projects and links to their respective git hub repos
                        on each page.
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
