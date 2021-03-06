<?php
/**
 *
 * @package Legacy
 * @version $Id: AdminActionSearch.class.php,v 1.3 2008/09/25 15:12:44 kilica Exp $
 * @copyright Copyright 2005-2007 XOOPS Cube Project  <https://github.com/xoopscube/legacy>
 * @license https://github.com/xoopscube/legacy/blob/master/docs/GPL_V2.txt GNU GENERAL PUBLIC LICENSE Version 2
 *
 */

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

/**
 * This is test menu block for control panel of legacy module.
 *
 * [ASSIGN]
 *  No
 * 
 * @package legacy
 */
class Legacy_AdminActionSearch extends Legacy_AbstractBlockProcedure
{
    public function getName()
    {
        return "action_search";
    }

    public function getTitle()
    {
        return "TEST: AdminActionSearch";
    }

    public function getEntryIndex()
    {
        return 0;
    }

    public function isEnableCache()
    {
        return false;
    }

    public function execute()
    {
        $render =& $this->getRenderTarget();
        $render->setAttribute('legacy_module', 'legacy');
        $render->setTemplateName('legacy_admin_block_actionsearch.html');
        
        $root =& XCube_Root::getSingleton();
        $renderSystem =& $root->getRenderSystem($this->getRenderSystemName());
        
        $renderSystem->renderBlock($render);
    }

    public function hasResult()
    {
        return true;
    }

    public function &getResult()
    {
        $dmy = "dummy";
        return $dmy;
    }

    public function getRenderSystemName()
    {
        return 'Legacy_AdminRenderSystem';
    }
}
