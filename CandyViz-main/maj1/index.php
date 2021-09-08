<?php
$pdo = new PDO("mysql:host=db5003001955.hosting-data.io:3306;dbname=dbs2411165", "dbu2097146", "Candiviz2021", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$data = $pdo->prepare("SELECT * FROM stats");
$data->execute();
$datas = $data->fetchAll(PDO::FETCH_ASSOC);


$dataTot = json_encode($datas);
file_put_contents("data.json",$dataTot)
?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>Candyviz</title>
    <meta name="description" content="Une phrase d'environ 170 caractères">
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family= Playfair+Display:wght@400;700 & family= Roboto & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/global_scroll.css">
    <script src="https://kit.fontawesome.com/9c61e3f1b0.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="lightbox">
        <nav class="container-menu">
            <p class="text-1"><label class="container-menu-img"><img src="./img/btn-x.png" alt="fermer" class="btn-x"></label></p>
            <ul class="menu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="questionnaire.html">Questionnaire</a></li>
                
                <li><a href="apropos.html">À Propos</a></li>
            </ul>
        </nav>
    </div>
    <header>
        <nav>
            <a href="index.php"><h1>Candyviz</h1></a>
            <div>
                <div class="burger"></div>
            </div>
            <ul>
                <a href="questionnaire.html"><li>Questionnaire</li></a>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="main">
        <!-- Slide 1 -->
            <section class="slide one">
                <div class="container-flex">
                        <div>
                            <h2>Fraise Tagada</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3>1969</h3>
                        </div>
                        <div>
                            <img src="./img/fraise-tagada.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                    </div>

                    <div class="container-block-responsive">
                        <div>
                            <h3>1969</h3>
                        </div>
                        <div>
                            <img src="./img/fraise-tagada.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                        <div>
                            <h2>Fraise Tagada</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz">
                            <div class="container-data-flex">
                                <div id="chartdiv1"></div>
                                <div id="chartdiv2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv1"></div>
                                <div id="resp_chartdiv2"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer>
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>
            <!-- Slide 2 -->
            <section class="slide two">
                <div class="container-flex">
                        <div>
                            <h2>Schtroumph</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-un">1981</h3>
                        </div>
                        <div>
                            <img src="./img/shtroumph.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                    </div>

                    <div class="container-block-responsive">
                        <div>
                            <h3>1981</h3>
                        </div>
                        <div>
                            <img src="./img/shtroumph.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                        <div>
                            <h2>Schtroumph</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-1981">
                            <div class="container-data-flex">
                                <div id="chartdiv3"></div>
                                <div id="chartdiv4"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz-1981">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv3"></div>
                                <div id="resp_chartdiv4"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-2">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>
            <!-- Slide 3 -->
            <section class="slide three">
            <div class="container-flex">
                        <div>
                            <h2>Arlequin</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-deux">1992</h3>
                        </div>
                        <div>
                            <img src="./img/Arlequin.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                    </div>

                    <div class="container-block-responsive">
                        <div>
                            <h3>1992</h3>
                        </div>
                        <div>
                            <img src="./img/Arlequin.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                        <div>
                            <h2>Arlequin</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-1992">
                            <div class="container-data-flex">
                                <div id="chartdiv5"></div>
                                <div id="chartdiv6"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz-1992">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv5"></div>
                                <div id="resp_chartdiv6"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-3">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>
            <!-- slide 4 -->
            <section class="slide four">
            <div class="container-flex">
                        <div>
                            <h2>Regal’Ad</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-trois">1997</h3>
                        </div>
                        <div>
                            <img src="./img/Krema.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                    </div>

                    <div class="container-block-responsive">
                        <div>
                            <h3>1997</h3>
                        </div>
                        <div>
                            <img src="./img/Krema.png" alt="Photo du bonbon fraise Tagada">
                        </div>
                        <div>
                            <h2>Regal’Ad</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-1997">
                            <div class="container-data-flex">
                                <div id="chartdiv7"></div>
                                <div id="chartdiv8"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz-1997">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv7"></div>
                                <div id="resp_chartdiv8"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-4">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>  
            <!-- slide 5 -->
            <section class="slide five">
            <div class="container-flex">
                        <div>
                            <h2>Dragibus</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-quatre">2000</h3>
                        </div>
                        <div>
                            <img src="./img/Dragibus.png" alt="Photo du bonbon Dragibus">
                        </div>
                    </div>

                    <div class="container-block-responsive">
                        <div>
                            <h3>2000</h3>
                        </div>
                        <div>
                            <img src="./img/Arlequin.png" alt="Photo du bonbon Alrequin">
                        </div>
                        <div>
                            <h2>Dragibus</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-2000">
                            <div class="container-data-flex">
                                <div id="chartdiv9"></div>
                                <div id="chartdiv10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz-2000">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv9"></div>
                                <div id="resp_chartdiv10"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-5">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>
            <!-- Slide 6 -->
            <section class="slide six">
            <div class="container-flex">
                        <div>
                            <h2>Collier</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-cinq">2003</h3>
                        </div>
                        <div>
                            <img src="./img/Collier.png" alt="Photo du bonbon collier">
                        </div>
                    </div>

                    <div class="container-block-responsive">
                        <div>
                            <h3>2003</h3>
                        </div>
                        <div>
                            <img src="./img/Collier.png" alt="Photo du bonbon collier">
                        </div>
                        <div>
                            <h2>Collier</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-2003">
                            <div class="container-data-flex">
                                <div id="chartdiv11"></div>
                                <div id="chartdiv12"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz-2003">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv11"></div>
                                <div id="resp_chartdiv12"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-6">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>
            <!-- Slide 7 -->
            <section class="slide seven">
            <div class="container-flex">
                        <div>
                            <h2>Haribo Pik</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-six">2006</h3>
                        </div>
                        <div>
                            <img src="./img/Pik.png" alt="Photo du logo d'haribo de la gamme Pik">
                        </div>
                    </div>

                    <div class="container-block-responsive">
                        <div>
                            <h3>2006</h3>
                        </div>
                        <div>
                            <img src="./img/Pik.png" alt="Photo du logo d'haribo de la gamme Pik">
                        </div>
                        <div>
                            <h2>Haribo Pik</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-2006">
                            <div class="container-data-flex">
                                <div id="chartdiv13"></div>
                                <div id="chartdiv14"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz-1006">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv13"></div>
                                <div id="resp_chartdiv14"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-7">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>
            <!-- Slide 8 -->
            <section class="slide eight">
            <div class="container-flex">
                        <div>
                            <h2>Scoubidou</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-sept">2008</h3>
                        </div>
                        <div>
                            <img src="./img/Pik.png" alt="Photo du bonbon scoubidou">
                        </div>
                    </div>
                    <div class="container-block-responsive">
                        <div>
                            <h3>2008</h3>
                        </div>
                        <div>
                            <img src="./img/Pik.png" alt="Photo du logo d'haribo de la gamme Pik">
                        </div>
                        <div>
                            <h2>Scoubidou</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-2008">
                            <div class="container-data-flex">
                                <div id="chartdiv15"></div>
                                <div id="chartdiv16"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz2008">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv15"></div>
                                <div id="resp_chartdiv16"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-8">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>
            </section>

            <!-- Slide 9 -->
            <section class="slide nine">
            <div class="container-flex">
                        <div>
                            <h2>Mamouth candy</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                        <div>
                            <h3 id="date-huit">2009</h3>
                        </div>
                        <div>
                            <img src="./img/Pik.png" alt="Photo du bonbon scoubidou">
                        </div>
                    </div>
                    <div class="container-block-responsive">
                        <div>
                            <h3>2009</h3>
                        </div>
                        <div>
                            <img src="./img/Pik.png" alt="Photo du logo d'haribo de la gamme Pik">
                        </div>
                        <div>
                            <h2>Mamouth candy</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-2009">
                            <div class="container-data-flex">
                                <div id="chartdiv17"></div>
                                <div id="chartdiv18"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz2009">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv17"></div>
                                <div id="resp_chartdiv18"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-9">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>           
            </section>



            <!-- slide 10 -->


            <section class="slide ten">
            <div class="container-flex">
                    <div>
                        <h2>Tâche langue</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                    </div>
                    <div>
                        <h3 id="date-neuf">2012</h3>
                    </div>
                    <div>
                        <img src="./img/Pik.png" alt="Photo du bonbon scoubidou">
                    </div>
                    </div>
                    <div class="container-block-responsive">
                        <div>
                            <h3>2012</h3>
                        </div>
                        <div>
                            <img src="./img/Pik.png" alt="Photo du logo d'haribo de la gamme Pik">
                        </div>
                        <div>
                            <h2>Tâche langue</h2>
                            <p id ="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores assumenda blanditiis neque error, adipisci laudantium earum corporis rerum, odit animi cum repudiandae quod! Inventore a quasi illum dicta, blanditiis rem.</p>
                        </div>
                    </div>

                    <div id = "fleche-dataviz">
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <div class="container-dataviz"> 
                        <p>Quelques informations:</p>
                        <div class="rectangle-dataviz-2012">
                            <div class="container-data-flex">
                                <div id="chartdiv19"></div>
                                <div id="chartdiv20"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container-dataviz-responsive"> 
                        <div class="rectangle-dataviz-2012">
                            <h4>Décès dû au diabète</h4>
                            <div class="container-data-flex">
                                <div id="fleche-left">
                                    <i  class="fas fa-chevron-left"></i>
                                </div>
                                
                                <div id="resp_chartdiv19"></div>
                                <div id="resp_chartdiv20"></div>
                                
                                <div id="fleche-right">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            
                            <div id = "indic">
                                <i class="fas fa-circle"></i></i><i class="far fa-circle"></i><i class="far fa-circle"></i>
                            </div>
                            
                        </div>
                    </div>
                <footer id="footer-slide-10">
                    <ul>
                        <a href=""><li>Facebook</li></a>
                        <a href=""><li>Instagram</li></a>
                        <a href=""><li>Twitter</li></a>
                    </ul>
                </footer>           

            </section>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/ScrollToPlugin.min.js"></script>
    <script src="./js/three.js"></script>
    <script src="./js/OrbitControls.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="./js/global.js"></script>
    
</body>
</html>