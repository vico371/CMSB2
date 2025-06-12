<?php 
// navigation.php
global $cms;
$currentFile = basename($_SERVER['PHP_SELF']);
?>
    <nav>
        <ul>
            <li><a href="index.php" <?php echo ($currentFile == 'index.php') ? 'class="active"' : ''; ?>>Home</a></li>
            <li><a href="services.php" <?php echo ($currentFile == 'services.php') ? 'class="active"' : ''; ?>>Serviços</a></li>
            <li><a href="about.php" <?php echo ($currentFile == 'about.php') ? 'class="active"' : ''; ?>>Sobre Nós</a></li>
            <li><a href="contact.php" <?php echo ($currentFile == 'contact.php') ? 'class="active"' : ''; ?>>Contato</a></li>
        </ul>
    </nav>


