<?php

/**
 * Create const variables that store the
 * main path of the application
 */
define("PRIVATE_PATH", dirname(__FILE__));
define("PUBLIC_PATH", dirname(PRIVATE_PATH));
define("INCLUDE_PATH", dirname(PRIVATE_PATH) . '/includes/');

// Require functions.php
require_once 'includes/functions.php';