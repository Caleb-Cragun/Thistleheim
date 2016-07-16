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
                    <h1>Welcome</h1>
                    <p>Please login</p>
                    <div><?php echo $login_error;?></div>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="login">
                        <input type="text" name="username"><br>
                        <input type="text" name="password"><br>
                        <input type="submit" value="Login">
                    </form>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="create">
                        <input type="submit" value="Create User">
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