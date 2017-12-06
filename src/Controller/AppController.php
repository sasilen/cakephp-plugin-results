<?php

namespace Results\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{

	public $helpers = ['CakeDC/Users.AuthLink','Results.Results','Paginator' => ['templates' => 'paginator-templates']];

}