   <style>
       /* Main Content - Adicionando espaçamento */
       .main-content {
           max-width: 1200px;
           margin: 0 auto;
           padding: 4rem 2rem;
           display: grid;
           grid-template-columns: 1fr 1fr;
           gap: 4rem;
           align-items: start;
       }

       /* Contact Form */
       .contact-form {
           background: rgba(255, 255, 255, 0.95);
           backdrop-filter: blur(10px);
           border-radius: 20px;
           padding: 3rem;
           box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
           border: 1px solid rgba(255, 255, 255, 0.2);
       }

       .contact-form h2 {
           color: #2d5a3d !important;
           margin-bottom: 2rem;
           font-size: 1.8rem;
           text-align: center;
       }

       .form-group {
           margin-bottom: 1.5rem;
       }

       .form-group label {
           display: block;
           margin-bottom: 0.5rem;
           color: #2d5a3d;
           font-weight: 500;
           text-transform: uppercase;
           font-size: 0.9rem;
           letter-spacing: 0.5px;
       }

       .form-group input,
       .form-group textarea {
           width: 100%;
           padding: 1rem;
           border: 2px solid #e0e0e0;
           border-radius: 10px;
           font-size: 1rem;
           transition: all 0.3s ease;
           background: rgba(255, 255, 255, 0.9);
       }

       .form-group input:focus,
       .form-group textarea:focus {
           outline: none;
           border-color: #4a7c59;
           box-shadow: 0 0 0 3px rgba(74, 124, 89, 0.1);
       }

       .form-group textarea {
           height: 120px;
           resize: vertical;
       }

       .submit-btn {
           width: 100%;
           padding: 1.2rem;
           background: linear-gradient(45deg, #4CAF50, #45a049);
           color: white;
           border: none;
           border-radius: 10px;
           font-size: 1.1rem;
           font-weight: bold;
           cursor: pointer;
           transition: all 0.3s ease;
           text-transform: uppercase;
           letter-spacing: 1px;
       }

       .submit-btn:hover {
           background: linear-gradient(45deg, #45a049, #3d8b40);
           transform: translateY(-2px);
           box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
       }

       /* Contact Info */
       .contact-info {
           display: flex;
           flex-direction: column;
           gap: 2rem;
       }

       .info-card {
           background: rgba(255, 255, 255, 0.95);
           backdrop-filter: blur(10px);
           border-radius: 20px;
           padding: 2rem;
           box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
           border: 1px solid rgba(255, 255, 255, 0.2);
       }

       .info-card h3 {
           color: #2d5a3d;
           margin-bottom: 1rem;
           font-size: 1.5rem;
           display: flex;
           align-items: center;
           gap: 0.5rem;
       }

       .info-card .icon {
           width: 30px;
           height: 30px;
           background: linear-gradient(45deg, #4a7c59, #2d5a3d);
           border-radius: 50%;
           display: flex;
           align-items: center;
           justify-content: center;
           color: white;
           font-size: 0.9rem;
       }

       .info-item {
           margin-bottom: 1rem;
           color: #555;
           line-height: 1.6;
       }

       .info-item:last-child {
           margin-bottom: 0;
       }

       .schedule-item {
           display: flex;
           justify-content: space-between;
           align-items: center;
           padding: 0.5rem 0;
           border-bottom: 1px solid rgba(45, 90, 61, 0.1);
       }

       .schedule-item:last-child {
           border-bottom: none;
       }

       .day {
           font-weight: 500;
           color: #2d5a3d;
       }

       .time {
           color: #666;
       }

       /* Responsive */
       @media (max-width: 768px) {
           .main-content {
               grid-template-columns: 1fr;
               gap: 2rem;
               padding: 3rem 1rem;
               /* Mantendo espaçamento em mobile */
           }

           .contact-form,
           .info-card {
               padding: 2rem;
           }

           .nav-container {
               padding: 0 1rem;
           }

           .nav-menu {
               gap: 1rem;
           }
       }

       @media (max-width: 480px) {
           .main-content {
               padding: 2rem 1rem;
               /* Espaçamento menor em telas muito pequenas */
           }

           .contact-form,
           .info-card {
               padding: 1.5rem;
           }

           .nav-menu {
               gap: 0.5rem;
               font-size: 0.9rem;
           }
       }

       /* Estilos para validação */
       .form-group.error input,
       .form-group.error textarea {
           border-color: #dc3545;
           box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
       }

       .form-group.success input,
       .form-group.success textarea {
           border-color: #28a745;
           box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
       }

       .error-message {
           color: #dc3545;
           font-size: 0.85rem;
           margin-top: 0.5rem;
           display: none;
       }

       .error-message.show {
           display: block;
       }

       .submit-btn:disabled {
           background: #ccc;
           cursor: not-allowed;
           transform: none;
       }

       .submit-btn:disabled:hover {
           background: #ccc;
           transform: none;
           box-shadow: none;
       }

       /* Animação de loading */
       .loading {
           position: relative;
           overflow: hidden;
       }

       .loading::after {
           content: '';
           position: absolute;
           top: 0;
           left: -100%;
           width: 100%;
           height: 100%;
           background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
           animation: loading 1.5s infinite;
       }

       @keyframes loading {
           0% {
               left: -100%;
           }

           100% {
               left: 100%;
           }
       }

       /* Success message */
       .success-message {
           background: #d4edda;
           border: 1px solid #c3e6cb;
           color: #155724;
           padding: 1rem;
           border-radius: 10px;
           margin-bottom: 1rem;
           display: none;
       }

       .success-message.show {
           display: block;
       }
   </style>

   <!-- Main Content -->
   <main class="main-content">
       <!-- Contact Form -->
       <section class="contact-form">
           <h2>Entre em Contato</h2>

           <div class="success-message" id="successMessage">
               ✅ Mensagem enviada com sucesso! Entraremos em contato em breve.
           </div>

           <form id="contactForm" novalidate>
               <div class="form-group" id="nameGroup">
                   <label for="name">Nome *</label>
                   <input type="text" id="name" name="name" required>
                   <div class="error-message" id="nameError"></div>
               </div>

               <div class="form-group" id="emailGroup">
                   <label for="email">E-mail *</label>
                   <input type="email" id="email" name="email" required>
                   <div class="error-message" id="emailError"></div>
               </div>

               <div class="form-group" id="phoneGroup">
                   <label for="phone">Telefone</label>
                   <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999">
                   <div class="error-message" id="phoneError"></div>
               </div>

               <div class="form-group" id="messageGroup">
                   <label for="message">Mensagem *</label>
                   <textarea id="message" name="message" placeholder="Conte-nos sobre seus gostos de plantas..." required></textarea>
                   <div class="error-message" id="messageError"></div>
               </div>

               <button type="submit" class="submit-btn" id="submitBtn">
                   <span id="btnText">Enviar Mensagem</span>
               </button>
           </form>
       </section>

       <!-- Contact Info -->
       <section class="contact-info">
           <div class="info-card">
               <h3>
                   <span class="icon">📍</span>
                   Viveiro do Taide
               </h3>
               <div class="info-item">
                   <strong>📍 Localização</strong><br>
                   Rua Principal<br>
                   Vila Rural Alto Alegre<br>
                   Juranda - PR
               </div>
           </div>

           <div class="info-card">
               <h3>
                   <span class="icon">🕒</span>
                   Funcionamento
               </h3>
               <div class="schedule-item">
                   <span class="day">Segunda à Sexta</span>
                   <span class="time">7h00 às 18h00</span>
               </div>
               <div class="schedule-item">
                   <span class="day">Sábados</span>
                   <span class="time">7h00 às 18h00</span>
               </div>
               <div class="schedule-item">
                   <span class="day">Domingos</span>
                   <span class="time">7h00 às 18h00</span>
               </div>
           </div>

           <div class="info-card">
               <h3>
                   <span class="icon">🌿</span>
                   Especialidades
               </h3>
               <div class="info-item">
                   Plantas ornamentais, Orquídeas,<br>
                   Suculentas, Cactos e Vasos
               </div>
           </div>
       </section>
       <script>
           // Elementos do formulário
           const form = document.getElementById('contactForm');
           const nameInput = document.getElementById('name');
           const emailInput = document.getElementById('email');
           const phoneInput = document.getElementById('phone');
           const messageInput = document.getElementById('message');
           const submitBtn = document.getElementById('submitBtn');
           const btnText = document.getElementById('btnText');
           const successMessage = document.getElementById('successMessage');

           // Elementos de grupo para aplicar estilos
           const nameGroup = document.getElementById('nameGroup');
           const emailGroup = document.getElementById('emailGroup');
           const phoneGroup = document.getElementById('phoneGroup');
           const messageGroup = document.getElementById('messageGroup');

           // Elementos de erro
           const nameError = document.getElementById('nameError');
           const emailError = document.getElementById('emailError');
           const phoneError = document.getElementById('phoneError');
           const messageError = document.getElementById('messageError');

           // Funções de validação
           function validateName(name) {
               if (!name.trim()) {
                   return 'Nome é obrigatório';
               }
               if (name.trim().length < 2) {
                   return 'Nome deve ter pelo menos 2 caracteres';
               }
               if (!/^[a-zA-ZÀ-ÿ\s]+$/.test(name.trim())) {
                   return 'Nome deve conter apenas letras e espaços';
               }
               return '';
           }

           function validateEmail(email) {
               if (!email.trim()) {
                   return 'E-mail é obrigatório';
               }
               const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
               if (!emailRegex.test(email)) {
                   return 'Por favor, insira um e-mail válido';
               }
               return '';
           }

           function validatePhone(phone) {
               if (phone.trim() && !/^\(\d{2}\)\s\d{4,5}-\d{4}$/.test(phone)) {
                   return 'Formato: (11) 99999-9999';
               }
               return '';
           }

           function validateMessage(message) {
               if (!message.trim()) {
                   return 'Mensagem é obrigatória';
               }
               if (message.trim().length < 10) {
                   return 'Mensagem deve ter pelo menos 10 caracteres';
               }
               if (message.trim().length > 500) {
                   return 'Mensagem deve ter no máximo 500 caracteres';
               }
               return '';
           }

           // Função para mostrar erro
           function showError(group, errorElement, message) {
               group.classList.remove('success');
               group.classList.add('error');
               errorElement.textContent = message;
               errorElement.classList.add('show');
           }

           // Função para mostrar sucesso
           function showSuccess(group, errorElement) {
               group.classList.remove('error');
               group.classList.add('success');
               errorElement.textContent = '';
               errorElement.classList.remove('show');
           }

           // Função para limpar validação
           function clearValidation(group, errorElement) {
               group.classList.remove('error', 'success');
               errorElement.textContent = '';
               errorElement.classList.remove('show');
           }

           // Máscara para telefone
           function maskPhone(value) {
               value = value.replace(/\D/g, '');
               value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
               value = value.replace(/(\d)(\d{4})$/, '$1-$2');
               return value;
           }

           // Event listeners para validação em tempo real
           nameInput.addEventListener('input', function() {
               const error = validateName(this.value);
               if (error) {
                   showError(nameGroup, nameError, error);
               } else if (this.value.trim()) {
                   showSuccess(nameGroup, nameError);
               } else {
                   clearValidation(nameGroup, nameError);
               }
           });

           emailInput.addEventListener('input', function() {
               const error = validateEmail(this.value);
               if (error) {
                   showError(emailGroup, emailError, error);
               } else if (this.value.trim()) {
                   showSuccess(emailGroup, emailError);
               } else {
                   clearValidation(emailGroup, emailError);
               }
           });

           phoneInput.addEventListener('input', function() {
               this.value = maskPhone(this.value);
               const error = validatePhone(this.value);
               if (error) {
                   showError(phoneGroup, phoneError, error);
               } else if (this.value.trim()) {
                   showSuccess(phoneGroup, phoneError);
               } else {
                   clearValidation(phoneGroup, phoneError);
               }
           });

           messageInput.addEventListener('input', function() {
               const error = validateMessage(this.value);
               if (error) {
                   showError(messageGroup, messageError, error);
               } else if (this.value.trim()) {
                   showSuccess(messageGroup, messageError);
               } else {
                   clearValidation(messageGroup, messageError);
               }
           });

           // Validação no envio do formulário
           form.addEventListener('submit', function(e) {
               e.preventDefault();

               // Validar todos os campos
               const nameErr = validateName(nameInput.value);
               const emailErr = validateEmail(emailInput.value);
               const phoneErr = validatePhone(phoneInput.value);
               const messageErr = validateMessage(messageInput.value);

               // Mostrar erros se houver
               if (nameErr) {
                   showError(nameGroup, nameError, nameErr);
               } else {
                   showSuccess(nameGroup, nameError);
               }

               if (emailErr) {
                   showError(emailGroup, emailError, emailErr);
               } else {
                   showSuccess(emailGroup, emailError);
               }

               if (phoneErr) {
                   showError(phoneGroup, phoneError, phoneErr);
               } else if (phoneInput.value.trim()) {
                   showSuccess(phoneGroup, phoneError);
               }

               if (messageErr) {
                   showError(messageGroup, messageError, messageErr);
               } else {
                   showSuccess(messageGroup, messageError);
               }

               // Se não houver erros, simular envio
               if (!nameErr && !emailErr && !phoneErr && !messageErr) {
                   // Desabilitar botão e mostrar loading
                   submitBtn.disabled = true;
                   submitBtn.classList.add('loading');
                   btnText.textContent = 'Enviando...';

                   // Simular envio (substituir por requisição real)
                   setTimeout(() => {
                       // Mostrar mensagem de sucesso
                       successMessage.classList.add('show');

                       // Limpar formulário
                       form.reset();

                       // Limpar validações
                       clearValidation(nameGroup, nameError);
                       clearValidation(emailGroup, emailError);
                       clearValidation(phoneGroup, phoneError);
                       clearValidation(messageGroup, messageError);

                       // Restaurar botão
                       submitBtn.disabled = false;
                       submitBtn.classList.remove('loading');
                       btnText.textContent = 'Enviar Mensagem';

                       // Ocultar mensagem de sucesso após 5 segundos
                       setTimeout(() => {
                           successMessage.classList.remove('show');
                       }, 5000);

                   }, 2000);
               }
           });

           // Limpar mensagem de sucesso ao começar a digitar
           [nameInput, emailInput, phoneInput, messageInput].forEach(input => {
               input.addEventListener('input', () => {
                   successMessage.classList.remove('show');
               });
           });
       </script>