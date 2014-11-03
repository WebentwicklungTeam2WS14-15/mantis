<?php
//TestString:
//?name=mc_issue_add&issueData[project][name]=Schadensmeldung&issueData[category]=General&issueData[reporter][name]=API&issueData[summary]=APISchaden&issueData[description]=API%20Schaden
// URL to your Mantis SOAP API (the mantisconnect.php file)
define('MANTISCONNECT_URL', 'http://www.patrickdehnel.de/mantisbt-1.2.17/api/soap/mantisconnect.php');

// the username/password of the user account to use for calls
define('USERNAME', 'administrator');
define('PASSWORD', 'root');

// ------------------------------------------------

parse_str($_SERVER['QUERY_STRING'], $args);


// get SOAP function name to call
if (!isset($args['name'])) {
    die("No name specified.");
}
$function_name = $args['name'];

// remove function name from arguments
unset($args['name']);

// prepend username/passwords to arguments
$args = array_merge(
    array(
        'username' => USERNAME,
        'password' => PASSWORD
    ),
    $args
);

var_dump($args);

//connect and do the SOAP call
try {
    $client = new SoapClient(MANTISCONNECT_URL . '?wsdl');

    $result = $client->__soapCall($function_name, $args);
} catch (SoapFault $e) {
    $result = array(
        'error' => $e->faultstring
    );
}

print json_encode($result);

?>