<?php

/**
 * Create a function that gets
 * @param string $file as the name of 
 * a file's view and
 * @return string right path into the
 * folder public
 */
function pathPublic(string $file): string {
    $path = PUBLIC_PATH . '/' . $file;
    return $path;
}

/**
 * Create a function that gets
 * @param string $file as the name of 
 * a file's view and
 * @return string right path into the
 * folder views
 */
function pathView(string $file): string {
    $path = PUBLIC_PATH . '/views/' . $file;
    return $path;
}