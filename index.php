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
        <nav class="navbar navbar-expand-lg  py-2">
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
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quem-somos">Quem Somos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="produtosDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Plantas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="produtosDropdown">
                                <li><a class="dropdown-item" href="suculentas">Suculentas</a></li>
                                <li><a class="dropdown-item" href="cactos">Cactos</a></li>
                                <li><a class="dropdown-item" href="orquideas">Orquídeas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <main>
        <?php
        require 'Dados.php';

        if (isset($_GET["param"])) {
            $param = $_GET["param"];

            //separar o parameto por /

            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $produtos = $p[1] ?? NULL;

        if ($page == $produtos) {
            $paginas = "produtos/{$produtos}.php";
        } else {
            $paginas = "paginas/{$page}.php";
        }

        //verificar se a pagina existe

        if (file_exists($paginas)) {
            include $paginas;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; 2025; Desenvolvido por José Victor da Silva | Viveiro do Taide</p>
            <div class="social-icons">
                <a href="https://wa.me/5544998014519" target="_blank" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com/viveirodotaide/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>