<title>Contato - Viveiro do Taide</title>
<style>
    /* Animação de folhas flutuantes */
    .floating-leaves {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .leaf {
        position: absolute;
        background: rgba(139, 195, 74, 0.6);
        width: 25px;
        height: 25px;
        border-radius: 0 100% 0 100%;
        animation: float 20s infinite linear;
    }

    .leaf:nth-child(2n) {
        background: rgba(76, 175, 80, 0.5);
        animation-duration: 25s;
    }

    .leaf:nth-child(3n) {
        background: rgba(46, 125, 50, 0.4);
        animation-duration: 18s;
    }

    @keyframes float {
        0% {
            transform: translateY(100vh) translateX(-100px) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 0.8;
        }

        90% {
            opacity: 0.8;
        }

        100% {
            transform: translateY(-100px) translateX(100px) rotate(360deg);
            opacity: 0;
        }
    }

    .contact-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(15px);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        width: 100%;
        max-width: 600px;
        position: relative;
        z-index: 10;

    }

    .header {
        text-align: center;
        margin-bottom: 40px;
    }

    .header-icon {
        font-size: 70px;
        color: #4CAF50;
        margin-bottom: 15px;
        display: block;
        animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-10px);
        }

        60% {
            transform: translateY(-5px);
        }
    }

    .header h1 {
        color: #2E7D32;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .header p {
        color: #666;
        font-size: 16px;
        line-height: 1.5;
    }

    .contact-form {
        display: grid;
        gap: 25px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        position: relative;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        font-size: 14px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-wrapper input,
    .input-wrapper textarea,
    .input-wrapper select {
        width: 100%;
        padding: 15px 20px 15px 50px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 16px;
        font-family: inherit;
        transition: all 0.3s ease;
        background: #fff;
        resize: none;
    }

    .input-wrapper textarea {
        min-height: 120px;
        resize: vertical;
    }

    .input-wrapper input:focus,
    .input-wrapper textarea:focus,
    .input-wrapper select:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.1);
    }

    .input-icon {
        position: absolute;
        left: 18px;
        top: 17px;
        color: #4CAF50;
        font-size: 18px;
        z-index: 2;
    }

    .textarea-icon {
        top: 17px;
    }

    .contact-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        margin: 30px 0;
        padding: 25px;
        background: rgba(76, 175, 80, 0.1);
        border-radius: 16px;
        border: 1px solid rgba(76, 175, 80, 0.2);
    }

    .contact-item {
        text-align: center;
        padding: 15px;
    }

    .contact-item-icon {
        font-size: 24px;
        color: #4CAF50;
        margin-bottom: 8px;
        display: block;
    }

    .contact-item h3 {
        color: #2E7D32;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .contact-item p {
        color: #666;
        font-size: 13px;
        line-height: 1.4;
    }

    .submit-btn {
        width: 100%;
        padding: 18px;
        background: linear-gradient(135deg, #4CAF50, #45a049);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        overflow: hidden;
    }

    .submit-btn:hover {
        background: linear-gradient(135deg, #45a049, #388e3c);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(76, 175, 80, 0.3);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    /* Responsivo */
    @media (max-width: 768px) {
        .contact-container {
            padding: 30px 20px;
            margin: 10px;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .header h1 {
            font-size: 28px;
        }

        .header-icon {
            font-size: 60px;
        }

        .contact-info {
            grid-template-columns: 1fr;
            gap: 15px;
            padding: 20px;
        }
    }

    /* Animação de sucesso */
    .success-message {
        display: none;
        text-align: center;
        padding: 20px;
        background: rgba(76, 175, 80, 0.1);
        border: 2px solid #4CAF50;
        border-radius: 12px;
        color: #2E7D32;
        font-weight: 600;
        margin-top: 20px;
        animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>


<div class="floating-leaves">
    <!-- Folhas serão criadas via JavaScript -->
</div>

<div class="contact-container">
    <div class="header">
        <span class="header-icon">🌿</span>
        <h1>Entre em Contato</h1>
        <p>Tem alguma dúvida sobre plantas? Precisa de ajuda para cuidar do seu jardim? <br>Estamos aqui para ajudar!</p>
    </div>

    <form class="contact-form" id="contactForm">
        <div class="form-row">
            <div class="form-group">
                <label for="firstName">Nome *</label>
                <div class="input-wrapper">
                    <span class="input-icon">👤</span>
                    <input type="text" id="firstName" name="firstName" required placeholder="Seu nome">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName">Sobrenome *</label>
                <div class="input-wrapper">
                    <span class="input-icon">👤</span>
                    <input type="text" id="lastName" name="lastName" required placeholder="Seu sobrenome">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email">E-mail *</label>
                <div class="input-wrapper">
                    <span class="input-icon">📧</span>
                    <input type="email" id="email" name="email" required placeholder="seu@email.com">
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <div class="input-wrapper">
                    <span class="input-icon">📱</span>
                    <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999">
                </div>
            </div>
        </div>

        <div class="form-group full-width">
            <label for="subject">Assunto *</label>
            <div class="input-wrapper">
                <span class="input-icon">🏷️</span>
                <select id="subject" name="subject" required>
                    <option value="">Selecione um assunto</option>
                    <option value="cuidados">Cuidados com Plantas</option>
                    <option value="identificacao">Identificação de Plantas</option>
                    <option value="pragas">Pragas e Doenças</option>
                    <option value="jardinagem">Dicas de Jardinagem</option>
                    <option value="compra">Compra de Plantas</option>
                    <option value="outros">Outros</option>
                </select>
            </div>
        </div>

        <div class="form-group full-width">
            <label for="message">Mensagem *</label>
            <div class="input-wrapper">
                <span class="input-icon textarea-icon">💬</span>
                <textarea id="message" name="message" required placeholder="Conte-nos como podemos ajudar você..."></textarea>
            </div>
        </div>

        <div class="contact-info">
            <div class="contact-item">
                <h3>📱 WhatsApp</h3>
                <p>(44) 99801-4519</p>
            </div>
            <div class="contact-item">
                <h3>🕒 Horário</h3>
                <p>Seg-Sex: 7h às 18h<br>Sáb-Dom: 7h às 18h</p>
            </div>
        </div>

        <button type="submit" class="submit-btn">
            Enviar Mensagem
        </button>

        <div class="success-message" id="successMessage">
            ✅ Mensagem enviada com sucesso! Entraremos em contato em breve.
        </div>
    </form>
</div>

<script>
    // Criar folhas flutuantes
    function createFloatingLeaves() {
        const leavesContainer = document.querySelector('.floating-leaves');
        const numberOfLeaves = 15;

        for (let i = 0; i < numberOfLeaves; i++) {
            const leaf = document.createElement('div');
            leaf.className = 'leaf';
            leaf.style.left = Math.random() * 100 + '%';
            leaf.style.animationDelay = Math.random() * 20 + 's';
            leaf.style.animationDuration = (15 + Math.random() * 10) + 's';
            leavesContainer.appendChild(leaf);
        }
    }

    // Manipular envio do formulário
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Simular envio (aqui você integraria com seu backend)
        const submitBtn = document.querySelector('.submit-btn');
        const successMessage = document.getElementById('successMessage');

        submitBtn.textContent = 'Enviando...';
        submitBtn.disabled = true;

        setTimeout(() => {
            submitBtn.textContent = 'Enviar Mensagem';
            submitBtn.disabled = false;
            successMessage.style.display = 'block';

            // Limpar formulário
            this.reset();

            // Esconder mensagem após 5 segundos
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
        }, 2000);
    });

    // Formatar telefone
    document.getElementById('phone').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{2})(\d)/, '($1) $2');
        value = value.replace(/(\d{5})(\d)/, '$1-$2');
        e.target.value = value;
    });

    // Inicializar
    createFloatingLeaves();
</script>