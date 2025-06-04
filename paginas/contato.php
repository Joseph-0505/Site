   <style>
       /* Main Content - Layout otimizado para desktop */
       .main-content {
           max-width: 1400px;
           margin: 0 auto;
           padding: 6rem 2rem;
           display: grid;
           grid-template-columns: 1.2fr 0.8fr;
           gap: 6rem;
           align-items: start;
       }

       /* Contact Form - Design aprimorado */
       .contact-form {
           background: rgba(255, 255, 255, 0.98);
           backdrop-filter: blur(15px);
           border-radius: 25px;
           padding: 4rem;
           box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
           border: 1px solid rgba(255, 255, 255, 0.3);
           position: relative;
           overflow: hidden;
       }

       .contact-form::before {
           content: '';
           position: absolute;
           top: 0;
           left: 0;
           right: 0;
           height: 4px;
           background: linear-gradient(90deg, #4CAF50, #45a049, #2d5a3d);
       }

       .contact-form h2 {
           color: #2d5a3d !important;
           margin-bottom: 3rem;
           font-size: 2.2rem;
           text-align: center;
           font-weight: 700;
           position: relative;
       }

       .contact-form h2::after {
           content: '';
           position: absolute;
           bottom: -15px;
           left: 50%;
           transform: translateX(-50%);
           width: 60px;
           height: 3px;
           background: linear-gradient(90deg, #4CAF50, #45a049);
           border-radius: 2px;
       }

       .form-group {
           margin-bottom: 2rem;
           position: relative;
       }

       .form-group label {
           display: block;
           margin-bottom: 0.8rem;
           color: #2d5a3d;
           font-weight: 600;
           text-transform: uppercase;
           font-size: 0.85rem;
           letter-spacing: 1px;
       }

       .form-group input,
       .form-group textarea,
       .form-group select {
           width: 100%;
           padding: 1.3rem 1.5rem;
           border: 2px solid #e8e8e8;
           border-radius: 15px;
           font-size: 1.05rem;
           transition: all 0.3s ease;
           background: rgba(255, 255, 255, 0.95);
           box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
       }

       .form-group input:focus,
       .form-group textarea:focus,
       .form-group select:focus {
           outline: none;
           border-color: #4a7c59;
           box-shadow: 0 0 0 4px rgba(74, 124, 89, 0.12);
           transform: translateY(-1px);
       }

       .form-group input:hover,
       .form-group textarea:hover,
       .form-group select:hover {
           border-color: #b8d4c2;
           box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
       }

       .form-group textarea {
           height: 140px;
           resize: vertical;
           line-height: 1.6;
       }

       .form-group select {
           cursor: pointer;
       }

       .submit-btn {
           width: 100%;
           padding: 1.5rem;
           background: linear-gradient(135deg, #4CAF50, #45a049, #2d5a3d);
           color: white;
           border: none;
           border-radius: 15px;
           font-size: 1.2rem;
           font-weight: 700;
           cursor: pointer;
           transition: all 0.4s ease;
           text-transform: uppercase;
           letter-spacing: 1.5px;
           margin-top: 1rem;
           position: relative;
           overflow: hidden;
       }

       .submit-btn::before {
           content: '';
           position: absolute;
           top: 0;
           left: -100%;
           width: 100%;
           height: 100%;
           background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
           transition: left 0.6s;
       }

       .submit-btn:hover::before {
           left: 100%;
       }

       .submit-btn:hover {
           background: linear-gradient(135deg, #45a049, #3d8b40, #2d5a3d);
           transform: translateY(-3px);
           box-shadow: 0 8px 25px rgba(76, 175, 80, 0.4);
       }

       /* Contact Info - Design aprimorado */
       .contact-info {
           display: flex;
           flex-direction: column;
           gap: 2.5rem;
           position: sticky;
           top: 2rem;
       }

       .info-card {
           background: rgba(255, 255, 255, 0.98);
           backdrop-filter: blur(15px);
           border-radius: 25px;
           padding: 2.5rem;
           box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1);
           border: 1px solid rgba(255, 255, 255, 0.3);
           transition: all 0.3s ease;
           position: relative;
           overflow: hidden;
       }

       .info-card::before {
           content: '';
           position: absolute;
           top: 0;
           left: 0;
           right: 0;
           height: 3px;
           background: linear-gradient(90deg, #4CAF50, #45a049);
       }

       .info-card:hover {
           transform: translateY(-5px);
           box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
       }

       .info-card h3 {
           color: #2d5a3d;
           margin-bottom: 1.5rem;
           font-size: 1.4rem;
           display: flex;
           align-items: center;
           gap: 1rem;
           font-weight: 700;
       }

       .info-card .icon {
           width: 35px;
           height: 35px;
           background: linear-gradient(135deg, #4a7c59, #2d5a3d);
           border-radius: 12px;
           display: flex;
           align-items: center;
           justify-content: center;
           color: white;
           font-size: 1.1rem;
           box-shadow: 0 4px 15px rgba(74, 124, 89, 0.3);
       }

       .info-item {
           margin-bottom: 1.2rem;
           color: #555;
           line-height: 1.7;
           font-size: 1rem;
       }

       .info-item:last-child {
           margin-bottom: 0;
       }

       .info-item strong {
           color: #2d5a3d;
           font-weight: 600;
       }

       .schedule-item {
           display: flex;
           justify-content: space-between;
           align-items: center;
           padding: 1rem 0;
           border-bottom: 1px solid rgba(45, 90, 61, 0.12);
           font-size: 1rem;
       }

       .schedule-item:last-child {
           border-bottom: none;
       }

       .schedule-item:hover {
           background: rgba(74, 124, 89, 0.05);
           margin: 0 -1rem;
           padding: 1rem;
           border-radius: 10px;
       }

       .day {
           font-weight: 600;
           color: #2d5a3d;
       }

       .time {
           color: #666;
           font-weight: 500;
       }

       /* Responsive - Mantendo mobile otimizado */
       @media (max-width: 1024px) {
           .main-content {
               max-width: 900px;
               gap: 4rem;
               grid-template-columns: 1fr 0.8fr;
           }

           .contact-info {
               position: static;
           }
       }

       @media (max-width: 768px) {
           .main-content {
               grid-template-columns: 1fr;
               gap: 3rem;
               padding: 4rem 1.5rem;
           }

           .contact-form,
           .info-card {
               padding: 2.5rem;
           }

           .contact-form h2 {
               font-size: 1.8rem;
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
               padding: 3rem 1rem;
           }

           .contact-form,
           .info-card {
               padding: 2rem;
           }

           .contact-form h2 {
               font-size: 1.6rem;
           }

           .nav-menu {
               gap: 0.5rem;
               font-size: 0.9rem;
           }
       }

       /* Estilos para validação */
       .form-group.error input,
       .form-group.error textarea,
       .form-group.error select {
           border-color: #dc3545;
           box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
       }

       .form-group.success input,
       .form-group.success textarea,
       .form-group.success select {
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

       /* Success message aprimorada */
       .success-message {
           background: linear-gradient(135deg, #d4edda, #c3e6cb);
           border: 1px solid #b8dbc4;
           color: #155724;
           padding: 1.2rem 1.5rem;
           border-radius: 15px;
           margin-bottom: 1.5rem;
           display: none;
           font-weight: 600;
           box-shadow: 0 4px 15px rgba(21, 87, 36, 0.1);
       }

       .success-message.show {
           display: block;
           animation: slideDown 0.4s ease;
       }

       @keyframes slideDown {
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

               <div class="form-group" id="subjectGroup">
                   <label for="subject">Assunto *</label>
                   <select id="subject" name="subject" required>
                       <option value="">Selecione o assunto</option>
                       <option value="consulta-plantas">Consulta sobre Plantas</option>
                       <option value="cuidados">Dicas de Cuidados</option>
                       <option value="disponibilidade">Disponibilidade de Produtos</option>
                       <option value="visita">Agendar Visita</option>
                       <option value="outros">Outros</option>
                   </select>
                   <div class="error-message" id="subjectError"></div>
               </div>

               <div class="form-group" id="sourceGroup">
                   <label for="source">Como nos conheceu?</label>
                   <select id="source" name="source">
                       <option value="">Selecione uma opção</option>
                       <option value="indicacao">Indicação de amigos/família</option>
                       <option value="internet">Pesquisa na internet</option>
                       <option value="redes-sociais">Redes sociais</option>
                       <option value="passando-local">Passando pelo local</option>
                       <option value="outros">Outros</option>
                   </select>
                   <div class="error-message" id="sourceError"></div>
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
                   Horário de Funcionamento
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
                   <span class="time">8h00 às 18h00</span>
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
   </main>

   <script>
       // Elementos do formulário
       const form = document.getElementById('contactForm');
       const nameInput = document.getElementById('name');
       const emailInput = document.getElementById('email');
       const phoneInput = document.getElementById('phone');
       const subjectInput = document.getElementById('subject');
       const sourceInput = document.getElementById('source');
       const messageInput = document.getElementById('message');
       const submitBtn = document.getElementById('submitBtn');
       const btnText = document.getElementById('btnText');
       const successMessage = document.getElementById('successMessage');

       // Elementos de grupo para aplicar estilos
       const nameGroup = document.getElementById('nameGroup');
       const emailGroup = document.getElementById('emailGroup');
       const phoneGroup = document.getElementById('phoneGroup');
       const subjectGroup = document.getElementById('subjectGroup');
       const sourceGroup = document.getElementById('sourceGroup');
       const messageGroup = document.getElementById('messageGroup');

       // Elementos de erro
       const nameError = document.getElementById('nameError');
       const emailError = document.getElementById('emailError');
       const phoneError = document.getElementById('phoneError');
       const subjectError = document.getElementById('subjectError');
       const sourceError = document.getElementById('sourceError');
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

       function validateSubject(subject) {
           if (!subject.trim()) {
               return 'Por favor, selecione um assunto';
           }
           return '';
       }

       function validateSource(source) {
           // Campo opcional, não precisa de validação obrigatória
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

       subjectInput.addEventListener('change', function() {
           const error = validateSubject(this.value);
           if (error) {
               showError(subjectGroup, subjectError, error);
           } else if (this.value.trim()) {
               showSuccess(subjectGroup, subjectError);
           } else {
               clearValidation(subjectGroup, subjectError);
           }
       });

       sourceInput.addEventListener('change', function() {
           if (this.value.trim()) {
               showSuccess(sourceGroup, sourceError);
           } else {
               clearValidation(sourceGroup, sourceError);
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
           const subjectErr = validateSubject(subjectInput.value);
           const sourceErr = validateSource(sourceInput.value);
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

           if (subjectErr) {
               showError(subjectGroup, subjectError, subjectErr);
           } else {
               showSuccess(subjectGroup, subjectError);
           }

           if (sourceInput.value.trim()) {
               showSuccess(sourceGroup, sourceError);
           }

           if (messageErr) {
               showError(messageGroup, messageError, messageErr);
           } else {
               showSuccess(messageGroup, messageError);
           }

           // Se não houver erros, simular envio
           if (!nameErr && !emailErr && !phoneErr && !subjectErr && !messageErr) {
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
                   clearValidation(subjectGroup, subjectError);
                   clearValidation(sourceGroup, sourceError);
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
       [nameInput, emailInput, phoneInput, subjectInput, sourceInput, messageInput].forEach(input => {
           input.addEventListener('input', () => {
               successMessage.classList.remove('show');
           });
           input.addEventListener('change', () => {
               successMessage.classList.remove('show');
           });
       });
   </script>