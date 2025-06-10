  <style>
      :root {
          --primary: #c0ac9c;
          --secondary: #F5F0E6;
          --clear: #3bdb36;
          --font-titulo: 'Cormorant Garamond 600';
          --font-texto: 'Lora', serif;
          --cor-titulo: #7e6757;
      }


      .section {
          padding: 80px 0;
      }

      .section-title {
          font-family: var(--font-titulo) !important;
          font-size: 55px !important;
          color: var(--cor-titulo);
          font-weight: 600;
          text-align: center;
          margin-bottom: 3rem;
          position: relative;
      }

      .section-title::after {
          content: '';
          position: absolute;
          bottom: -10px;
          left: 50%;
          transform: translateX(-50%);
          width: 80px;
          height: 3px;
          background: var(--clear);
          border-radius: 2px;
      }

      .story-grid {
          display: grid;
          grid-template-columns: 1fr 1fr;
          gap: 60px;
          align-items: center;
          margin-bottom: 60px;
      }

      .story-text {
          padding: 20px;
      }

      .story-text h3 {
          font-family: var(--font-titulo) !important;
          font-size: 45px;
          font-weight: 600;
          color: var(--cor-titulo);
          margin-bottom: 1.5rem;
      }

      .story-text p {
          font-family: var(--font-texto);
          font-size: 20px;
          line-height: 1.8;
          font-weight: 500;
          margin-bottom: 1.5rem;
          color: #555;
      }

      .image-container {
          position: relative;
          border-radius: 20px;
          overflow: hidden;
          box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
          transition: transform 0.3s ease;
      }

      .image-container:hover {
          transform: translateY(-10px);
      }

      .image-container img {
          width: 100%;
          height: 400px;
          object-fit: cover;
          display: block;
      }

      .image-overlay {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background: linear-gradient(45deg, rgba(192, 172, 156, 0.8), rgba(126, 103, 87, 0.6));
          opacity: 0;
          transition: opacity 0.3s ease;
          display: flex;
          align-items: center;
          justify-content: center;
          color: white;
          font-size: 1.2rem;
          text-align: center;
          padding: 20px;
      }

      .image-container:hover .image-overlay {
          opacity: 1;
      }

      .values-section {
          background: white;
          border-radius: 30px;
          margin: 40px 0;
          padding: 60px 40px;
          box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      }

      .values-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
          gap: 40px;
          margin-top: 40px;
      }

      .value-card {
          text-align: center;
          padding: 30px 20px;
          border-radius: 15px;
          background: var(--secondary);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          border: 2px solid transparent;
      }

      .value-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 25px rgba(192, 172, 156, 0.3);
          border-color: var(--primary);
      }

      .value-icon {
          width: 80px;
          height: 80px;
          background: var(--clear);
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          margin: 0 auto 20px;
          font-size: 2rem;
          color: white;
      }

      .value-card h4 {
          font-family: var(--font-titulo) !important;
          font-size: 25px;
          font-weight: 600;
          color: var(--cor-titulo);
          margin-bottom: 15px;
      }

      .value-card p {
          color: #666;
          line-height: 1.6;
      }

      .cta-section {
          background: white;
          color: var(--cor-titulo);
          text-align: center;
          padding: 80px 40px;
          border-radius: 25px;
          margin: 60px 0;
      }

      .cta-title {
          font-family: var(--font-titulo);
          font-size: 55px;
          color: var(--cor-titulo) !important;
          font-weight: 600;
          margin-bottom: 1rem;
      }

      .cta-text {
          font-size: 1.2rem;
          margin-bottom: 2rem;
          opacity: 0.9;
      }

      .cta-button {
          display: inline-block;
          background: var(--clear);
          color: var(--secondary);
          padding: 15px 40px;
          border-radius: 100px !important;
          text-decoration: none;
          font-weight: 600;
          font-size: 30px;
          transition: all 0.3s ease;
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      }

      .cta-button:hover {
          transform: translateY(-3px);
          box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
          background: var(--clear);
      }

      .stats-section {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
          gap: 30px;
          margin: 60px 0;
      }

      .stat-card {
          text-align: center;
          padding: 40px 20px;
          background: white;
          border-radius: 20px;
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
          transition: transform 0.3s ease;
      }

      .stat-card:hover {
          transform: translateY(-8px);
      }

      .stat-number {
          font-family: var(--font-titulo);
          font-size: 3rem;
          font-weight: 700;
          color: var(--clear);
          display: block;
      }

      .stat-label {
          color: var(--cor-titulo);
          font-weight: 600;
          margin-top: 10px;
      }

      @media (max-width: 768px) {
          .hero-title {
              font-size: 2.5rem;
          }

          .hero-subtitle {
              font-size: 1.1rem;
          }

          .story-grid {
              grid-template-columns: 1fr;
              gap: 40px;
          }

          .section-title {
              font-size: 2.2rem;
          }

          .values-grid {
              grid-template-columns: 1fr;
          }

          .hero-section {
              padding: 60px 0;
          }

          .section {
              padding: 60px 0;
          }

          .values-section {
              padding: 40px 20px;
              margin: 20px 0;
          }

          .cta-section {
              padding: 60px 20px;
              margin: 40px 0;
          }

          .cta-title {
              font-size: 2rem;
          }
      }
  </style>
  </head>




  <section class="section">
      <div class="container">
          <h2 class="section-title">Conheça o Viveiro do Taide</h2>

          <div class="story-grid">
              <div class="story-text">
                  <h3>Nossa Paixão</h3>
                  <p>Somos uma família apaixonada pela natureza e pelo cultivo de plantas desde 2018. Nossa jornada começou com um pequeno jardim e cresceu para se tornar um viveiro especializado em suculentas, cactos e paisagismo sustentável.</p>
                  <p>Cada planta que cultivamos carrega nosso amor e dedicação, transformando espaços comuns em verdadeiros oásis de tranquilidade e beleza natural.</p>
              </div>
              <div class="image-container">
                  <img src="imagens/taide.jpeg" viewBox='0 0 600 400' %3E%3Crect fill='%23c0ac9c' width='600' height='400' x='300' y='200' text-anchor='middle' dominant-baseline='middle' fill='white' font-size='24' font-family='serif' %3ENosso Fundador%3C/text%3E%3C/svg%3E" alt="Nosso fundador no jardim">
                  <div class="image-overlay">
                      <p>Nosso Fundador</p>
                  </div>
              </div>
          </div>

          <div class="story-grid">
              <div class="image-container">
                  <img src="imagens/quemsomos.png" viewBox='0 0 600 400' %3E%3Crect fill='%233bdb36' width='600' height='400' x='300' y='200' text-anchor='middle' dominant-baseline='middle' fill='white' font-size='24' font-family='serif' %3ENosso Viveiro%3C/text%3E%3C/svg%3E" alt="Nosso viveiro de plantas">
                  <div class="image-overlay">
                      <p>Espaço dedicado ao cultivo e cuidado de milhares de plantas especiais</p>
                  </div>
              </div>
              <div class="story-text">
                  <h3>Nossa Estrutura</h3>
                  <p>Seja para decorar sua casa, escritório ou jardim, temos opções para todos os gostos e necessidades. Explore nossa seleção online e descubra a planta perfeita para você.</p>
                  <p>Trabalhamos com espécies nativas e exóticas, sempre priorizando práticas sustentáveis e o respeito ao meio ambiente em todos os nossos processos.</p>
              </div>
          </div>
      </div>
  </section>

  <div class="container">
      <section class="values-section">
          <h2 class="section-title">Nossos Valores</h2>
          <div class="values-grid">
              <div class="value-card">
                  <div class="value-icon">🌱</div>
                  <h4>Sustentabilidade</h4>
                  <p>Comprometidos com práticas ecológicas e o cultivo responsável, respeitando o meio ambiente em cada etapa do nosso trabalho.</p>
              </div>
              <div class="value-card">
                  <div class="value-icon">❤️</div>
                  <h4>Paixão</h4>
                  <p>Cada planta é tratada com amor e dedicação. Nossa paixão pela jardinagem se reflete na qualidade de tudo que oferecemos.</p>
              </div>
              <div class="value-card">
                  <div class="value-icon">🎯</div>
                  <h4>Qualidade</h4>
                  <p>Selecionamos apenas as melhores mudas e oferecemos produtos de alta qualidade para garantir o sucesso dos seus projetos.</p>
              </div>
          </div>
      </section>

      <section class="cta-section">
          <h2 class="cta-title">Vamos Cultivar Juntos?</h2>
          <p class="cta-text">Entre em contato conosco e descubra como podemos transformar seu espaço em um jardim dos sonhos</p>
          <a href="contato" class="cta-button">Fale Conosco</a>
      </section>
  </div>