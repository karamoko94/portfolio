<!DOCTYPE html>
<?php
// Paramètres de connexion à la base de données
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio";

// Création de la connexion
$conn= new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    header("Location: Acceuil.html");
    exit();
}else{
    echo "Connected successfully";
}
?>
<html lang="fr-FR">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>Page : Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/js/bootstrap.js">
        <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <header> 
        <div>
            <span></span>
            <strong></strong>
        </div>
                                <!-- Navigation Bar -->
        <nav class="navbar-expand-lg navbar-dark  fixed-top" role="navigation">
            <div class="container justify-content-center">
                <a class="navbar-brand d-flex align-items-center" href="Acceuil.html">
                    <img src="../images/12.jpg" alt="logo" width="50" height="50" class="rounded-circle me-2" style="margin-right: 15px;">
                </a>
                <button class="navbar-toggler" type="button"
                                data-bs-toggle="collapse" data-toggle="collapse"
                                data-bs-target="#mainNavbar" aria-controls="mainNavbar"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse align-items-center justify-content-center" id="mainNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Acceuil.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#propos">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projets">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#competences">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
                                <!-- section Acceuil -->
    <div class="container-fluid bg-image">
        <div class="container profil-text">
            <h1 style="font-size: 42px; font-style: italic; font-family: 'great vibes';">Bienvenue sur mon profil !</h1>
            <h3 class="mb-4">Je suis <span style="color: #0011ff;">Développeur Web</span></h3>
            <p class="lead">Passionné par la création de sites web modernes,<br>Performants et responsives.<br>
            Découvrez mon univers, mes projets et mes compétences.</p>
            <a href="#projets" class="btn btn-warning btn-lg ">Voir mes projets</a>
            <a href="#projets" class="btn btn-warning btn-lg">Voir +</a>
        </div>
    </div>
    <div class="view">
                            <!-- About me -->
    <section id="propos" class="container-fluid about">
        <div class="text-center mb-3">
            <h2>À propos de moi</h2>
            <p class="text-center">Développeur passionné par la création de solutions numériques innovantes</p>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <img src="../images/geek.jpeg" alt="Profil" class="img-fluid image">
            </div>
            <div class="col-md-6 text-1">                
                <p>
                    Je suis un développeur web passionné avec une expertise dans la création de sites web modernes et responsives. 
                    Avec plusieurs années d'expérience dans le domaine, j'ai travaillé sur divers projets allant de petits sites vitrines à des applications web complexes.<br><br>
                    Mon objectif est de créer des expériences utilisateur exceptionnelles en combinant design attrayant et fonctionnalités performantes.
                </p>
            </div>
        </div>
    </section>
                            <!-- Mes Projets -->                        
    <div id="projets" class="container-fluid projet py-5">
        <h2>Mes Projets Future</h2>
        <p class="text-center">Des projets innovants en cours de développement.</p><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../images/eco.jpeg" class="card-img-top" alt="Projet 2" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Application E-commerce</h5>
                            <p class="card-text" style="justify-content: center;">Développement d'une plateforme e-commerce avec gestion des produits, panier et paiement sécurisé.
                                Une Fidelisation des clients. </p><br>
                            <a href="projets.html" class="btn btn-primary btn-lg">Bientôt</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../images/1.jpg" class="card-img-top" alt="Projet" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Blog Technique</h5>
                            <p class="card-text">Réalisation d'un blog pour partager des articles sur le développement web et les nouvelles technologies.</p><br>
                            <a href="projets.html" class="btn btn-primary btn-lg">Bientôt</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../images/8.jpg" class="card-img-top" alt="Projet 3" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Cyber Securité</h5>
                            <p class="card-text">la sécurité informatique devient de plus en plus essentielle dans notre monde numérique. Une plateforme sécurisée est indispensable ainsi que les Données.</p><br>
                            <a href="projets.html" class="btn btn-primary btn-lg">Bientôt</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
                        <!-- competences -->
    <div id="competences" class="container-fluid competence">
        <h2>Compétences</h2>
        <p class="text-center">Mes compétences techniques et créatives.</p> 
        <div class="container py-5">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-4 carte justify-content-center">
                    <h4 class="text-center">Developpement Web&nbsp;<i class="glyphicon glyphicon-globe"></i></h4>
                    <ul>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
                <div class="col-md-4 carte justify-content-center align-items-center">
                    <h4 class="text-center">Backend & Bases de Données&nbsp;&nbsp;<i class="glyphicon glyphicon-database"></i></h4>
                    <ul>
                        <li>Node.js</li>
                        <li>Express.js</li>
                        <li>Php</li>
                    </ul>
                </div>
                <div class="col-md-4 carte justify-content-center align-items-center">
                    <h4 class="text-center">Frameworks & Bibliothèques&nbsp;&nbsp;<i class="glyphicon glyphicon-th-large"></i></h4>
                    <ul>
                        <li>Bootstrap</li>
                        <li>React</li>
                        <li>jQuery</li>
                    </ul>
                </div>
                <div class="col-md-4 carte justify-content-center align-items-center">
                    <h4 class="text-center">Design graphic&nbsp;&nbsp;<i class="glyphicon glyphicon-picture"></i></h4>
                    <ul>
                        <li>Adobe Photoshop</li>
                        <li>Adobe Illustrator</li>
                        <li>Figma</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                            <!-- Outil de developpement -->             
   <div class="container-fluid bg-outil">
        <h2>Outil de developpement</h2>
        <p class="text-center" style="font-size: 20px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Des outils de développement utilisés dans le processus de création de sites web et d'applications.
        </p>
                             <!--petites carte--> 
        <div id="contact.html" class="justify-content-center align-items-center py-5 outil">       
            <div class="petit">
                <img src="../images/vs code.jpg" alt="VS Code" class="img-fluid" style="width: 50px; height: 50px;"><br>
                <h5 class="text-center">VS Code</h5>
            </div>
            <div class="petit">
                <img src="../images/github.jpg" alt="GitHub" class="img-fluid" style="width: 50px; height: 50px;"><br>
                <h5 class="text-center">GitHub</h5>
            </div>
            <div class="petit">
                <img src="../images/figma.jpg" alt="Figma" class="img-fluid" style="width: 50px; height: 50px;"><br>
                <h5 class="text-center">Figma</h5>
            </div>
            <div class="petit">
                <img src="../images/photoshop.jpg" alt="Photoshop" class="img-fluid" style="width: 50px; height: 50px;"><br>
                <h5 class="text-center">Photoshop</h5>
            </div>
            <div class="petit">
                <img src="../images/illustrator.jpg" alt="Illustrator" class="img-fluid" style="width: 50px; height: 50px;"><br>
                <h5 class="text-center">Illustrator</h5>
            </div>
            <div class="petit">
                <img src="../images/canva.jpg" alt="Canva" class="img-fluid" style="width: 50px; height: 50px;"><br>
                <h5 class="text-center">Canva</h5>
            </div>
        </div>
    </div>
                                              <!-- section Contact -->
    <div class="container-fluid bg-contenu" id="contact">
        <div class="container my-5 justify-content-center align-items-center">
            <h2 >Contact</h2>
            <p class="text-center">Vous avez un projet en tête ou souhaitez simplement discuter. N'hésitez pas à me contacter !</p>
            <div class="contenu">
                <!--info de contact -->
                <div class="box-1">
                    <h3>Parlons de votre projet</h3><br>  
                    <p style="font-family:Arial, sans-serif,'cursive';padding: 10px;">
                        Remplissez le formulaire ci-dessous ou envoyez-moi un email.
                        N'hésitez pas à nous contacter si vous recherchez un développeur, si vous avez une question ou si vous souhaitez simplement échanger.
                    </p>
                    <div class="d-flex align-items-center">
                        <div><i class="fa fa-phone"></i></div>
                        <div>
                            <div><b>Gmail : </b></div>
                            <div style="margin-top: -5px;"><sub>karamokonamory23@gmail.com</sub></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><i class="fa fa-github"></i></div>
                        <div>
                            <div><b>GitHub : </b></div>
                            <div style="margin-top: -5px;">
                                <sub>https://github.com/yourusername</sub>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><i class="fa fa-linkedin"></i></div>
                        <div>
                            <div><b>LinkedIn : </b></div>
                            <div style="margin-top: -5px;">
                                <sub>https://www.linkedin.com/in/yourprofile</sub>
                            </div>
                        </div>
                    </div>
                </div>
                <!--formulaire de contact -->
                <form action="action.php" method="post" class="needs-validation box-2" novalidate>
                    <div class="form-group">
                        <label for="name" class="form-label">Nom & Prénom :</label>
                        <input type="text" class="form-control btn-lg"  id="name" placeholder="Votre nom et prénom" name="nom" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control btn-lg" id="email" placeholder="Votre email" name="email" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message :</label>
                        <textarea class="form-control btn-lg" id="message" rows="4" placeholder="Votre message" name="message" required></textarea>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="condition" name="condition" required>
                        <label for="condition" class="form-label">J'accepte les conditions d'utilisation.</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <!--button submit -->
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;" name="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    </div>                        <!-- Footer -->                 
<footer class="text-white text-center justify-content-center align-items-center py-5">
    <p>&copy; 2026-2027 Mon Portfolio. Tous droits réservés.</p>
</footer>    
    <!-- JavaScript Files -->
    <script src="../pages/javascript.js"></script>
 </body> 
</html>