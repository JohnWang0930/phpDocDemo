<?php

namespace app\controllers;

use app\components\Controller;

/**
 * 入口
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
	/**
	 * 入口
	 *
	 * @link http://phpdoc.dev.com
	 * @return string
	 */

	public function actionIndex()
	{
		return 'index';
	}
}