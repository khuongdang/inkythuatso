<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$jinput = JFactory::getApplication()->input;
$view = JRequest::getVar('view');
$id = (int)JRequest::getVar('id');
?>
<div id="breadcrumb">
    <ul class="crumbs">
        <li class="first"><a href="<?php JURI::base();?>" style="z-index:9;"><span></span>Trang chủ</a></li>
        <?php
        switch ($jinput->get('option')) {
            case "com_content":
                if ($view === 'article') {
                    $article =JTable::getInstance("content");
                    $article->load($id);
                    $title = $article->get('title');
                }
                echo '<li class="last"><a href="javascript:void(0);" style="z-index:8;">'.$title.'</a></li>';
                break;
        }
        ?>
    </ul>
</div>