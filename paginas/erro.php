<style>
    :root {
        --primary: #c0ac9c;
        --secondary: #F5F0E6;
        --clear: #3bdb36;
        --font-titulo: 'Cormorant Garamond', serif;
        --font-texto: 'Lora', serif;
        --cor-titulo: #7e6757;
    }




    .error-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        width: 100%;
        max-width: 1000px;
    }

    .error-image-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .error-image {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(126, 103, 87, 0.15);
    }

    .error-text {
        padding: 20px 0;
    }

    .error-code {
        font-family: var(--font-titulo);
        font-size: 6rem;
        font-weight: 700;
        color: var(--cor-titulo);
        margin-bottom: 20px;
        line-height: 1;
    }

    .error-title {
        font-family: var(--font-titulo);
        font-size: 3rem;
        font-weight: 700;
        color: var(--cor-titulo);
        margin-bottom: 30px;
        line-height: 1.2;
    }

    .error-message {
        font-family: var(--font-texto);
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--primary);
        line-height: 1.6;
        margin-bottom: 40px;
    }

    .error-suggestions {
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        border-left: 5px solid var(--clear);
        box-shadow: 0 10px 25px rgba(126, 103, 87, 0.08);
    }

    .error-suggestions h3 {
        font-family: var(--font-titulo);
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--cor-titulo);
        margin-bottom: 15px;
    }

    .error-suggestions ul {
        list-style: none;
        padding: 0;
    }

    .error-suggestions li {
        font-family: var(--font-texto);
        font-size: 1rem;
        font-weight: 600;
        color: var(--primary);
        margin-bottom: 12px;
        padding-left: 20px;
        position: relative;
    }

    .error-suggestions li:before {
        content: "•";
        color: var(--clear);
        font-size: 1.5rem;
        position: absolute;
        left: 0;
        top: -2px;
    }

    /* Responsividade */
    @media (max-width: 968px) {
        .error-content {
            grid-template-columns: 1fr;
            gap: 40px;
            text-align: center;
        }

        .error-code {
            font-size: 4.5rem;
        }

        .error-title {
            font-size: 2.5rem;
        }

        .container {
            padding: 30px 15px;
        }
    }

    @media (max-width: 768px) {
        .error-code {
            font-size: 3.5rem;
        }

        .error-title {
            font-size: 2rem;
        }

        .error-message {
            font-size: 1.1rem;
        }

        .error-suggestions {
            padding: 20px;
        }

        .error-suggestions h3 {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 20px 10px;
        }

        .error-code {
            font-size: 3rem;
        }

        .error-title {
            font-size: 1.8rem;
        }

        .error-message {
            font-size: 1rem;
        }

        .error-image {
            margin-top: 100px !important;
            max-width: 300px;
        }

        .error-suggestions {
            padding: 15px;
            margin-bottom: 230px !important;
        }

        .error-suggestions li {
            font-size: 0.9rem;
        }
    }

    /* Animação sutil */
    .error-content {
        animation: fadeInUp 0.8s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .error-image {
        transition: transform 0.3s ease;
    }

    .error-image:hover {
        transform: scale(1.02);
    }
</style>
</head>

<body>
    <div class="container">
        <div class="error-content">
            <div class="error-image-container">
                <img src="imagens/404.jpeg" alt="404 Error" class="error-image">
            </div>

            <div class="error-text">
                <div class="error-code">404</div>
                <h1 class="error-title">Página não encontrada</h1>
                <p class="error-message">
                    Ops! Parece que a página que você está procurando não existe ou foi movida para outro local.
                </p>

                <div class="error-suggestions">
                    <h3>O que você pode fazer:</h3>
                    <ul>
                        <li>Verifique se o endereço foi digitado corretamente</li>
                        <li>Volte à página anterior usando o botão do navegador</li>
                        <li>Acesse nossa página inicial para encontrar o que precisa</li>
                        <li>Entre em contato conosco se o problema persistir</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>