<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\Mailer\Email;



class ContactsController extends AppController
{
    public function contato(){
        $this->viewBuilder()->setLayout('site');

        if ($this->request->is('post')){
            $formData = $this->request->getData();

            $email = new Email('gmail');
            $email->setFrom(['henrique@fabtechinfo.com.br' => 'Contato Milatec'])
                ->setTo('paulo.henrik.oliver@gmail.com')
                ->setSubject('Contato Milatec')
                ->send('Nome: ' . $formData['name']
                    . "\n". ' Email: ' . $formData['email']
                    . "\n". ' Mensagem: ' . $formData['msg']);
        }



    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['contato']);
    }



}
