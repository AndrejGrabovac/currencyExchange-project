<?php

class DatabaseException extends Exception{

    public function show()
    {
        return ('Error: ' . $this->getMessage() .
            'File: ' . $this->getFile() .
            'Line: ' . $this->getLine() .
            'StackTrace: ' . $this->getTraceAsString()
        );
    }
}



?>