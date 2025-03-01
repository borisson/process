<?php

namespace Amp\Process;

const BIN_DIR = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'bin';
const IS_WINDOWS = (PHP_OS & "\xDF\xDF\xDF") === 'WIN';


/**
 * Escapes the command argument for safe inclusion into a Posix shell command string.
 *
 * @param string $arg
 *
 * @return string
 */
if (!function_exists('Amp\Process\escapeArguments')) {
    function escapeArguments(string $arg): string
    {
        return \escapeshellarg($arg);
    }
}
