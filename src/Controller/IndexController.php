<?php
declare(strict_types = 1);

namespace Template\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment as Twig;

class IndexController {
    private Twig $twig;

    public function setTwig(Twig $environment): void {
        $this->twig = $environment;
    }

    public function index() {
        return new Response($this->twig->render('@TemplateHome/index/index.html.twig'));
    }
}
