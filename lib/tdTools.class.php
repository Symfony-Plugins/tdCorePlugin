<?php

/**
 * tdTools class.
 *
 * Tools used all over TD CMF.
 *
 * @package    tdCorePlugin
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */
class tdTools
{
  /**
   * Returns mb shortened string to a given limit.
   *
   * @param String $content - raw string value to shorten
   * @param Integer $limit - limited length of shortened string
   * @return String - mb shortened string
   */
  static public function getMbShortenedString($content, $limit)
  {
    return mb_strlen($content) > $limit ? mb_substr($content, 0, $limit) . '...' : $content;
  }

  /**
   * Returns project name, defined in config/properties.ini file.
   *
   * @return String - project name
   */
  static public function getProjectName()
  {
    $file = sfConfig::get('sf_config_dir').'/properties.ini';
    $content = parse_ini_file($file, true);
    return $content['symfony']['name'];
  }
}
