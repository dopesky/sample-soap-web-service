<?php
include "Student.php";

$server = new SoapServer('http://localhost/Html/WebServices/Soap/soap/soap_service.wsdl', ['soap_version' => SOAP_1_2]);
$server->setClass('Student');
$server->handle();
