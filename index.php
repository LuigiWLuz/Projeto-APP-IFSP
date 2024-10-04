<!-- Estruturas do PHP estão localizadas em: ./includes/general_tags.php -->

<?php
include "./includes/general_tags.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?php echo $nome_site ?></title>
    <link rel='stylesheet' href='./assets/css/global.css'>
    <link rel='stylesheet' href='./assets/css/hamburguer.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class='navbar'>
                <div class='container nav-container'>
                    <input class='checkbox' type='checkbox' name='' id='' />
                    <div class='hamburger-linhas'>
                        <span class='linha linha1'></span>
                        <span class='linha linha2'></span>
                        <span class='linha linha3'></span>
                    </div>  
                      
                    <div class='menu-items'>
                        <li><a href='./index.php'>Home</a></li>
                        <li><a href='./system/podcast.php'>Podcast</a></li>
                        <li><a href='./system/historico.php'>Histórico</a></li>
                        <li><a href='./system/campus.php'>Campus</a></li>
                        <li><a href='./system/areas.php'>Áreas</a></li>
                        <li class='nossos-cursos'>
                            <a href='#'>Nossos Cursos</a>
                            <i href='#' class='chevron-link'>
                                <i class='bi bi-chevron-down' id='chevron-icon' style='margin-top: 12px; font-size: 1.2rem;'></i>
                            </i>
                            <ul class='submenu'>
                                <li><a href='./system/tecnicos.php'>Técnicos</a></li>
                                <li><a href='./system/tecnicos-integrados.php'>Técnicos Integrados</a></li>
                                <li><a href='./system/superiores.php'>Superiores</a></li>
                                <li><a href='./system/extensao.php'>Cursos de Extensão</a></li>
                            </ul>
                        </li>
                        <li><a href='./system/galeria.php'>Galeria</a></li>
                        <li><a href='./system/sobre.php'>Sobre</a></li>
                      
                        <div class='icons-navbar'>
                            <a href='https://www.ifspcjo.edu.br/contato'><i class='bi bi-envelope-fill'></i></a>
                            <a href='tel:+5512983080050'><i class='bi bi-telephone-fill'></i></a>
                            <a href='https://instagram.com'><i class='bi bi-instagram'></i></a>
                            <a href='https://facebook.com'><i class='bi bi-facebook'></i></a>
                            <a href='https://youtube.com'><i class='bi bi-youtube'></i></a>
                            <a href='https://www.google.com/maps/place/Instituto+Federal+de+Educa%C3%A7%C3%A3o,+Ci%C3%AAncia+e+Tecnologia+de+S%C3%A3o+Paulo+-+Campus+Campos+do+Jord%C3%A3o/@-22.7427304,-45.5925402,15z/data=!4m6!3m5!1s0x94cc89dae7f8099f:0x198fcf4cf3c2df0d!8m2!3d-22.7427304!4d-45.5925402!16s%2Fg%2F1pv5kmv42?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D' class='bi bi-geo-alt-fill'></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class='page-title'>If na mão</div>
        <img src='img/Artboard 1 copy 2.png' alt='Logo' class='logo'>
    </header>   

    <!-- Conteúdo Principal -->
    <main>
        
        <!-- Carrossel de Imagens -->
        <div class="carousel">
            <div class="carousel-images">
                <img src="img/fotosIF/predio1fora-8.JPG" alt="Imagem 1">
                <img src="img/fotosIF/biblioteca-2.jpg" alt="Imagem 2">
                <img src="img/fotosIF/labInformatica-1.JPG" alt="Imagem 3">
                <img src="img/fotosIF/corredor-1.JPG" alt="Imagem 4">
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>

            <!-- Texto em cima do carrossel -->
            <div class="carousel-text">
                <h2>Bem-vindo ao IF na Mão!</h2>
                <p>Aqui você poderá explorar cursos, instalações, e muito mais do IFSP de Campos do Jordão.</p>
            </div>
        </div>

        <div class="services section" id="services">
            <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                    <img src="img/service-01.png" alt="online degrees">
                    </div>
                    <div class="main-content">
                    <h4>Teste</h4>
                    <p>Testinho.</p>
                    <div class="main-button">
                        <a href="#">Read More</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                    <img src="img/service-02.png" alt="short courses">
                    </div>
                    <div class="main-content">
                    <h4>Teste</h4>
                    <p>Testinho.</p>
                    <div class="main-button">
                        <a href="#">Read More</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                    <img src="img/service-03.png" alt="web experts">
                    </div>
                    <div class="main-content">
                    <h4>Teste</h4>
                    <p>Testinho.</p>
                    <div class="main-button">
                        <a href="#">Read More</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </main>
    
    <section class="section-courses" id="courses" >
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <div class="section-heading">
                <h6>Cursos</h6>
                <h2>Alguns dos cursos disponíveis</h2>
            </div>
            </div>
        </div>
        <ul class="event_filter">
            <li>
            <a class="is_active" href="./system/tecnicos.php">Técnicos</a>
            </li>
            <li>
            <a href="./system/tecnicos-integrados.php">Técnicos Integrados</a>
            </li>
            <li>
            <a href="./system/superiores.php">Superiores</a>
            </li>
            <li>
            <a href="./system/extensao.php">Cursos de Extensão</a>
            </li>
        </ul>
        <div class="row event_box">
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="img/image1.jpg" alt=""></a>
                <span class="category">Teste</span>
                <span class="ponto"></span>
                </div>
                <div class="down-content">
                <span class="short">Testinho</span>
                <h4>Testão</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="img/image1.jpg" alt=""></a>
                <span class="category">Teste</span>
                <span class="ponto"></span>
                </div>
                <div class="down-content">
                <span class="short">Testinho</span>
                <h4>Testão</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="img/image1.jpg" alt=""></a>
                <span class="category">Teste</span>
                <span class="ponto"></span>
                </div>
                <div class="down-content">
                <span class="short">Testinho</span>
                <h4>Testão</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="img/image1.jpg" alt=""></a>
                <span class="category">Teste</span>
                <span class="ponto"></span>
                </div>
                <div class="down-content">
                <span class="short">Testinho</span>
                <h4>Testão</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="img/image1.jpg" alt=""></a>
                <span class="category">Teste</span>
                <span class="ponto"></span>
                </div>
                <div class="down-content">
                <span class="short">Testinho</span>
                <h4>Testão</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="img/image1.jpg" alt=""></a>
                <span class="category">Teste</span>
                <span class="ponto"></span>
                </div>
                <div class="down-content">
                <span class="short">Testinho</span>
                <h4>Testão</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Rodapé Global --> 
    <?php 
        echo $footer;
    ?>
    
    <script src='assets/js/scripts.js'></script>

</body>
</html>
