<?php
/**
 * Created by PhpStorm.
 * User: kataoka
 * Date: 06/06/16
 * Time: 14:37
 */

namespace Sb2plugin\Controller;

use Cake\Core\Configure;
use Sb2plugin\Controller\AppController;

class ExamplesController extends AppController
{
    public function index($page = '')
    {
        if (empty($page)) {
            $page = 'home';
        }
        $this->render($page, 'sb');
    }
}