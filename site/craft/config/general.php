<?php

/**
 * General Configuration
 *
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */
return array(
  '*' => array(
    'omitScriptNameInUrls' => true,
    'sendPoweredByHeader' => false,
    'devMode' => getenv("CRAFT_DEVMODE") == "true",
    'enableTemplateCaching' => getenv("CRAFT_DEVMODE") != "true"
  ),

  // Local dev
  'aeg.local' => array(
    'siteUrl' => 'http://aeg.local'
  ),

  // live environment
  'p501758.mittwaldserver.info' => array(
    'siteUrl' => 'http://p501758.mittwaldserver.info/site/html/',    
  ),
  'geschmackssachen.aeg.de' => array(
    'siteUrl' => 'https://geschmackssachen.aeg.de'
  )
);
?>
