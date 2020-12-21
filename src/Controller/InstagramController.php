<?php
namespace App\Controller;

use Cake\Controller\Controller;

use InstagramScraper\Instagram;
use Phpfastcache\Helper\Psr16Adapter;

class InstagramController extends Controller
{
    public function instagram()
    {
        $this->autoRender = false;
        $this->response = $this->response->withType('json');

        $instagram  = Instagram::withCredentials(new \GuzzleHttp\Client(), 'he_nrique2811', '@q1w2e3', new Psr16Adapter('Files'));
        $instagram->login();
        $instagram->saveSession();

        $media = $instagram->getMediaByUrl('https://www.instagram.com/p/BHaRdodBouH');

        var_dump($media); exit;


        $this->response = $this->response->withStringBody(
            file_get_contents("https://www.instagram.com/fabtech_/?__a=1")
        );
    }
}
