<?php
if (! function_exists('sendAndTerminate')) {
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $response
     * @return string
     */
    function sendAndTerminate($response = '')
    {
        app(ImanGhafoori\Terminator\Terminator::class)->sendAndTerminate($response);
    }
}

if (! function_exists('respondWith')) {
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $response
     * @return string
     */
    function respondWith($response = '')
    {
        sendAndTerminate($response);
    }
}