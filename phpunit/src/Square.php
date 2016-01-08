<?php

class Square 
{
    protected $width;
    protected $length;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function area()
    {
        return $this->width * $this->length;
    }
}
