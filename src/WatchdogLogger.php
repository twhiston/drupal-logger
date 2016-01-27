<?php
/**
 * Created by PhpStorm.
 * User: Thomas Whiston
 * Date: 27/01/2016
 * Time: 16:48
 */

namespace Drupal\twhiston\Logger;

use Psr\Log\AbstractLogger;


class Watchdog extends AbstractLogger {

  public function log($level, $message, array $context = array()) {

    $type = WATCHDOG_DEBUG ;
    //Our errors do not map 1:1 with the standard, so do this :(
    switch($level){
      case 'emergency':
        $type = WATCHDOG_EMERGENCY;
        break;
      case 'alert':
        $type = WATCHDOG_ALERT;
        break;
      case 'critical':
        $type = WATCHDOG_CRITICAL;
        break;
      case 'error':
        $type = WATCHDOG_ERROR;
        break;
      case 'warning':
        $type = WATCHDOG_WARNING;
        break;
      case 'notice':
        $type = WATCHDOG_NOTICE;
        break;
      case 'info':
        $type = WATCHDOG_INFO;
        break;
      case 'debug':
        $type = WATCHDOG_DEBUG;
        break;
    }
    watchdog('OUR MODULE',$message,$context,$type);
  }

}