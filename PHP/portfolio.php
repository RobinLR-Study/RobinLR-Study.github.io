<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../Assets/Frameworks/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        // Affichage des erreurs PHP
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        // Connexion à la BDD
        //connexion à la BDD via PDO
        $host = 'localhost';
        $db   = 'portfolio';
        $user = 'root';
        $pass = ''; 
        $charset = 'utf8'; 
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$tabindex = -1;
function tabadd($tabindex) {
    $tabindex++;
    return $tabindex;
}
    ?>
    <!-- Barre de navigation -->
  <nav class="navbar shadow navbar-expand-sm bg-light fixed-top">
    <div class="container-fluid">
      <a id="font" class="navbar-brand me-5" href="#banner">Robin Loviny</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#intro" tabindex="<?php echo tabadd($tabindex); ?>">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projets" tabindex="<?php echo tabadd($tabindex); ?>">Projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact" tabindex="<?php echo tabadd($tabindex); ?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
  <!--Bannière de la page-->
</nav> 
<img id="banner" src="../Assets/IMG//Pictures/banniere-portfolio-MMI2.svg">
<!-- Contenu de la page -->
 <!--Carte d'introduction-->
<div class="container">
  <div class="row">
    <h1 id="intro" class="col-lg-12 my-5 text-center" tabindex="<?php echo tabadd($tabindex); ?>">Introduction</h1>
  </div>
  <div class="row shadow rounded row col-lg-12 my-3 border p-5 bg-light">
    <img id="profile" class="rounded shadow-lg object-fit-cover mx-auto col-lg-6 col-md-12 col-sm-12" tabindex="<?php echo tabadd($tabindex); ?>" alt="Robin Loviny" src="../Assets/IMG/Pictures/IMG_8543-cropped.jpg">
    <p id="profile-text" class="h2 mx-auto col-lg-6 col-md-12" tabindex="<?php echo tabadd($tabindex); ?>">Titulaire d’un BAC STI2D ainsi que d’un BTS Système Numérique, Option Informatique et Réseaux, je suis un passionné de l’informatique et d’Internet aimant en découvrir toujours plus sur ces sujets.</p>
  </div>
  <!-- Listes des compétences -->
  <div class="row">
    <h1 class="col-lg-12 text-center" tabindex="<?php echo tabadd($tabindex); ?>">Compétences</h1>
    
    <div class="badge-row">
      <h2 class="text-center col-12" tabindex="<?php echo tabadd($tabindex); ?>">Languages</h2>
      <div style="border: 2px solid #f16529ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">HTML</div>
      <div style="border: 2px solid #264de4ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">CSS</div>
      <div style="border: 2px solid #f7df1eff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">JavaScript</div>
      <div style="border: 2px solid #777bb3ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">PHP</div>
      <div style="border: 2px solid #00599cff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">C</div>
      <div style="border: 2px solid #00599cff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">C++</div>
      <div style="border: 2px solid #f8981cff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">MySQL</div>
      <div style="border: 2px solid #3975a6ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow m-2 p-3 fs-5">Python</div>
    </div>
    
    <div class="badge-row row" style="margin-top: 25px;">
      <h2 class="text-center col-12" tabindex="<?php echo tabadd($tabindex); ?>">Frameworks</h3>
      <div style="border: 2px solid #8a13fcff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-4 m-2 p-3 fs-5">Bootstrap</div>
      <div style="border: 2px solid #0868abff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-4 m-2 p-3 fs-5">jQuery</div>
    </div>
    
    <div class="badge-row row" style="margin-top: 25px;">
      <h2 class="text-center col-12" tabindex="<?php echo tabadd($tabindex); ?>">Système d'exploitation</h2>
      <div style="border: 2px solid #0078d4ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-2 m-0 p-3 fs-5">Windows</div>
      <div style="border: 2px solid #1d1d1fff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-2 m-0 p-3 fs-5">MacOS</div>
      <div style="border: 2px solid #e95420ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-2 m-0 p-3 fs-5">Ubuntu</div>
      <div style="border: 2px solid #294172ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-2 m-0 p-3 fs-5">Fedora</div>
    </div>
    
    <div class="badge-row row" style="margin-top: 25px;">
      <h2 class="text-center col-12" tabindex="<?php echo tabadd($tabindex); ?>">Logiciels</h3>
      <div style="border: 2px solid rgb(14, 145, 245);" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-3 m-0 p-3 fs-5">Visual Studio Code</div>
      <div style="border: 2px solid rgb(49, 49, 171);" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-3 m-0 p-3 fs-5">Photoshop</div>
      <div style="border: 2px solid #e95420ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-3 m-0 p-3 fs-5">Illustrator</div>
      <div style="border: 2px solid rgb(137, 137, 137);" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-4 m-2 p-3 fs-5">Inkscape</div>
      <div style="border: 2px solid rgb(71, 71, 71);" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-4 m-2 p-3 fs-5">Gimp</div>
      <div style="border: 2px solid rgb(198, 0, 139);" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-4 m-0 p-3 fs-5">Premiere Pro</div>
      <div style="border: 2px solid #264de4ff;" tabindex="<?php echo tabadd($tabindex); ?>" class="badge text-dark shadow col-4 m-0 p-3 fs-5">Da Vinci Resolve</div>
    </div>
    <!-- Tableaux de parcours scolaire -->
    <h1 class="text-center m-3" tabindex="<?php echo tabadd($tabindex); ?>">Parcours Scolaire</h1>
    <div class="row col-12 shadow rounded p-3 my-5 bg-light">
      
      <table>
        <tbody>
          <?php
              $datas=$pdo -> prepare("SELECT id, nom, lieu, date FROM `portfolio_parcours` ORDER BY id ASC");
              $datas -> execute();
              $results = $datas -> fetchAll( PDO::FETCH_ASSOC);
              foreach ($results as $row):
            ?>
          <tr class="text-center bg-light" style="font-size: 16pt;">
            <td class="col-3" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['nom']; ?></td>
            <td class="col-3" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['lieu']; ?></td>
            <td class="col-3" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['date']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- Tableaux d'expériences professionnelles -->
    <h1 class="text-center m-3" tabindex="<?php echo tabadd($tabindex); ?>">Experiences professionnelles</h1>
    <div class="row col-12 shadow rounded p-3 my-5 bg-light">
      <table>
        <tbody>
          <?php
              $datas=$pdo -> prepare("SELECT id, nom, `description`, duree, lieu FROM `portfolio_experiences` ORDER BY id ASC");
              $datas -> execute();
              $results = $datas -> fetchAll( PDO::FETCH_ASSOC);
              foreach ($results as $row):
            ?>
          <tr class="text-center" style="font-size: 16pt;">
            <td class="col-3" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['nom']; ?></td>
            <td class="col-3" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['description']; ?></td>
            <td class="col-3" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['duree']; ?></td>
            <td class="col-3" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['lieu']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Liste des projets organisé par types-->
  <h1 id="projets" class="text-center my-5" tabindex="<?php echo tabadd($tabindex); ?>">Projets</h1>
  <div class="row col-12 d-flex justify-content-center">
    <?php
      $datas=$pdo -> prepare("SELECT id, nom, `type`, lien, acces, `description` FROM `portfolio_projets` WHERE `type` = 'image' ORDER BY id ASC");
      $datas -> execute();
      $results = $datas -> fetchAll( PDO::FETCH_ASSOC);
    ?>
    <h2 class="col-12 text-center" tabindex="<?php echo tabadd($tabindex); ?>">Illustration, composition</h2>
    <?php foreach ($results as $row): ?>
    <div class="card col-6 m-3 shadow" style="width: 30rem;">
      <img class="card-img-top p-1" tabindex="<?php echo tabadd($tabindex); ?>" src="<?php echo $row['lien']; ?>" style="width:100%; max-height:20rem; object-fit:contain;" alt="Aperçu du projet">
      <div class="card-body">
        <h5 class="card-title text-center" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['nom']; ?></h5>
        <p class="card-text" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['description']; ?></p>
        <a href="<?php echo $row['acces']; ?>" tabindex="<?php echo tabadd($tabindex); ?>" target="_blank" class="btn btn-primary d-block mx-auto shadow">Voir le projet</a>
      </div>
    </div>
    <?php endforeach; ?>
    <?php
      $datas=$pdo -> prepare("SELECT id, nom, `type`, lien, acces, `description` FROM `portfolio_projets` WHERE `type` = 'video' ORDER BY id ASC");
      $datas -> execute();
      $results = $datas -> fetchAll( PDO::FETCH_ASSOC);
    ?>
    <h2 class="col-12 text-center" tabindex="<?php echo tabadd($tabindex); ?>">Vidéos</h2>
    <?php foreach ($results as $row): ?>
    
    <div class="card col-6 m-3 shadow" style="width: 30rem;">
      <img class="card-img-top p-1" tabindex="<?php echo tabadd($tabindex); ?>" src="<?php echo $row['lien']; ?>" style="width:100%; max-height:20rem; object-fit:contain;" alt="Aperçu du projet">
      <div class="card-body">
        <h5 class="card-title text-center" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['nom']; ?></h5>
        <p class="card-text" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['description']; ?></p>
        <a href="<?php echo $row['acces']; ?>" tabindex="<?php echo tabadd($tabindex); ?>" target="_blank" class="btn btn-primary d-block mx-auto shadow">Voir le projet</a>
      </div>
    </div>
    <?php endforeach; ?>
    <?php
    $datas=$pdo -> prepare("SELECT id, nom, `type`, lien, acces, `description` FROM `portfolio_projets` WHERE `type` = 'web' ORDER BY id ASC");
        $datas -> execute();
        $results = $datas -> fetchAll( PDO::FETCH_ASSOC);
    ?>
    <h2 class="col-12 text-center" tabindex="<?php echo tabadd($tabindex); ?>">Développement Web</h2>
    <?php foreach ($results as $row): ?>
    <div class="card col-6 m-3 shadow" style="width: 30rem;">
      <img class="card-img-top p-1" tabindex="<?php echo tabadd($tabindex); ?>" src="<?php echo $row['lien']; ?>" style="width:100%; max-height:20rem; object-fit:contain;" alt="Aperçu du projet">
      <div class="card-body">
        <h5 class="card-title text-center" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['nom']; ?></h5>
        <p class="card-text" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['description']; ?></p>
        <a href="<?php echo $row['acces']; ?>" tabindex="<?php echo tabadd($tabindex); ?>" target="_blank" class="btn btn-primary d-block mx-auto shadow">Voir le projet</a>
      </div>
    </div>
    <?php endforeach; ?>
    <?php
    $datas=$pdo -> prepare("SELECT id, nom, `type`, lien, acces, `description` FROM `portfolio_projets` WHERE `type` = 'programme' ORDER BY id ASC");
        $datas -> execute();
        $results = $datas -> fetchAll( PDO::FETCH_ASSOC);
    ?>
    <h2 class="col-12 text-center" tabindex="<?php echo tabadd($tabindex); ?>">Programmation</h2>
    <?php foreach ($results as $row): ?>
    <div class="card col-6 m-3 shadow" style="width: 30rem;">
      <img class="card-img-top p-1" tabindex="<?php echo tabadd($tabindex); ?>" src="<?php echo $row['lien']; ?>" style="width:100%; max-height:20rem; object-fit:contain;" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['nom']; ?></h5>
        <p class="card-text" tabindex="<?php echo tabadd($tabindex); ?>"><?php echo $row['description']; ?></p>
        <a href="<?php echo $row['acces']; ?>" tabindex="<?php echo tabadd($tabindex); ?>" target="_blank" class="btn btn-primary d-block mx-auto shadow">Voir le projet</a>
      </div>
    </div>
    <?php endforeach; ?>
    </div>
  </div>
  <!-- Footer de contact -->
  <div id="contact" class="container-fluid shadow mt-5 p-3" style="background-color: #a8a8a8;">
    <div class="row d-flex justify-content-between align-items-center" style="margin-left: 10rem;">
      <div class="col-auto">
        <h4 tabindex="<?php echo tabadd($tabindex); ?>">Email: robin.loviny@mail.com</h4>
      </div>
         <div class="col-auto d-flex align-items-center justify-content-center" style="margin-right: 10rem;">
           <h4 class="mb-0 me-2">LinkedIn:</h4>
           <a href="https://www.linkedin.com/in/robin-loviny-394082317/" tabindex="<?php echo tabadd($tabindex); ?>"><img src="../Assets/IMG/InBug-Black.png" alt="LinkedIn" style="height:32px;"></a>
           <h4 class="mb-0 me-2" style="margin-left: 10px">GitHub:</h4>
           <a href="https://github.com/RobinLR-Study" tabindex="<?php echo tabadd($tabindex); ?>"><img src="../Assets/IMG/GitHub_Invertocat_Black.svg" alt="GitHub" style="height:32px;"></a>
            
      </div>
      <p>Background by <a tabindex="<?php echo tabadd($tabindex); ?>" href="https://fr.freepik.com/photos-gratuite/texture-papier-blanc-froisse-espace-conception-arriere-plan-ton-blanc_19107680.htm#fromView=search&page=1&position=1&uuid=d5b64624-212b-448b-bffa-7dfd110b44d9&query=arri%C3%A8re+plan+papier+froiss%C3%A9">Freepik</a></p>
      <p>Font by <a tabindex="<?php echo tabadd($tabindex); ?>" href="https://www.dafont.com/fr/profile.php?user=1388345&text=Robin+Loviny">KhalaqStudio</a></p>
    </div>
  </div>


    <script src="../Assets/Frameworks/jQuery-3-7-1.js"></script>
    <script src="../Assets/Frameworks/bootstrap-5.3.8-dist/js/bootstrap.min.js"></script>
</div>
</body>
</html>