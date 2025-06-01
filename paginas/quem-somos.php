<style>
    :root {
        --primary: #c0ac9c;
        --secondary: #F5F0E6;
        --clear: #3bdb36;
        --font-titulo: 'Cormorant Garamond 600', serif;
        --font-texto: 'Lora', serif;
        --cor-titulo: #7e6757;
    }

    /* Importar fontes do Google */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&family=Lora:wght@600&display=swap');

    .quem-somos {
        padding: 100px 0;
        background: linear-gradient(135deg, var(--secondary) 0%, rgba(245, 240, 230, 0.3) 50%, #fff 100%);
        position: relative;
        overflow: hidden;
    }

    .quem-somos::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 40%;
        height: 200%;
        background: radial-gradient(ellipse, rgba(59, 219, 54, 0.03) 0%, transparent 70%);
        transform: rotate(15deg);
        pointer-events: none;
    }

    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
        position: relative;
        z-index: 2;
    }

    .quem-somos__grid {
        display: grid;
        grid-template-rows: auto auto auto auto auto;
        gap: 60px;
        grid-template-areas:
            "image"
            "header"
            "highlight"
            "content"
            "values";
    }

    .quem-somos__image-area {
        grid-area: image;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .main-image {
        position: relative;
        overflow: hidden;
        border-radius: 35px;
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.25);
        transform: rotate(-2deg);
        transition: all 0.5s ease;
        width: 100%;
        max-width: 800px;
    }

    .main-image:hover {
        transform: rotate(0deg) scale(1.02);
        box-shadow: 0 35px 100px rgba(0, 0, 0, 0.3);
    }

    .main-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .main-image:hover img {
        transform: scale(1.1);
    }

    .main-image::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: linear-gradient(45deg, var(--clear), var(--primary));
        border-radius: 40px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .main-image:hover::before {
        opacity: 0.3;
    }

    .main-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg,
                rgba(59, 219, 54, 0.15) 0%,
                rgba(192, 172, 156, 0.15) 50%,
                transparent 100%);
        opacity: 0;
        transition: opacity 0.5s ease;
        border-radius: 35px;
    }

    .main-image:hover::after {
        opacity: 1;
    }

    .quem-somos__header {
        grid-area: header;
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
    }

    .quem-somos__title {
        font-family: var(--font-titulo);
        font-size: 4.5rem;
        font-weight: 700;
        color: var(--cor-titulo);
        margin-bottom: 30px;
        line-height: 1.1;
        position: relative;
        letter-spacing: -1px;
    }

    .quem-somos__title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 6px;
        background: linear-gradient(90deg, var(--clear), var(--primary));
        border-radius: 3px;
        box-shadow: 0 2px 10px rgba(59, 219, 54, 0.3);
    }

    .quem-somos__subtitle {
        font-size: 1.3rem;
        color: #555;
        font-weight: 600;
        margin-top: 25px;
        line-height: 1.6;
    }

    .quem-somos__highlight-area {
        grid-area: highlight;
        display: flex;
        justify-content: center;
        max-width: 800px;
        margin: 0 auto;
        width: 100%;
    }

    .quem-somos__content {
        grid-area: content;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .quem-somos__text-block {
        background: rgba(255, 255, 255, 0.8);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border-left: 5px solid var(--clear);
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .quem-somos__text-block:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .quem-somos__text-block p {
        color: #7e6757;
        font-size: 20px !important;
        margin: 0;
        text-align: justify;
    }

    .quem-somos__highlight {
        background: linear-gradient(135deg, var(--primary), #b39c8a);
        color: white;
        padding: 40px;
        border-radius: 25px;
        box-shadow: 0 15px 40px rgba(192, 172, 156, 0.4);
        transform: translateY(0);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        text-align: center;
        width: 100%;
    }

    .quem-somos__highlight::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        transform: rotate(45deg);
        transition: all 0.4s ease;
    }

    .quem-somos__highlight:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 25px 60px rgba(192, 172, 156, 0.5);
    }

    .quem-somos__highlight:hover::before {
        transform: rotate(45deg) translate(20%, 20%);
    }

    .quem-somos__highlight p {
        margin: 0;
        font-style: italic;
        color: white;
        font-size: 20px !important;
        position: relative;
        z-index: 1;
        font-weight: 600;
    }

    .quem-somos__highlight .author {
        font-size: 1rem;
        margin-top: 15px;
        opacity: 0.9;
        font-weight: 400;
    }

    .quem-somos__values {
        grid-area: values;
        max-width: 1000px;
        margin: 0 auto;
    }

    .values-title {
        font-family: var(--font-titulo);
        font-size: 3rem;
        font-weight: 700;
        color: var(--cor-titulo);
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }

    .values-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--clear), var(--primary));
        border-radius: 2px;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
    }

    .value-card {
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-top: 6px solid var(--clear);
        position: relative;
        overflow: hidden;
    }

    .value-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(59, 219, 54, 0.1), transparent);
        transition: left 0.6s ease;
    }

    .value-card:hover::before {
        left: 100%;
    }

    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .value-title {
        font-family: var(--font-titulo);
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--cor-titulo);
        margin-bottom: 15px;
    }

    .value-description {
        color: #666;
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Responsividade */
    @media (max-width: 1200px) {
        .quem-somos__content {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .main-image {
            max-width: 700px;
        }
    }

    @media (max-width: 768px) {
        .quem-somos {
            padding: 60px 0;
        }

        .container {
            padding: 0 20px;
        }

        .quem-somos__grid {
            gap: 40px;
        }

        .quem-somos__title {
            font-size: 3.2rem;
        }

        .quem-somos__subtitle {
            font-size: 1.1rem;
        }

        .quem-somos__content {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .values-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .values-title {
            font-size: 2.5rem;
            margin-bottom: 35px;
        }

        .value-card {
            padding: 30px 25px;
        }

        .quem-somos__text-block {
            padding: 25px;
        }

        .quem-somos__highlight {
            padding: 30px;
        }

        .main-image {
            transform: rotate(0deg);
            max-width: 100%;
        }

        .main-image img {
            height: 300px;
        }
    }

    @media (max-width: 480px) {
        .quem-somos__title {
            font-size: 35px !important;
        }

        .quem-somos__grid {
            gap: 30px;
        }

        .quem-somos__text-block {
            padding: 20px;
        }

        .quem-somos__highlight {
            padding: 25px;
        }

        .quem-somos__highlight p {
            font-size: 1.1rem;
        }

        .value-card {
            padding: 25px 20px;
        }

        .floating-element {
            display: none;
        }

        .main-image img {
            height: 250px;
        }
    }
</style>

<section class="quem-somos">
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>

    <div class="container">
        <div class="quem-somos__grid">
            <div class="quem-somos__image-area">
                <div class="main-image">
                    <img src="imagens/quemsomos.png" alt="Interior do Viveiro do Taide com diversas plantas">
                </div>
            </div>

            <div class="quem-somos__header">
                <h2 class="quem-somos__title">Conheça o Viveiro do Taide</h2>
                <p class="quem-somos__subtitle">
                    Desde 2018, temos o orgulho de oferecer uma ampla variedade de plantas diretamente para a sua casa. Localizada em Juranda-PR, nosso viveiro se dedica a proporcionar um atendimento de qualidade e uma experiência única de encontrar sua planta especial.
                </p>
            </div>

            <div class="quem-somos__highlight-area">
                <div class="quem-somos__highlight">
                    <p>"Cultivar um jardim é acreditar no amanhã."</p>
                    <p class="author">– Audrey Hepburn</p>
                </div>
            </div>

            <div class="quem-somos__content">
                <div class="quem-somos__text-block">
                    <p>Nosso compromisso é com a satisfação do cliente e a saúde das plantas. Por isso, garantimos que todas as nossas plantas são cultivadas com o máximo cuidado e atenção, assegurando que você receba exemplares vibrantes e prontos para embelezar seu espaço. Seja para decorar sua casa, escritório ou jardim, temos opções para todos os gostos e necessidades.</p>
                </div>

                <div class="quem-somos__text-block">
                    <p>Seja para decorar sua casa, escritório ou jardim, temos opções para todos os gostos e necessidades. Explore nossa seleção online e descubra a planta perfeita para você.</p>
                </div>

                <div class="quem-somos__text-block">
                    <p>Estamos aqui para ajudar com qualquer dúvida e garantir que sua experiência de compra seja a melhor possível. Nossa equipe está sempre pronta para orientar você na escolha ideal.</p>
                </div>
            </div>

            <div class="quem-somos__values">
                <h3 class="values-title">Nossos Valores</h3>
                <div class="values-grid">
                    <div class="value-card">
                        <h4 class="value-title">Qualidade</h4>
                        <p class="value-description">Plantas selecionadas e cultivadas com máximo cuidado para garantir saúde e beleza.</p>
                    </div>
                    <div class="value-card">
                        <h4 class="value-title">Sustentabilidade</h4>
                        <p class="value-description">Práticas responsáveis que respeitam o meio ambiente e promovem a biodiversidade.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>