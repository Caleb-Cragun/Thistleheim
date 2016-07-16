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
                    <h1>Update user</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpGame/modules/navigation.php' ?>
                    <p><?php echo $update_error?></p>
                    <p>Please input a new username and password.</p>
                    <br>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="update_user">
                        <input type="text" name="username"><br>
                        <input type="text" name="password"><br>
                        <br>
                        <input type="submit" value="Update user info">
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