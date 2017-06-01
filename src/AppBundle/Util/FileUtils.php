<?php

namespace AppBundle\Util;

/**
 * Class FileUtils
 * @package AppBundle\Util
 *
 * @TODO test scanFiles
 */
class FileUtils
{
    /**
     * @param $dir
     * @param $regexp
     * @return array
     */
    public static function scanFiles($dir, $regexp) {
        $directory = new \RecursiveDirectoryIterator($dir);
        $flattened = new \RecursiveIteratorIterator($directory);
        $iterator = new \RegexIterator($flattened, '#'.$regexp.'#');
        $files = array();
        foreach($iterator as $file) {
            $files[] = $file;
        }
        return $files;
    }
}