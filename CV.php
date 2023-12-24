<html>
    <head>
        <title>dash</title>
        <meta charset="utf-8">
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
        <style>
            *{
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }
            header{
                float: left;
                height: 100%;
                width: 20%;
                background-color: skyblue;
            }
            .nav ul{
                list-style: none;
                margin-left: 10%;
                margin-top: 25%;
            }
            .nav ul li{
                padding-top: 15%;
            }
            .nav ul li a{
                text-decoration: none;
                color: white;
                font-weight: bold;
                font-size: medium;
                font-size:130%
            }
            img{
                height: 80px;
                width: 80px;
            }
            b{
                margin-left: 11%;
                color: white;
                margin-bottom: 5%;
            }
            figcaption{
                margin-left: 33%;
                margin-top: -20%;
                color: white;
                font-weight: bold;
                font-size:145%;
            }
            h1{
                text-align: center;
            }
            th{
                background-color: skyblue;
                color: white;
            }
            tr:nth-child(even){
                background-color: #ced4e5;
            }
            tr:nth-child(odd){
                background-color: #e8ebf5;
            }
            table{
                height: 30%;
                width: 10%;
                margin-top: -20%;
                text-align: center;
                margin-left:20%;
            }
        </style>
    </head>
    <header>
        <figure><img src="OIP.jpeg"><figcaption>Administrateur</figcaption></figure>
        <div class="nav">
            <ul>
                <li><a href="dash.php">Candidats</a></li>
                <li><a href="CV.php">CV</a></li>
                <li><a href="note.php">Notes</a></li>
                <li><a href="contact-ad.php">Contacts</a></li>
            </ul>
        </div>
    </header>
    <body>
        <h1>CV</h1>
        <table>
  <tr><th>photo</th><th>Nom</th><th>Sexe</th><th>Adrese</th><th>Age</th></th><th>Email</th><th>Poste</th><th>Primaire</th><th>Lycee</th><th>Universite</th><th>Diplomes</th><th>Experience</th><th>Langues</th><th>Commentaire</th></tr>
  <?php include_once 'dbConnection.php';
        $req=mysqli_query($con,"SELECT img_nom, id_img " . "FROM photo ORDER BY img_nom");
        $data=$req->fetch_all(MYSQLI_ASSOC);
        foreach($data as $col){
    ?>
  <?php
            $req=mysqli_query($con,"SELECT * FROM cv INNER JOIN utilisateurs ON cv.id_cv=utilisateurs.id");
            $data=$req->fetch_all(MYSQLI_ASSOC);
            foreach($data as $row){
        ?>
  <tr><td><?php echo "<a href=\"apercu.php?id=" . $col['id_img'] . "\">" . $col['img_nom'] . "</a><br/>"; ?></td><td><?=$row['nom_cv']?></td><td><?=$row['nom_cv']?></td><td><?=$row['sexe']?></td><td><?=$row['adresse']?></td><td><?=$row['age']?></td><td><?=$row['email_cv']?></td><td><?=$row['poste']?></td><td><?=$row['primaire']?></td><td><?=$row['lycee']?></td><td><?=$row['universite']?></td><td><?=$row['diplome']?></td><td><?=$row['xp']?></td><td><?=$row['langues']?></td><td><?=$row['exprimer']?></td></tr>
  <?php } } ?>
       </table>
    </body>
</html>