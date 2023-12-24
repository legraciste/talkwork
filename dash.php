<html>
    <head>
        <title>dash</title>
        <meta charset="utf-8">
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica, sans-serif;
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
                width: 80%;
                margin-top: 5%;
                text-align: center;
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
        <h1>CANDIDATS</h1>
        <table>
  <tr><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Email</th></th><th>Mot de passe</th></tr>
  <?php
            include_once 'dbConnection.php';
            $req=mysqli_query($con,"SELECT * FROM utilisateurs");
            $data=$req->fetch_all(MYSQLI_ASSOC);
            foreach($data as $row){
        ?>
  <tr><td><?=$row['nom']?></td><td><?=$row['prenom']?></td><td><?=$row['tel']?></td><td><?=$row['email']?></td><td><?=$row['password']?></td></tr>
  <?php } ?>
       </table>
    </body>
</html>