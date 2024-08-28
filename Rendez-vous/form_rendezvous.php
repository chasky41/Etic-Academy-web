
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>site</title>

    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS (for the user icon) -->
    <!-- Bootstrap CSS pour le Carousel -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>







    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <!--navbar -->
 <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand mr-4" href="../site/index.html">
          <img src="./img/logo.png" alt="Your Logo">
      </a>
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="../site/index.html">Accueil</a></li>
              <li class="nav-item"><a class="nav-link" href="../A propos/index.html">Etic Academy</a></li>
              <li class="nav-item"><a class="nav-link" href="../pagexx/formation.html">Prés requis</a></li>
              <li class="nav-item dropdown">
  
  
  
                  <a class="nav-link dropdown-toggle" href="#" id="etudiantDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Etudiant</a>
                  <ul class="dropdown-menu" aria-labelledby="etudiantDropdown">
                      <li><a class="dropdown-item" href="../commerce/index.html">Commerce</a></li>
                      <li><a class="dropdown-item" href="../informatique/index.html">Informatique</a></li>
                  </ul>
  

  
  
  
  
              </li>
              <li class="nav-item"><a class="nav-link" href="../le menu/menu.html">Nos Formation</a></li>
              <li class="nav-item"><a class="nav-link" href="../page-template/index.html">Diplome</a></li>
              <li class="nav-item"><a class="nav-link" href="../contact/index.html">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="../Rendez-vous/rendezvous-eleves.php">Rendez-vous</a></li>
              <li class="nav-item"><a class="nav-link" href="../index.html">Login</a></li>
          </ul>
      
          <!-- User icon on the right -->
          <ul class="navbar-nav ms-auto navbar-nav-right">
              <li class="nav-item"><a class="nav-link" href="../index.html"><i class="fas fa-user"></i></a></li>
          </ul>
      </div> 
  </nav>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <script>
        (function(){
            emailjs.init("Tpj1wThy5wxMNYaVq"); 
        })();
    </script>
    <style>
        .form-label.required::after {
            content: "*";
            color: red;
            margin-left: 5px;
        }
        .form-text {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Formulaire de Rendez-vous</h1>
        <form id="rendezvous-form" action="process_rendezvous.php" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label required">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label required">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label required">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label required">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
                <div class="form-text">Les rendez-vous doivent être pris entre juin et octobre. Les rendez-vous en dehors de cette période seront annulés.</div>
            </div>
            <div class="mb-3">
                <label for="heure" class="form-label">Heure</label>
                <select class="form-select" id="heure" name="heure" required>
                    <!-- Options de créneaux horaires -->
                    <option value="9:30">9:30 - 10:00</option>
                    <option value="10:00">10:00 - 10:30</option>
                    <option value="10:30">10:30 - 11:00</option>
                    <option value="11:00">11:00 - 11:30</option>
                    <option value="11:30">11:30 - 12:00</option>
                    <option value="13:30">13:30 - 14:00</option>
                    <option value="14:00">14:00 - 14:30</option>
                    <option value="14:30">14:30 - 15:00</option>
                    <option value="15:00">15:00 - 15:30</option>
                    <option value="15:30">15:30 - 16:00</option>
                    <option value="16:00">16:00 - 16:30</option>
                    <option value="16:30">16:30 - 17:00</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.getElementById("rendezvous-form");

            form.addEventListener("submit", function (event) {
                var dateInput = document.getElementById("date");
                var selectedDate = new Date(dateInput.value);
                var minDate = new Date("2024-06-01");
                var maxDate = new Date("2024-10-31");

                if (selectedDate < minDate || selectedDate > maxDate) {
                    alert("Les rendez-vous doivent être pris entre juin et octobre. Les rendez-vous en dehors de cette période seront annulés.");
                    event.preventDefault(); // Empêcher la soumission du formulaire
                } else {
                    event.preventDefault(); // Empêcher la soumission par défaut du formulaire

                    // Collecte des données du formulaire
                    var formData = {
                        nom: form.nom.value,
                        prenom: form.prenom.value,
                        email: form.email.value,
                        date: form.date.value,
                        heure: form.heure.value,
                    };

                    // Envoi des données via EmailJS
                    emailjs.send("service_azs016e", "template_d8h7gam", formData)
                        .then(function(response) {
                            console.log("SUCCESS!", response.status, response.text);
                            form.submit(); // Soumission du formulaire pour enregistrement en base de données
                        }, function(error) {
                            console.log("FAILED...", error);
                        });
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


 
<br>
<br>
<br>
<br>
    <!--footer-->
    <div class="container-fluid footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 order-md-1 footer-col footer-logo">
                        <img src="./img/logo.png" alt="Your Logo" class="img-fluid">
                    </div>
                    <!-- Second column with text and icons -->
                    <div class="col-md-3 order-md-2 footer-col">
                        <h4>Informations</h4>
                        <p>Etudiant</p>
                        <p>Étudiants étrangers</p>
                        <p>Dépôt de candidature</p>
                        <p>
                            <span class="icon-container"><i class="fas fa-phone phone-icon"></i></span>
                            +033 4 78 54 50 03
                        </p>
                        <p>
                            <span class="icon-container"><i class="fab fa-whatsapp whatsapp-icon"></i></span>
                            +033 7 69 71 96 01
                        </p>
                    </div>
    
                    <!-- Third column with text -->
                    <div class="col-md-3 order-md-3 footer-col">
                        <h4>Nos Formations</h4>
                        <p>Pôle Informatique</p>
                        <p>Pôle Commerciale</p>
                        <p><span class="icon-container"><i class="fas fa-envelope gmail-icon"></i></span>conseillers@etic-academy.com</p>
                    </div>
    
                    <!-- Fourth column with logos -->
                    <div class="col-md-3 order-md-4 footer-col fourth-column d-flex flex-column align-items-center">
                        <img src="./img/ppppp.png" alt="Logo 1" class="img-fluid">
                        <img src="./img/fo2.jpg" alt="Logo 1" class="img-fluid">
                        <img src="./img/fot3.jpg" alt="Logo 2" class="img-fluid">
                    </div>
    
                    <!-- First column with logo -->
                 
                </div>
            </div>
    
            <!-- Blue banner at the bottom -->
            <div class="blue-banner" style="text-align: center;">
                <a href="#" class="icon-container" style="font-size: 30px;"><i class="fas fa-comment"></i></a>
                Tous doits réservés à ETIC ACADEMY-Site web réalisé par IGLOOHUB
                <div class="social-icons" style="justify-content: flex-start; align-items: center;">
                    <span style="margin-right: 10px;">Suivez-nous :</span>
                    <!-- Social media icons on the right -->
                    <a href="#" class="icon-container"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="icon-container"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon-container"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
    
        </footer>
    </div>








 
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<script>
$('.carousel .carousel-item').each(function () {
var minPerSlide = 4;
var next = $(this).next();
if (!next.length) {
next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

for (var i = 0; i < minPerSlide; i++) { next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); } });</script>

    <!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>









