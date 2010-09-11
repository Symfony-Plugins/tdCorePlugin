<?php

require_once dirname(__FILE__).'/../lib/tdSubpageGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tdSubpageGeneratorHelper.class.php';

/**
 * tdSubpage actions.
 *
 * @package    plugin
 * @subpackage tdCorePlugin
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tdSubpageActions extends autoTdSubpageActions
{
  /**
   * Activates a subpage from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling subpage deactivating (switch).
   */
  public function executeActivate(sfWebRequest $request)
  {
    $subpage = SubpageTable::getSubpageByIdQuery($request->getParameter('id'))->fetchOne();
    $subpage->activate();

    return $this->renderPartial('subpage/ajax_deactivate', array('subpage' => $subpage));
  }

  /**
   * Deactivates a subpage from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling subpage activating (switch).
   */
  public function executeDeactivate(sfWebRequest $request)
  {
    $subpage = SubpageTable::getSubpageByIdQuery($request->getParameter('id'))->fetchOne();
    $subpage->deactivate();

    return $this->renderPartial('subpage/ajax_activate', array('subpage' => $subpage));
  }
}
