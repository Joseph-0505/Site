<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viveiro do Taide</title>



    <link href="css/style.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Lora&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">







</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg py-2">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="home" data-aos="fade-right">
                    <img src="imagens/logo.png" alt="Viveiro do Taide">
                </a>

                <!-- Botão Hamburguer (mobile) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Itens do Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home" data-aos="fade-left" data-aos-duration="1000">
                                <i class="fas fa-home me-2"></i>Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quem-somos" data-aos="fade-left" data-aos-duration="1400">
                                <i class="fas fa-users me-2"></i>Quem Somos
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="produtosDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-aos="fade-left" data-aos-duration="1600">
                                <i class="fas fa-seedling me-2"></i>Plantas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="produtosDropdown">
                                <li><a class="dropdown-item" href="index.php?param=plantas/suculentas">
                                        <i class="fas fa-leaf me-2"></i>Suculentas
                                    </a></li>
                                <li><a class="dropdown-item" href="index.php?param=plantas/cactos">
                                        <i class="fas fa-spa me-2"></i>Cactos
                                    </a></li>
                                <li><a class="dropdown-item" href="index.php?param=plantas/orquideas">
                                        <i class="fas fa-seedling  me-2"></i>Orquídeas
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato" data-aos="fade-left" data-aos-duration="1800">
                                <i class="fas fa-envelope me-2"></i>Contato
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <main>
        <?php
        require 'Dados.php';

        $param = $_GET["param"] ?? "home";
        $p = explode("/", $param);

        $page = $p[0] ?? "home";
        $plantas = $p[1] ?? null;

        if ($page === "plantas" && $plantas !== null) {
            $paginas = "plantas/{$plantas}.php";
        } else {
            $paginas = "paginas/{$page}.php";
        }

        if (file_exists($paginas)) {
            include $paginas;
        } else {
            include "paginas/erro.php";
        }
        ?>

    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-main">
                <div class="footer-section">
                    <h3><i class="fas fa-seedling"></i>Viveiro do Taide</h3>
                    <p>Especializado em mudas de qualidade, plantas ornamentais e paisagismo. Transformamos espaços em jardins dos sonhos com dedicação e expertise.</p>
                    <div class="social-icons">
                        <a href="https://wa.me/5544998014519" target="_blank" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/viveirodotaide/" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3><i class="fas fa-map-marker-alt"></i>Localização</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Juranda, Paraná<br>CEP: 87355-000</span>
                        </li>
                        <li>
                            <i class="fas fa-road"></i>
                            <span>Rua Principal,<br>Vila Rural Alto Alegre</span>
                        </li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3><i class="fas fa-phone"></i>Contato</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/5544998014519">(44) 99801-4519</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contato@viveirodotaide.com.br">contato@viveirodotaide.com.br</a>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Seg a Sex: 7h às 17h<br>Sáb: 7h às 12h</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Viveiro do Taide - Todos os direitos reservados</p>
                <p class="developer">Desenvolvido por José Victor da Silva</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Efeito de transparência no header durante o scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>