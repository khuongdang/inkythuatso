<?php
/**
 * Created by PhpStorm.
 * User: Kent Dang
 * Date: 06/08/2016
 * Time: 4:24 CH
 */
defined('_JEXEC') or die;
final class JKentlib {
    const INTRO_ID = 1;

    public static function getMainMenu($menu_id = 0)
    {
        if (isset($menu_id) && $menu_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__categories WHERE parent_id = $menu_id";
            $db->setQuery($query);
            return $db->loadObjectList();
        }
    }
}