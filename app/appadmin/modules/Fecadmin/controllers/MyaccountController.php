<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
namespace fecshop\app\appadmin\modules\Fecadmin\controllers;
use fecshop\app\appadmin\modules\AppadminController;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class MyaccountController extends AppadminController
{
	public $enableCsrfValidation = true;
    public $blockNamespace = 'fecshop\\app\\appadmin\\modules\\Fecadmin\\block';

    # 我的账户
    public function actionIndex()
    {
		$data = $this->getBlock()->getLastData();
		return $this->render($this->action->id,$data);
	}

}








