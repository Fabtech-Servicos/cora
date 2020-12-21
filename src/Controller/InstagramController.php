<?php
namespace App\Controller;

use Cake\Controller\Controller;

class InstagramController extends Controller
{
    public function instagram()
    {
        $this->autoRender = false;
        $this->response = $this->response->withType('json');
        $this->response = $this->response->withStringBody(
            file_get_contents("https://www.instagram.com/fabtech_/?__a=1")
        );
    }
}
