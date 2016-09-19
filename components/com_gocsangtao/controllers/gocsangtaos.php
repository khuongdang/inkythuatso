<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Gocsangtao
 * @author     kent <kent.dang1706t@gmail.com>
 * @copyright  Bản quyền (C) 2014. Các quyền đều được bảo vệ.
 * @license    bản quyền mã nguồn mở GNU phiên bản 2
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Gocsangtaos list controller class.
 *
 * @since  1.6
 */
class GocsangtaoControllerGocsangtao extends GocsangtaoController
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional
	 * @param   array   $config  Configuration array for model. Optional
	 *
	 * @return object	The model
	 *
	 * @since	1.6
	 */
	public function &getModel($name = 'Gocsangtaos', $prefix = 'GocsangtaoModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));

		return $model;
	}
}
