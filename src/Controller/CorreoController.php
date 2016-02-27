<?php
namespace App\Controller;

use Cake\Mailer\Email;

class CorreoController  extends AppController{
    
    public function smtp() {
        $email = new Email('default'); // Seleccionar el profile a usar
        $email->from(['julioaroni@gmail.com' => 'Tienda Online'])
            ->to('julioaroni@gmail.com')
            ->subject('Correo desde CakePHP 3')
            ->send('Contenido del correo ...');
        
        echo 'Correo enviado';
        $this->autoRender = false; // Solo para este ejemplo no se usará una vista
    }
    
    public function gmail() {
        
        $email = new Email('gmail-profile');
        $email->from(['julioaroni@gmail.com' => 'Tienda Online'])
            ->emailFormat('html') // html, text o both
            ->template('compra', 'default') // template(<template>, <layout>)
            ->viewVars([  // inyección de variables al template
                'nombres' => 'Erick Benites', 
                'producto' => 'CakePHPCookbook'
                ]) 
            ->to('julioaroni@gmail.com')
            ->subject('Correo desde CakePHP 3 con Gmail')
                    /// es el adjunto a enviar
//            ->attachments([
//                'CakePHPCookbook.pdf' => WWW_ROOT . 'CakePHPCookbook.pdf',
//                'photo.png' => [
//                    'file' => WWW_ROOT . 'img/logo.png',
//                    'mimetype' => 'image/png',
//                    'contentId' => 'logo-id'
//                ]
//            ])
            ->send("Contenido adicional ... \n ...");
        
        echo 'Correo enviado';
        $this->autoRender = false;
        
    }


}

