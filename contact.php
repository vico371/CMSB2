<?php
// contact.php - Página de Contato
include 'cms/includes/header.php';
include 'cms/includes/navigation.php';
?>

<div class="container">
    <div class="contact-section">
        <h2>Fale Conosco</h2>
        
        <p>Tem dúvidas ou quer solicitar um orçamento? Preencha o formulário abaixo e entraremos em contato com você.</p>
        
        <img src="assets/images/contact_illustration.jpg" alt="Entre em contato" style="width: 100%; max-width: 400px; margin: 20px 0; border-radius: 5px;">
        
        <form class="contact-form" method="post" action="#">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>

<?php include 'cms/includes/footer.php'; ?>

