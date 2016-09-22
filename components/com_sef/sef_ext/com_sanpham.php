<?php

class SefExt_com_sanpham extends SefExt
{
    function beforeCreate (&$uri)
    {
        // Set the default view if not set
        if (is_null($uri->getVar('view'))) {
            $uri->setVar('view', 'sanpham');
        }
    }

    function create (&$uri)
    {
        $sefConfig = SEFConfig::getConfig();
        $this->params =& SEFTools::getExtParams('com_sanpham');

        $vars = $uri->getQuery(true);
        extract($vars);

        $lng = null;
        $title = array();
        $title[] = JoomSEF::_getMenuTitleLang(@$option, $lng, isset($Itemid) ? $Itemid : null);

        if (isset($id)) {
            $db = JFactory::getDbo();
            $query = "SELECT * from #__content where id = $id";
            $db->setQuery($query);
            $result = $db->loadObject();
            $title[] = $result->alias;
            if (!$result->alias) {
                $title[] = $result->title;
            }
        }

        $newUri = $uri;
        if (count($title) > 0) {
            $newUri = JoomSEF::_sefGetLocation($uri, $title, null, null, null, @$lng);
        }
        return $newUri;
    }
}