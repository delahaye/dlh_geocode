<?php

/**
 * Geo Code
 * Extension for Contao Open Source CMS (contao.org)
 *
 * Copyright (c) 2014 de la Haye
 *
 * @package dlh_geocode
 * @author  Christian de la Haye
 * @link    http://delahaye.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'delahaye\GeoCode' => 'system/modules/dlh_geocode/classes/GeoCode.php',
));
