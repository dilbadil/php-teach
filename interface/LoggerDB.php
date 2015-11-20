<?php 

class LoggerDB implements ILogger {

    public function log($name, $text)
    {
        // Save to db.
        return "Save log into database";
    }

    public function getLog($id)
    {
        // Get log data in database by id.
        return "Get log data in database";
    }

    public function removeLog($id)
    {
        // Remove log by id.
        return "Remove log by id";
    }
}
