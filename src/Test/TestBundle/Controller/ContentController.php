<?php
/**
 * Created by PhpStorm.
 * User: brandon
 * Date: 5/18/15
 * Time: 9:51 PM
 */

namespace Test\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContentController extends Controller {

    public function helloAction(){
        return new Response('hello world');
    }
}