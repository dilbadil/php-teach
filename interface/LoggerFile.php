<?php 

class LoggerFile implements ILogger {

    public function log($name, $text)
    {
        // Save to file.
        return "Save log to file";
    }

    public function getLog($id)
    {
        // Get log data from file by filename.
        return "Get log data from file by filename";
    }

    public function removeLog($id)
    {
        // Remove log in dropbox by filename.
        return "Remove log in dropbox by filename";
    }
}
