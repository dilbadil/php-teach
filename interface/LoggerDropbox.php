<?php 

class LoggerDropbox implements ILogger {

    public function log($name, $text)
    {
        // Save to dropbox.
        return "Save log to dropbox";
    }

    public function getLog($id)
    {
        // Get log data in dropbox by identifier.
        return "Get log data in dropbox by id";
    }

    public function removeLog($id)
    {
        // Remove log in dropbox by identifier.
        return "Remove log in dropbox by id";
    }
}
