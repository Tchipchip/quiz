<?php

namespace App\Controller;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface; 
//use Psr\Http\Message\ResponseInterface;



abstract class AbstractController
{
    protected $view;
    protected $logger;
    protected $mailer;


    public function setView(Twig $view)
    {
        $this->view = $view;
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function setMailer($mailer)
    {
        $this->mailer = $mailer;
    }
    
    
}
