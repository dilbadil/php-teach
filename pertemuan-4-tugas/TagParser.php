<?php 

class TagParser
{
    // public $dil = "original_dil";

    protected $htmlArray;

    protected $tagName;

    protected $content;

    protected $attributes;

    public static $test = 'test_original';

    public function setTest($n)
    {
        static::$test = $n;
    }

    public function __construct($html)
    {
        $html = str_replace("'", "", $html);
        $html = str_replace(">", "<", $html);
        $html = str_replace("</", "<", $html);

        $this->parse($html);
    }

    public function getHtml()
    {
        $htmlArray = $this->htmlArray;

        // Normal tag, ex: <p>some text<p>
        if ($htmlArray[3] == $this->tagName)
        {
            $html = "<" . $htmlArray[1] . ">";
            $html .= $this->content;
            $html . "</" . $this->tagName . ">";
        }
        else
        {
            $html = "<" . $htmlArray[1] . "/>";
        }

        $this->html = $html;
        return $html;
    }

    private function parse($html)
    {
        $htmlArray = explode("<", $html);
        $attrs = $this->parseAttrs($htmlArray[1]);

        $this->htmlArray = $htmlArray;
        $this->tagName = $attrs['tag_name'];
        $this->attributes = $attrs['attributes'];
        $this->content = $htmlArray[2];
    }

    private function parseAttrs($data)
    {
        $attrs = [];
        $data = explode(" ", $data);
        $tagName = $data[0];
        unset($data[0]);

        foreach ($data as $attrStr)
        {
            $attr = explode("=", $attrStr);
            $attrs[$attr[0]] = $attr[1];
        }

        return [
            'tag_name' => $tagName,
            'attributes' => $attrs
        ];
    }

    // public function getHtml()
    // {
    //     return $this->html;
    // }

    public function getAttributes()
    {
        return $this->attributes;
    }

    // public function getId()
    // {
    //     return $this->attributes['id'];
    // }

    public function getTagName()
    {
        return $this->tagName;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAttribute($name)
    {
        return isset($this->attributes['name']) ? $this->attributes[$name] : false;
    }

    public function setAttribute($name, $value)
    {
        if (! isset($this->attributes[$name])) return;

        $attributeStr = "";

        // Set attribute by name and value
        $this->attributes[$name] = $value;

        foreach ($this->attributes as $attributeName => $attributeValue)
        {
            $attributeStr .= " $attributeName=$attributeValue";
        }

        $this->htmlArray[1] = $this->tagName . $attributeStr;
    }

    public function __get($attribute)
    {
        if (isset($this->$attribute)) return $this->$attribute;
        elseif (isset($this->attributes[$attribute])) return $this->attributes[$attribute];
    }

    public function __set($key, $val)
    {
    }

    public function __call($method, $parameters)
    {
        if ( substr($method, 0, 3) == 'get' )
        {
            // getId()
            $attributeName = lcfirst( substr($method, 3) );

            // First, we check in class atrribute
            if (isset($this->{$attributeName}))
            {
                return $this->{$attributeName};
            }
            // Second, we check in attribute
            else if (isset($this->attributes[$attributeName]))
            {
                return $this->attributes[$attributeName];
            }
        }
    }
}
