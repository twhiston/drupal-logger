<?php
/**
 * Created by PhpStorm.
 * User: Thomas Whiston
 * Date: 27/01/2016
 * Time: 17:46
 */

namespace Drupal\twhiston\Logger;

use Psr\Log\AbstractLogger;


class DrushLogger extends AbstractLogger {

  public function log($level, $message, array $context = array()) {
    // TODO: Implement log() method.
    $message = dt($message, $context);

    //build the type
    /**
    *   The type of message to be logged. Common types are 'warning', 'error', 'success' and 'notice'.
    *   A type of 'failed' can also be supplied to flag as an 'error'.
    *   A type of 'ok' or 'completed' can also be supplied to flag as a 'success'.
    *   If you want your log messages to print to screen without the user entering
    *   a -v or --verbose flag, use type 'ok', this prints log messages out to
    *   STDERR, which prints to screen (unless you have redirected it). All other
    *   types of messages will be assumed to be notices.
     * */
    drush_log($message, $level);
  }


}