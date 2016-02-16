# README #

Drupal 7 PSR-3 compatible logging interface with loggers for both drupal_watchdog and drush_log.

Require this project in your composer.json


```
#!json
{
"require": {
    "twhiston/drupal-logger": "dev-master",
  }
}
```

If you pass context called 'watchdog_context' it will be used for the watchdog module name, otherwise 'Watchdog Logged' will be used