<?php 

interface ILogger {

    public function log($name, $text);

    public function getLog($id);

    public function removeLog($id);
}
