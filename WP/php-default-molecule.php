<?php

$title = "Encart";
$content = "Lorem ipsum eu hendrerit urna, velit per urna elit. Tortor tempor Praesent eu. Viverra. Feugiat tincidunt vitae Praesent non semper. Cras felis. Luctus tincidunt nibh.";

$insert = new \WonderWp\Theme\Components\InsertComponent();

$insert
  ->setTitle($title)
  ->setContent($content);
  
echo $insert->getMarkup();

?>
