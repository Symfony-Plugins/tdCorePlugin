<?php

/**
 * PlugintdLinkTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PlugintdLinkTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return object PlugintdLinkTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('PlugintdLink');
  }

  /**
   * Returns a query retrieving all active links.
   *
   * @return Doctrine_Query - query retrieving a subpage.
   */
  static public function getActiveLinksQuery()
  {
    return Doctrine_Query::create()
      ->from('tdLink l')
      ->where('l.active = 1');
  }

  /**
   * Returns query retrieving link given by id.
   *
   * @param Integer $id - link id.
   * @return Doctrine_Query - query retrieving link given by id.
   */
  static public function getLinkByIdQuery($id)
  {
    return Doctrine_Query::create()
      ->from('tdLink l')
      ->where('l.id = ?', $id);
  }
}
