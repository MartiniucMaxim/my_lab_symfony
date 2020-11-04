<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
 public function number()
   {
       /*
        * @Route("/lucky/number)
        */
       $number = mt_rand(0,100);

       return new Response('<html><body> Lucky number is:'.$number.'</body></html>');
   }

}