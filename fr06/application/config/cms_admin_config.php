<?php
function __autoload($class_name) {
    if (strpos($class_name, 'CI_') !== 0) {
        $file = APPPATH . 'libraries/' . $class_name . '.php';
        if (file_exists($file) && is_file($file)) {
            include_once ($file);
        }
    }
    echo 'aaa';
}
$config['site_name'] = 'Mobiles awesome store';