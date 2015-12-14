<?php

//the tag name of the node we are searching for
$what = 'body';

$reader = new XMLReader();
$reader->open('test.xml');
while ($reader->read()) {
    if ($reader->nodeType == XMLReader::ELEMENT) {
        $exp = $reader->expand();
        if ($exp->nodeName == $what)
            echo "<b>" . $exp->nodeName . " : </b>" . $exp->nodeValue . "<br />";
    }
}
?>
    
