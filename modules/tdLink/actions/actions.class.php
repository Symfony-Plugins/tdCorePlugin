<?php

require_once dirname(__FILE__).'/../lib/tdLinkGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/tdLinkGeneratorHelper.class.php';

/**
 * tdLink actions.
 *
 * @package    plugin
 * @subpackage tdCorePlugin
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tdLinkActions extends autoTdLinkActions
{
 /**
  * Displays list of active tdLinks.
  *
  * @param sfRequest A request object
  */
  public function executeDisplay(sfWebRequest $request)
  {
    $this->setVar('td_links', tdLinkTable::getActiveLinksQuery()->execute(), true);
    $this->forward404If(!$this->td_links, 'Strona nie istnieje');
  }

  /**
   * Activates a link from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling link deactivating (switch).
   */
  public function executeActivate(sfWebRequest $request)
  {
    $td_link = tdLinkTable::getLinkByIdQuery($request->getParameter('id'))->fetchOne();
    $td_link->activate();

    return $this->renderPartial('tdLink/ajax_deactivate', array('td_link' => $td_link));
  }

  /**
   * Deactivates a link from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling link activating (switch).
   */
  public function executeDeactivate(sfWebRequest $request)
  {
    $td_link = tdLinkTable::getLinkByIdQuery($request->getParameter('id'))->fetchOne();
    $td_link->deactivate();

    return $this->renderPartial('tdLink/ajax_activate', array('td_link' => $td_link));
  }
}
