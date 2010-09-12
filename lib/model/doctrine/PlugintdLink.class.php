<?php

/**
 * PlugintdLink
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PlugintdLink extends BasetdLink
{
  /**
   * Activates link (and saves itself afterwards).
   */
  public function activate()
  {
    $this->setActive(true);
    $this->save();
  }

  /**
   * Deactivates link (and saves itself afterwards).
   */
  public function deactivate()
  {
    $this->setActive(false);
    $this->save();
  }
}