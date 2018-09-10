<?php
/**
 * Created by PhpStorm.
 */

namespace app\controllers;

use app\components\Controller;

/**
 * 文章相关
 *
 * Class ArticleController
 * @package app\controllers
 */
class ArticleController extends Controller
{
	/**
	 * @var ArticleController\param1 公共
	 */
	public $param1;

	/**
	 * @var ArticleController\param2 保护
	 */
	protected $_param2;

	/**
	 * @var ArticleController\param1 私有
	 */
	private $_param3;

	const IS_CONST = '常量';

	public function behaviors()
	{
		return parent::behaviors();
	}

	/**
	 * 这是获取文章列表的方法
	 *
	 * ```
	 * 支持markdown
	 * ```
	 * @author kai_tian
	 * @copyright 声明
	 * @license http://phpdoc.dev.com/article/list
	 * @link http://phpdoc.dev.com/article/list
	 * @method POST文章列表
	 * @param int $start 开始起点
	 * @param int $limit 条数
	 * @return string 返回json字符串
	 *
	 * ```json
	 *     {
	 *         "total":3,
	 *         "list":[
	 *             {
	 *                 "article_id":1,
	 *                 "title":"\u6807\u98981"
	 *             },
	 *             {
	 *                 "article_id":2,
	 *                 "title":"\u6807\u98982"
	 *             }
	 *         ]
	 *     }
	 * ```
	 * @version 1.0.0
	 */
	public function actionList()
	{
		$start = +$_POST['start'];
		$limit = +$_POST['limit'];
		$ar_list = [
			'total' => 3,
			'list'  => [
				['article_id' => 1, 'title' => '标题1'],
				['article_id' => 2, 'title' => '标题2'],
				['article_id' => 3, 'title' => '标题3'],
			],
		];

		return json_encode($ar_list);
	}

	/**
	 * 获取文章详情
	 *
	 * @license http://phpdoc.dev.com/article/detail
	 * @link https://www.baidu.com
	 * @param int $article_id
	 * @return string
	 */
	public function actionDetail()
	{
		$article_id = $_GET['article_id'];
		$ar_article = [
			'title'   => '标题' . $article_id,
			'content' => '内容' . $article_id,
		];

		return json_encode($ar_article);
	}
}