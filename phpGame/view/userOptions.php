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
                    <h1>User options</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <p><?php echo $update_message; ?></p>
                    <br>
                    <p>
                        Please select one of the options above. This page is
                        meant for you to manipulate your user account. If you'd 
                        like to change your account name or erase your account
                        from this website , then you may choose to do so.
                    </p>
                    <br>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_splash">
                        <input type="submit" value="Delete Account">
                    </form>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="update_splash">
                        <input type="submit" value="Update Account">
                    </form>
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