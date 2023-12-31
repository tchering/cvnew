<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="fontawesome-free-6.5.0-web/css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>

    <title>Curriculum vitae</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav-bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2 class="blue-text user-select-none ms-5">Sonam SHERPA</h2>
            </a>
            <button class="navbar-toggler w-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 fw-bold text-center">
                    <li class="nav-item">
                        <a class="nav-link" href=" #competence">Competence</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formation">Diplome/Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">


        <section id="intro">
            <div class="row intro-row text-center ">
                <div class="col-sm-12 col-md-12 col-lg-6 intro-col-left ">
                    <h2 class="">Hello, I am Sonam Sherpa,<br> a passionate junior full stack web developer.</h2>
                    <a href="cv/cv.pdf" download class="btn blue-bg white-text fw-bold">Download CV</a>
                </div>
                <div class=" col-8 col-md-8 col-lg-5 mt-5 mt-md-5 me-lg-4" id="img-box">
                    <img src="images/img.jpg" alt="photo of sonam" class="img-fluid" id="img">
                </div>
            </div>
        </section>
        <section class="" id="competence">
            <div class="row mx-5  " id="competence-row" data-aos="fade-up">
                <div class="col-sm-12 col-md-12 col-lg-4" id="competence-col-left">
                    <div class="parcour">
                        <h3 class=" text-center" id="intro-parcour">Mon Parcours</h3>
                        <p class="">Militaire avec 8 ans d’expérience a la Légion Étranger(Armée de terre), dont plus 6
                            ans
                            en tant qu’opérateur radio en SIC(Système d'information et Communication.) Ma grande
                            capacité"
                            d'adaptation me permet de m'ajuster rapidement aux nouvelles situations, et ma proactivité
                            ainsi
                            que ma fiabilité sont des atouts essentiels dans l'accomplissement de mes missions.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 my-5 my-md-5 my-lg-0" id="competence-col-center">
                    <div class="row competence g-3 ">
                        <h3 class="text-center" id="intro-competence">Competences</h3>
                        <div class="col-12 text-center">
                            <img src="images/icon-html.svg" alt="" class="img-thumbnail">
                            <img src="images/icons8-css.svg" alt="" class="img-thumbnail">
                            <img src="images/icons8-bootstrap.svg" alt="" class="img-thumbnail">
                            <img src="images/git.svg" alt="" class="img-thumbnail">
                        </div>
                        <div class="col_12 text-center">
                            <img src="images/icons8-javascript.svg" alt="" class="img-thumbnail">
                            <img src="images/php.svg" alt="" class="img-thumbnail">
                            <img src="images/react.svg" alt="" class="img-thumbnail">
                            <img src="images/mysql.svg" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4" id="competence-col-right">
                    <h3 class="text-center" id="intro-personalite">Personalité</h3>
                    <p>
                        Capable de travailler en équipe tout en étant autonome, je suis dynamique, rigoureux et
                        profondément
                        motivé pour continuer à apprendre, des qualités essentielles dans le domaine du développement
                        web.

                        Ma grande compétence réside dans ma capacité à résoudre efficacement les problèmes. Tout au long
                        de
                        ma carrière, j'ai relevé de nombreux défis et réussi à trouver des solutions adaptées autant que
                        possible.
                    </p>
                </div>
            </div>
        </section>
        <section class="" id="experience">
            <div class="row mx-5 d-flex justify-content-between" data-aos="fade-up">
                <div class="col-12 col-md-12 col-lg-4" id="experience-title">
                    <h3 class="text-center">Expérience</h3>
                </div>
                <div class="col">
                    <div class="graphic">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4" id="experience-list">
                    <div class="experience-list">
                        <h6 class=" border-bottom blue-text">Chef d'equipe</h6>
                        <h4 class="lead border-bottom">D'août 2022 à octobre 2023 Légion Étranger Castelnaudary
                        </h4>
                        <p>
                        <ul>
                            <p>
                                <li>Management d'une trentaine de jeunes légionnaires, distribution des
                                    tâches et définition des objectifs de travail</li>
                            </p>
                            <p>
                                <li>Encadrement de séances de sport collectifs.</li>
                            </p>
                        </ul>
                        </p>
                    </div>
                    <div class="experience-list mt-5  ">
                        <h6 class=" border-bottom blue-text">Opérateur Radio + Radio Graphiste(Morse code)
                        </h6>
                        <h4 class="lead  border-bottom">De mai 2017 à août 2022 Légion Étrangère St Christol
                        </h4>
                        <p>
                        <ul>
                            <p>
                                <li>Mission Sentinelle sur site sensible comme chef d’équipe et
                                    conducteur véhicule(Valence).</li>
                            </p>
                            <p>
                                <li>Mission courte durée en Guyane comme fonction radio opérateur.</li>
                            </p>
                            <p>
                                <li>Opération extérieure de 5 mois en République Centre Afrique
                                    comme radio opérateur.</li>
                            </p>
                        </ul>
                        </p>
                    </div>
                    <div class="experience-list mt-5 ">
                        <h6 class=" border-bottom blue-text">Sapeur Combat Génie</h6>
                        <h4 class="lead  border-bottom">De septembre 2015 à avril 2017 Légion Étrangère St Christol
                        </h4>
                        <p>
                        <ul>
                            <p>
                                <li>Mission Sentinelle sur site sensible comme chef d’équipe (Paris).
                                </li>
                            </p>
                            <p>
                                <li>Mission Sentinelle sur site sensible comme Radio opérateur
                                    (Marseille).</li>
                            </p>
                        </ul>
                        </p>
                    </div>
                    <div class="experience-list mt-5 ">
                        <h6 class=" border-bottom blue-text">Cuisinier/Serveur
                        </h6>
                        <h4 class="lead  border-bottom">De 2013 à 2015 Sushi Am Main/Jamy's Burger Francfort,Allemagne
                        </h4>
                        <p>
                        <ul>
                            <p>
                                <li>Diverses missions dans la restauration en tant que cuisinier et serveur</li>
                            </p>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="" id="formation">
            <div class="row mx-5 d-flex justify-content-between" data-aos="fade-up">
                <div class="col-12 col-md-12 col-lg-4" id="formation-title">
                    <h3 class="text-center mt-5">Diplômes et Formations</h3>
                </div>
                <div class="col">
                    <div class="graphic">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 fs-md-5 " id="formation-list">
                    <div class="formation mt-5">
                        <h6 class="blue-text">Titre professionnel Développeur Web et Web mobile(Niv 5/BTS)</h6>
                        <h4 class="lead">De octobre 2023 à juin 2024 Centre Militaire Formation professionnel </h4>
                        <p>
                            <li>
                                Développeur les partie front-end et back-end d'une application web ou web mobile en
                                intégrant le recommandations de sécurité.</li>
                        </p>
                    </div>
                    <div class="formation mt-5">
                        <h6 class="  blue-text">Formation Générale Élémentaire (FGE)</h6>
                        <h4 class="lead">De juin 2017 à septembre 2017 Légion Étranger Castelnaudary </h4>
                        <p>
                            <li>Chef d’équipe( 3 a 5 personne)</li>
                        </p>
                    </div>
                    <div class="formation mt-5">
                        <h6 class="  blue-text">PSE1/PSE2 Premiers Secours en Equipe de niveau 1/2.
                        </h6>
                        <h4 class="lead">2017 Légion Étranger Castelnaudary</h4>
                        <p>
                            <li>Premiers secours en équipe de niveau 1/2</li>
                        </p>
                    </div>
                    <div class="formation mt-5">
                        <h6 class="  blue-text">ERM(Exploitant Réseaux Mobiles)</h6>
                        <h4 class="lead">De janvier 2016 à avril 2016 Légion Étrangère Castelnaudary</h4>
                        <p>
                            <li>Système d'information et de communication.
                            </li>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="form" data-aos="fade-up">
            <div class="form-container col-11 col-md-10 col-lg-4" id="form">
                <h1 class="text-center message">Message Me</h1>
                <div class="inner-container">
                    <div class="form">
                        <div class="col">
                            <input type="text" id="nom" name="nom" class="w70 form-control" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form">
                        <div class="col">
                            <input type="email" placeholder="Email" id="email" name="email" class="w70 form-control">
                        </div>
                    </div>
                    <div class="form col-12">
                        <textarea maxlength="1000" type="text" id="message" name="message" rows="2" class="form-control md-textarea w70" placeholder="Message"></textarea>
                    </div>
                    <div class="form col-12">
                        <p id="paragraph"></p>
                    </div>

                </div>
                <div class="btn-container m-2 mt-md-5 mt-lg-1 d-flex justify-content-center">

                    <button class="btn blue-bg white-text fw-bold mt-3" onclick="send()">Envoyer</button>

                </div>
            </div>
        </section>
        <section class="footer m-5 ">
            <h3 class="text-center footer-title">Want to connect with me?</h3>
            <div class="social-logo d-flex justify-content-center">
                <a href=""><img src="images/fb.svg" alt="" class="social"></a>
                <a href=""><img src="images/git.svg" alt="" class="social"></a>
                <a href=""><img src="images/insta.svg" alt="" class="social"></a>
                <a href=""><img src="images/linkedin.svg" alt="" class="social"></a>
            </div>
        </section>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 800,
            mirror: true,
        });
    </script>
</body>

</html>

<script>
    let button = document.getElementById('close-btn');

    function reload() {
        location.reload();
    }

    function send() {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'index.php?action=send');
        let data = new FormData();
        data.append('nom', nom.value);
        data.append('email', email.value);
        data.append('message', message.value);
        xhr.send(data);
        xhr.onload = () => {
            if (xhr.status == 200) {
                let response = xhr.responseText;
                // alert('test');
                paragraph.innerHTML = response;
            } else {
                alert('Request failed.  Returned status of ' + xhr.status);
            }
        }
    }
</script>