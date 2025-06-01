 .difficulty-badge {
 font-size: 0.7rem;
 padding: 0.2rem 0.6rem;
 }
 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Suculentas - Viveiro Verde Vida</title>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

         * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
         }

         body {
             font-family: 'Lora', serif;
             font-weight: 600;
             line-height: 1.6;
             color: var(--cor-titulo);
             background: linear-gradient(135deg, var(--secondary) 0%, #ffffff 100%);
         }

         .container {
             max-width: 1200px;
             margin: 0 auto;
             padding: 0 20px;
         }

         /* Products Grid */
         .products-section {
             padding: 2rem 0;
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

         /* Responsive Design */
         @media (max-width: 768px) {
             .container {
                 padding: 0 15px;
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

             .difficulty-badge {
                 font-size: 0.7rem;
                 padding: 0.2rem 0.6rem;
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
         }

         @media (max-width: 320px) {
             .container {
                 padding: 0 8px;
             }

             .product-info {
                 padding: 0.8rem;
             }

             .product-image {
                 height: 160px;
             }

             .product-image::before {
                 font-size: 2.5rem;
             }

             .care-item {
                 font-size: 0.65rem;
                 min-width: 50px;
             }

             .care-item i {
                 font-size: 0.9rem;
             }

             .product-name {
                 font-size: 1rem;
             }

             .price {
                 font-size: 1.2rem;
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
 </head>

 <body>
     <section class="products-section">
         <div class="container">
             <div class="products-grid" id="productsGrid">
                 <!-- Produtos serão inseridos aqui pelo JavaScript -->
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
         // Exemplo de como os dados virão do PHP
         // const succulents = <?php echo json_encode($suculentas_array); ?>;

         // Dados de exemplo para demonstração (remover quando integrar com PHP)
         const succulents = [{
                 id: 1,
                 name: "Rosa de Pedra", // Este nome virá do PHP
                 scientific: "Echeveria elegans",
                 category: "iniciante",
                 price: 15.90,
                 stock: 12,
                 image: "images/rosa-de-pedra.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Sol pleno",
                     water: "Pouca",
                     temp: "15-25°C"
                 }
             },
             {
                 id: 2,
                 name: "Jade Anã", // Este nome virá do PHP
                 scientific: "Crassula ovata 'Minima'",
                 category: "iniciante",
                 price: 12.50,
                 stock: 8,
                 image: "images/jade-ana.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Meia-sombra",
                     water: "Moderada",
                     temp: "18-24°C"
                 }
             },
             {
                 id: 3,
                 name: "Haworthia Zebra", // Este nome virá do PHP
                 scientific: "Haworthiopsis fasciata",
                 category: "colorida",
                 price: 28.90,
                 stock: 3,
                 image: "images/haworthia-zebra.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Sombra",
                     water: "Pouca",
                     temp: "16-22°C"
                 }
             },
             {
                 id: 4,
                 name: "Coração Emaranhado", // Este nome virá do PHP
                 scientific: "Ceropegia woodii",
                 category: "pendente",
                 price: 35.00,
                 stock: 5,
                 image: "images/coracao-emaranhado.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Luz indireta",
                     water: "Pouca",
                     temp: "18-26°C"
                 }
             },
             {
                 id: 5,
                 name: "Lithops Mix", // Este nome virá do PHP
                 scientific: "Lithops spp.",
                 category: "rara",
                 price: 45.90,
                 stock: 2,
                 image: "images/lithops-mix.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Sol forte",
                     water: "Mínima",
                     temp: "20-28°C"
                 }
             },
             {
                 id: 6,
                 name: "Sedum Rubrotinctum", // Este nome virá do PHP
                 scientific: "Sedum × rubrotinctum",
                 category: "colorida",
                 price: 18.90,
                 stock: 15,
                 image: "images/sedum-rubrotinctum.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Sol pleno",
                     water: "Pouca",
                     temp: "16-24°C"
                 }
             },
             {
                 id: 7,
                 name: "Rhipsalis Baccifera", // Este nome virá do PHP
                 scientific: "Rhipsalis baccifera",
                 category: "pendente",
                 price: 32.50,
                 stock: 0,
                 image: "images/rhipsalis-baccifera.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Sombra",
                     water: "Moderada",
                     temp: "18-25°C"
                 }
             },
             {
                 id: 8,
                 name: "Echeveria Black Prince", // Este nome virá do PHP
                 scientific: "Echeveria 'Black Prince'",
                 category: "rara",
                 price: 38.90,
                 stock: 4,
                 image: "images/echeveria-black-prince.jpg", // Caminho da imagem do PHP
                 whatsapp: "5544999887766",
                 care: {
                     light: "Sol pleno",
                     water: "Pouca",
                     temp: "15-26°C"
                 }
             }
         ];

         // Função para gerar mensagem do WhatsApp
         function generateWhatsAppMessage(product) {
             return `Olá! Tenho interesse na suculenta *${product.name}* (${product.scientific}) no valor de R$ ${product.price.toFixed(2)}. Gostaria de mais informações!`;
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
                        ${product.image ? `<img src="${product.image}" alt="${product.name}" loading="lazy">` : ''}
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">${product.name}</h3>
                        <p class="product-scientific">${product.scientific}</p>
                        
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
                            <span class="price">R$ ${product.price.toFixed(2)}</span>
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
         renderProducts(succulents);
     </script>
 </body>

 </html>