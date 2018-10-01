<?php
echo '<title>PHP SimpleXML</title>';

$xml = simplexml_load_file('catalog.xml') or die ('Unable to load data');

$counter = 0;

foreach( $xml->children() as $book)
{
$counter++;
echo''.$counter.':';
echo'<img scr="'.$book->title['cover'].'">';
}
?>
