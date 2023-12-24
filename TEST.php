<html>
    <head>
        <title>TEST</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style6.css">
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
    </head>
    <body onload="noBack();" onpageshow="if(event.persisted) noBack();" onunload="window.history.forward();">
    <?php
session_start();

// Connexion à la base de données MySQL
$bdd = new PDO('mysql:host=localhost;dbname=talkwork', 'root', '');

// Vérifier les identifiants de connexion
if(isset($_POST['password'])) {
    $password = $_POST['password'];

    $query = $bdd->prepare('SELECT nom,prenom FROM utilisateurs WHERE password = :password');
    $query->execute(array(
        'password' => $password
    ));

    $user = $query->fetch();

    if($user) {
        // Utilisateur connecté
        $_SESSION['utilisateur'] = $user['nom'];
        $_SESSION['utilisateur'] .= " ";
        $_SESSION['utilisateur'] .= $user['prenom'];
    } else {
        //echo 'Identifiants incorrects';
        header("location:test-start.php");
    }
}
?>
        <img src="OIP.jpeg" class="logo">
        <div class="user">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#0c0c0e" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg><h4><?=$_SESSION['utilisateur']?></h4>
        </div>
        <div class="start-screen">
            <button id="start-button">Start</button>
        </div>
        <div id="display-container">
            <div class="header">
                <div class="number-of-count">
                    <span class="number-of-question">
                        1 sur 10 questions
                    </span>
                </div>
                <div class="timer-div">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#0e0f11" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                    <div id="countdown"></div>
                </div>
            </div>
            <div id="container">
                <form action="TEST2.php" method="post">
                    <label for="Q1">Comment declare t-on une variable v de type entier en C ?</label><br><br>
                    <input type="radio" id="Q1" name="Q1" value="int v"><label for="int v">  int v;</label><br><br>
                    <input type="radio" id="Q1" name="Q1" value="char v"><label for="char v">  char v;</label><br><br>
                    <input type="radio" id="Q1" name="Q1" value="float v"><label for="float v">  float v;</label><br><br>
                    <input type="radio" id="Q1" name="Q1" value="entier v"><label for="entier v">  entier v;</label>
            </div>
            <input type="submit" id="submit" value="Suivant" class="next-button">
        </div>
        </form>
        <div class="score-container hide">
            <div class="user-score">Demo Score</div>
            <button class="restart">Restart</button>
        </div>
            <script>
                  var countdown = 500; // Durée du compte à rebours en secondes
                  var timer = setInterval(function() {
                  countdown--;
                  document.getElementById('countdown').innerHTML = countdown + 's';
                  if (countdown == 0) {
                  clearInterval(timer);
                  window.location.href = 'TEST2.php'; // Passer à la question suivante
               }
               }, 1000);

               window.history.forward();
               function noBack(){
                   window.history.forward;
               }
            </script>
        </script>
    </body>
</html>