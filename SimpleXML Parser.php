<?php
$myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Sr assistant</to>
<from>Shafi</from>
<heading>Reminder</heading>
<body>Do not forget to submit your paper!</body>
</note>";

$xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
