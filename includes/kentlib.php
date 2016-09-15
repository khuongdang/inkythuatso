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

    public static function getCategoryFromParent($cat_id = 0)
    {
        if (isset($cat_id) && $cat_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__categories WHERE parent_id = $cat_id";
            $db->setQuery($query);
            return $db->loadObjectList();
        }
    }

    public static function getMainMenu()
    {
        $app = JFactory::getApplication();
        $menu = $app->getMenu();
        $items          = $menu->getItems('menutype', 'mainmenu');
        return $items;
    }

    public static function getArticleContent($article_id)
    {
        if (isset($article_id) && $article_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__content WHERE id = $article_id";
            $db->setQuery($query);
            return $db->loadObject();
        }
    }

    public static function getCategoryInfo($category_id)
    {
        if (isset($category_id) && $category_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__categories WHERE id = $category_id";
            $db->setQuery($query);
            return $db->loadObject();
        }
    }

    public static function getArticleFromCategory($category_id)
    {
        if (isset($category_id) && $category_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__content WHERE catid = $category_id";
            $db->setQuery($query);
            return $db->loadObjectList();
        }
    }

    public static function trimstr($string, $length = 25, $method = 'WORDS', $pattern = '...')
    {
        if (!is_numeric($length)) {
            $length = 25;
        }

        if (strlen($string) <= $length) {
            return rtrim($string) . $pattern;
        }

        $truncate = substr($string, 0, $length);

        if ($method != 'WORDS') {
            return rtrim($truncate) . $pattern;
        }

        if ($truncate[$length - 1] == ' ') {
            return rtrim($truncate) . $pattern;
        }
// we got ' ' right where we want it

        $pos = strrpos($truncate, ' ');
// lets find nearest right ' ' in the truncated string

        if (!$pos) {
            return $pattern;
        }
// no ' ' (one word) or it resides at the very begining
// of the string so the whole string goes to the toilet

        return rtrim(substr($truncate, 0, $pos)) . $pattern;
// profit
    }

    public static function isIpad()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    }
}