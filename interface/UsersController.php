<?php 

class UsersController {

    protected $logger;

    public function __construct(ILogger $logger, array $data)
    {
        $this->logger = $logger;

        var_dump($logger);
    }

}

function hello(ILogger $logger) 
{
    var_dump($logger);
}
