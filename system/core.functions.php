<?php

/**
 * showErrors() funkcija prikazuje erro iz appcora
 *
 * @param Exception
 */
function showErrors($e){
    echo ("
            Error: " . $e->getMessage() .
            "File: " . $e->getFile() .
            "Line: " . $e->getLine() .
            "StackTrace: "  . $e->getTraceAsString()
        );
}
