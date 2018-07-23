<?php

namespace App\Controller;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


class ContactController extends AbstractController {
    
         

    public function redirect($response, $mailer) 
    {
        return $response->withStatus(302)->withHeader('Location', $path->pathFor($mailer));
    }
    
    public function mailer(SwiftMailer $mailer)    
    {  
        return $this->di->mailer;  
    }
    
    
    public function getContact ($request, $response)
    {  
        return $this->view->render($response, 'contact.html');
    }
    
    public function postContact ($request, $response)    
    {
       //var_dump($request->getParams());
       //die();
      
        //var_dump($this->mailer); 
        //die();
    
       //return $this->view->render($response, 'contact.html');
   
        
        // Create a message
        
        $message = (new Swift_Message('Message de contact'))
            ->setFrom([$request->getParam('email') => $request->getParam('name')])
            ->setTo('xxxxx@gmail.com')
            ->setBody("Un email vous a été envoyé : {$request->getParam('content')}")
        ;
        

        // Send the message
        //$this->mailer->send($message);
       $result = $mailer->send($message);
        
        //return $this->redirect($response, 'contact');
        
    }
      
}

    


