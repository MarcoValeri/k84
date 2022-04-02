<?php

/**
 * Create a function that gets
 * @param string $file as the name of 
 * a file's view and
 * @return string right path
 */
function pathView(string $file): string {
    $path = PUBLIC_PATH . '/views/' . $file;
    return $path;
}