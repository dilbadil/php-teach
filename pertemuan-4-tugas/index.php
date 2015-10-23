<?php 
require "TagParser.php";

$html = "<p s='heheho' dil='hehe' id='paragraph_id' value='hello' class='paragraph_class' name='paragraph'>This is text</p>";
$tag = new TagParser($html);
$tag->setAttribute('id', 'new_id');
$tag->setTest('p');

$tag2 = new TagParser("<div id='oke_div'>Ini div</div>");

echo TagParser::$test;
// echo $tag->getAttribute('id');
// echo "attributes<pre>" . print_r($tag->getAttributes(), 1) . "</pre>";
// echo "html<pre>" . print_r($tag->getHtml(), 1) . "</pre>";
// echo "content<pre>" . print_r($tag->getContent(), 1) . "</pre>";
// echo "tagName<pre>" . print_r($tag->getTagName(), 1) . "</pre>";
// echo "id attribute<pre>" . print_r($tag->getAttribute('id'), 1) . "</pre>";
// echo "id attribute<pre>" . print_r($tag->getId(), 1) . "</pre>";
// // echo "html array<pre>" . print_r($tag->getHtmlArray(), 1) . "</pre>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "Set the id";
// echo "<br>";
// echo "<br>";
// $tag->setAttribute('id', 'the_new_id');
// echo "the new id call with __call<pre>" . print_r($tag->getId(), 1) . "</pre>";
// echo "attributes new<pre>" . print_r($tag->getAttributes(), 1) . "</pre>";
// // echo "html array new<pre>" . print_r($tag->getHtmlArray(), 1) . "</pre>";
//
// echo $tag->getHtml();
