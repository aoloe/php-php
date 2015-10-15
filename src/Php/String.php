<?php
//
// dummy class for the autoloader
namespace Aoloe\Php {
    class String {
    }
}

/**
 * from http://stackoverflow.com/a/10473026/5239250
 */
if (!function_exists(startsWith)) {
    function startsWith($haystack, $needle) {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
    }
}

if (!function_exists(endsWith)) {
    function endsWith($haystack, $needle) {
        // search forward starting from end minus needle length characters
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
    }
}
