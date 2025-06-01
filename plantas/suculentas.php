<?php
// Incluir o arquivo com os dados das suculentas
require_once 'dados-suculentas.php'; // Substitua 'paste.php' pelo nome do seu arquivo com os dados
?>

<style>
    /* SASS-style CSS variables - Suas variáveis personalizadas */
    :root {
        --primary: #c0ac9c;
        --secondary: #F5F0E6;
        --clear: #3bdb36;
        --cor-titulo: #7e6757;
        --text-light: #8b7a6b;
        --white: #ffffff;
        --shadow: rgba(192, 172, 156, 0.2);
        --border-radius: 12px;
        --transition: all 0.3s ease;
    }

    /* Importar fontes do Google */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&family=Lora:wght@600&display=swap');



    /* Products Grid */
    .products-section {
        padding: 2rem 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
        font-size: 2.5rem;
        color: var(--cor-titulo);
        margin-bottom: 0.5rem;
    }

    .section-title p {
        font-size: 1.1rem;
        color: var(--text-light);
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
    }

    .product-card {
        background: var(--white);
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: 0 5px 20px var(--shadow);
        transition: var(--transition);
        position: relative;
        cursor: pointer;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .product-image {
        height: 200px;
        background: linear-gradient(45deg, var(--secondary), #ede7da);
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .product-image:hover img {
        transform: scale(1.1);
    }

    .product-image::before {
        content: '🌵';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem;
        opacity: 0.4;
        z-index: 1;
    }

    .product-image.has-image::before {
        display: none;
    }

    .product-info {
        padding: 1.5rem;
    }

    .product-name {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
        color: var(--cor-titulo);
    }

    .product-scientific {
        font-family: 'Lora', serif;
        font-style: italic;
        color: var(--text-light);
        margin-bottom: 1rem;
        font-size: 0.9rem;
    }

    .product-description {
        color: var(--text-light);
        font-size: 0.9rem;
        margin-bottom: 1rem;
        line-height: 1.5;
    }

    .product-care {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .care-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 0.8rem;
        font-family: 'Lora', serif;
        color: var(--text-light);
    }

    .care-item i {
        font-size: 1.2rem;
        margin-bottom: 0.3rem;
        color: var(--clear);
    }

    .product-price {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #eee;
    }

    .price {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
        font-size: 1.4rem;
        color: var(--cor-titulo);
    }

    .contact-btn {
        background: var(--clear);
        color: var(--white);
        border: none;
        padding: 0.7rem 1.5rem;
        border-radius: 25px;
        cursor: pointer;
        transition: var(--transition);
        font-family: 'Lora', serif;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .contact-btn:hover {
        background: var(--primary);
        transform: scale(1.05);
    }

    .contact-btn:disabled {
        background: #ccc;
        cursor: not-allowed;
        transform: none;
    }

    .stock-info {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-top: 0.5rem;
        font-size: 0.9rem;
        font-family: 'Lora', serif;
    }

    .stock-available {
        color: var(--clear);
    }

    .stock-low {
        color: var(--primary);
    }

    .stock-out {
        color: var(--cor-titulo);
    }

    /* Care Tips Section */
    .care-tips {
        background: var(--white);
        margin: 3rem 0;
        padding: 2rem;
        border-radius: var(--border-radius);
        box-shadow: 0 5px 20px var(--shadow);
    }

    .care-tips h3 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
        color: var(--cor-titulo);
        margin-bottom: 1rem;
        text-align: center;
        font-size: 2rem;
    }

    .tips-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 1.5rem;
    }

    .tip-card {
        text-align: center;
        padding: 1rem;
    }

    .tip-card i {
        font-size: 2rem;
        color: var(--clear);
        margin-bottom: 1rem;
    }

    .tip-card h4 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
        color: var(--cor-titulo);
        margin-bottom: 0.5rem;
    }

    .tip-card p {
        font-family: 'Lora', serif;
        font-weight: 600;
        color: var(--text-light);
    }

    /* Stats Section */
    .stats-section {
        background: var(--white);
        padding: 2rem;
        border-radius: var(--border-radius);
        box-shadow: 0 5px 20px var(--shadow);
        margin-bottom: 2rem;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        text-align: center;
    }

    .stat-item h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.5rem;
        color: var(--clear);
        margin-bottom: 0.5rem;
    }

    .stat-item p {
        color: var(--text-light);
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 0 15px;
        }

        .header-content {
            flex-direction: column;
            text-align: center;
        }

        .header-info {
            text-align: center;
            margin-top: 1rem;
        }

        .section-title h2 {
            font-size: 2rem;
        }

        .products-section {
            padding: 1.5rem 0;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .product-care {
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: space-around;
        }

        .care-item {
            flex: 1;
            min-width: 60px;
            font-size: 0.75rem;
        }

        .care-item i {
            font-size: 1rem;
        }

        .product-name {
            font-size: 1.2rem;
        }

        .price {
            font-size: 1.3rem;
        }

        .contact-btn {
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
        }

        .tips-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .care-tips {
            margin: 2rem 0;
            padding: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 0 10px;
        }

        .products-section {
            padding: 1rem 0;
        }

        .products-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .product-card {
            margin-bottom: 1rem;
        }

        .product-info {
            padding: 1rem;
        }

        .product-image {
            height: 180px;
        }

        .product-price {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }

        .contact-btn {
            width: 100%;
            text-align: center;
            justify-content: center;
            padding: 0.8rem;
        }

        .product-care {
            gap: 0.3rem;
        }

        .care-item {
            font-size: 0.7rem;
        }

        .product-name {
            font-size: 1.1rem;
        }

        .product-scientific {
            font-size: 0.8rem;
        }

        .tips-grid {
            grid-template-columns: 1fr;
        }

        .care-tips h3 {
            font-size: 1.3rem;
        }

        .tip-card {
            padding: 0.8rem;
        }

        .tip-card i {
            font-size: 1.5rem;
        }

        .stats-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .product-card {
        animation: fadeInUp 0.6s ease forwards;
    }

    .product-card:nth-child(even) {
        animation-delay: 0.1s;
    }

    .product-card:nth-child(3n) {
        animation-delay: 0.2s;
    }
</style>

<section class="products-section">
    <div class="container">
        <div class="section-title">
            <h2><i class="fas fa-seedling"></i> Nossas Suculentas</h2>
            <p>Plantas especiais cultivadas com carinho para o clima do Paraná</p>
        </div>
        <div class="products-grid" id="productsGrid">
        </div>
    </div>
</section>

<section class="care-tips">
    <div class="container">
        <h3><i class="fas fa-leaf"></i> Dicas de Cultivo para o Paraná</h3>
        <div class="tips-grid">
            <div class="tip-card">
                <i class="fas fa-sun"></i>
                <h4>Luz Solar</h4>
                <p>4-6 horas de sol direto pela manhã. No verão paranaense, proteja do sol forte da tarde.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-tint"></i>
                <h4>Rega</h4>
                <p>No inverno do PR, regue apenas quando o substrato estiver completamente seco.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-thermometer-half"></i>
                <h4>Temperatura</h4>
                <p>Proteja de geadas. Traga para local coberto quando temperatura < 5°C.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-seedling"></i>
                <h4>Substrato</h4>
                <p>Use substrato drenante. Misture terra comum com areia grossa e perlita.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Dados das suculentas vindos diretamente do PHP
    const succulents = <?php echo json_encode($suculentas, JSON_UNESCAPED_UNICODE); ?>;

    // Função para gerar mensagem do WhatsApp
    function generateWhatsAppMessage(product) {
        return `Olá! Tenho interesse na suculenta ${product.name} (${product.scientific}) no valor de R$ ${product.price.toFixed(2)}. Gostaria de mais informações! Aguardo retorno! `;
    }


    // Função para renderizar produtos
    function renderProducts(products) {
        const grid = document.getElementById('productsGrid');
        grid.innerHTML = '';

        products.forEach(product => {
            const stockClass = product.stock === 0 ? 'stock-out' :
                product.stock <= 3 ? 'stock-low' : 'stock-available';

            const stockText = product.stock === 0 ? 'Esgotado' :
                product.stock <= 3 ? `Últimas ${product.stock} unidades` :
                `${product.stock} disponíveis`;

            const stockIcon = product.stock === 0 ? 'fas fa-times-circle' :
                product.stock <= 3 ? 'fas fa-exclamation-triangle' :
                'fas fa-check-circle';

            const whatsappUrl = `https://wa.me/${product.whatsapp}?text=${encodeURIComponent(generateWhatsAppMessage(product))}`;

            const card = document.createElement('div');
            card.className = 'product-card';

            card.innerHTML = `
                    <div class="product-image ${product.image ? 'has-image' : ''}">
                        ${product.image ? `<img src="${product.image}" alt="${product.name}" loading="lazy" onerror="this.style.display='none'">` : ''}
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">${product.name}</h3>
                        <p class="product-scientific">${product.scientific}</p>
                        <p class="product-description">${product.description}</p>
                        
                        <div class="product-care">
                            <div class="care-item">
                                <i class="fas fa-sun"></i>
                                <span>${product.care.light}</span>
                            </div>
                            <div class="care-item">
                                <i class="fas fa-tint"></i>
                                <span>${product.care.water}</span>
                            </div>
                            <div class="care-item">
                                <i class="fas fa-thermometer-half"></i>
                                <span>${product.care.temp}</span>
                            </div>
                        </div>
                        
                        <div class="stock-info ${stockClass}">
                            <i class="${stockIcon}"></i>
                            <span>${stockText}</span>
                        </div>
                        
                        <div class="product-price">
                            <span class="price">R$ ${product.price.toFixed(2).replace('.', ',')}</span>
                            ${product.stock === 0 ? 
                                '<button class="contact-btn" disabled><i class="fas fa-ban"></i> Esgotado</button>' :
                                `<a href="${whatsappUrl}" target="_blank" class="contact-btn">
                                    <i class="fab fa-whatsapp"></i> Contato
                                </a>`
                            }
                        </div>
                    </div>
                `;

            grid.appendChild(card);
        });
    }

    // Inicializar página
    document.addEventListener('DOMContentLoaded', function() {
        renderProducts(succulents);
    });
</script>