<?php

class Str
{
    protected $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function toUpper()
    {
        $this->string = strtoupper($this->string);
    }

    public function toLower()
    {
        $this->string = strtolower($this->string);
    }

    public function get()
    {
        return $this->string;
    }

    public function toArray($delimiter = " ")
    {
        return explode($delimiter, $this->string);
    }
}

$str = new Str('Hello World');
$str->toUpper();
$str->toLower();

echo $str->get();
$array = $str->toArray("l");
echo "array<pre>" . print_r($array, 1) . "</pre>";
