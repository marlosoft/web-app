<?php

namespace App\Controllers;

use Marlosoft\Framework\Core\Controller;
use Marlosoft\Framework\Views\TemplateView;

/**
 * Class DefaultController
 * @package App\Controllers
 */
class DefaultController extends Controller
{
    /**
     * @return TemplateView
     */
    public function index()
    {
        return $this->render('default/index.phtml', [
            'name' => $this->request->get('name', 'World'),
        ]);
    }
}
