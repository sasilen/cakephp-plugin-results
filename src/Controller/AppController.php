<?php
declare(strict_types=1);

namespace Sasilen\Results\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController

{

	public $helpers = ['CakeDC/Users.AuthLink','Sasilen/Results.Results','Paginator' => ['templates' => 'paginator-templates']];

}
