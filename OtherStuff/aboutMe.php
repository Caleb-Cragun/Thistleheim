<!doctype html>
<html lang="en">
    <head>
        <title>Portfolio | About Me</title>
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
                    <h1>About Me</h1>
                    <p>
                        Greetings visitors of this website. My name is Caleb Cragun
                        and I am the creator of this site. I am currently 
                        getting ready to graduate from Brigham Young 
                        University-Idaho with a degree in Computer Information 
                        Technology. I have constructed this website as a means 
                        to showcase some of my projects and the talent that I 
                        have as a programmer.
                    </p>
                    <p>
                        The languages that I have learned from various 
                        experiences throughout my schooling are Java, JavaScript,
                        PHP, HTML, CSS, SQL and Delphi. I've also had experience
                        with the design process in respect to programming. I am
                        familiar with UML diagrams and how to create them. Other
                        topics that I've had exposure to include System Security,
                        ICS Security, Networking, Project Management, Database
                        Design and Development, Database Administration and
                        System Analysis and Design.
                    </p>
                    <p>
                        Also, if you have questions for me about my projects, 
                        skills or other things, feel free to email me. I'd love
                        to hear from you. Please email me at cpcragun@gmail.com.
                    </p>
                    <p>
                        <a href="https://www.linkedin.com/in/caleb-cragun-a301a2b4">LinkedIn Profile</a>
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