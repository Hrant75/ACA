<?php

spl_autoload_register(function ($className) {
   require $className . ".php";
});

//$jsonWriter = new JsonWriter();
//
//$jsonWriter->setData([
//    "flan" => "fstan"
//]);
//
//$jsonWriter->writeData();


$xmlWriter = new MyXmlWriter();

$xmlWriter->setData([
    "flan" => "fstan"
]);

$xmlWriter->writeData();


//$xml = new SimpleXMLElement('<markers/>');
//
//header("Content-type: text/xml");
//$xml->asXML(["flan" => "fstan"]);
