<?php
// cms/cms.php - Sistema CMS básico
class SimpleCMS {
    private $pages = [];
    
    public function __construct() {
        // Registrar páginas do site (hardcoded conforme solicitado)
        $this->registerPage('home', 'Bem-vindo à Nexxus Tech', 'index.php');
        $this->registerPage('services', 'Nossos Serviços', 'services.php');
        $this->registerPage('about', 'Quem Somos', 'about.php');
        $this->registerPage('contact', 'Fale Conosco', 'contact.php');
    }
    
    public function registerPage($slug, $title, $file) {
        $this->pages[$slug] = [
            'title' => $title,
            'file' => $file,
            'slug' => $slug
        ];
    }
    
    public function getPages() {
        return $this->pages;
    }
    
    public function getPage($slug) {
        return isset($this->pages[$slug]) ? $this->pages[$slug] : null;
    }
    
    public function renderPage($slug) {
        $page = $this->getPage($slug);
        if ($page && file_exists($page['file'])) {
            include $page['file'];
        } else {
            $this->render404();
        }
    }
    
    private function render404() {
        http_response_code(404);
        echo "<h1>Página não encontrada</h1>";
        echo "<p>A página solicitada não foi encontrada.</p>";
        echo "<a href='index.php'>Voltar ao início</a>";
    }
    
    public function getCurrentPage() {
        $currentFile = basename($_SERVER['PHP_SELF']);
        foreach ($this->pages as $page) {
            if ($page['file'] === $currentFile) {
                return $page;
            }
        }
        return null;
    }
}

// Instanciar o CMS
$cms = new SimpleCMS();
?>

