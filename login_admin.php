<html>
    <head>
        <title>login_admin</title>
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
        <meta charset="utf-8">
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: arial;
            }
            body{
                background-color: skyblue;
            }
            form{
                text-align: center;
                margin-top: 5%;
            }
            .pass{
                margin-right: 9%;
            }
            .nom{
                margin-right: 4%;
            }
            #submit{
                margin-top: 2.5%;
            }
        </style>
    </head>
    <body>
        <form action="admin.php" method="post">
            <h2>Administration</h2><br><br>
            <div class="nom">
            Nom : <input type="text" id="nom" name="nom" required><br><br>
            </div>
            <div class="pass">
            <label for="password">Mot de passe : </label><input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="connexion" id="submit">
        </form>
    </body>
</html>