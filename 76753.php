<?php

// REPORT ALL ERRORS / WARNINGS / NOTICES
error_reporting(E_ALL);

// CATCH ERRORS / WARNINGS / NOTICES, AND THROW AN EXCEPTION IN THEIR PLACE
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
	throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});

include __DIR__ . '/76753.inc.php';
