<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://apis-pak-e-saqlain.c9users.io/api/affiliated");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "ownerName=".$ownerName. "&email=".$email."&companyName=".$companyName);

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

// further processing ....
if ($server_output ) { 
    echo $server_output;}
    else 
    { echo "failed"; }

?>
</body>
</html>