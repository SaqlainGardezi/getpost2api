<form method="post" action="">
    <input type="text" name="ownerName" placeholder="owner name"/>
    <input type="text" name="companyName"placeholder="company name"/>
    <input type="number" name="teamMember" placeholder="team member"/>
    <input type="text" name="address" placeholder="address"/>
    <input type="text" name="contact" placeholder="contact"/>
    <input type="email" name="email" placeholder="email"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="submit" value="Submit"/>
</form>


<?php
if (!empty($_POST)&!empty($_POST['ownerName'])&!empty($_POST['companyName'])&!empty($_POST['teamMember'])&!empty($_POST['address'])
    &!empty($_POST['contact'])&!empty($_POST['password'])&!empty($_POST['email'])) {
        $ownerName=$_POST['ownerName'] ;
        $companyName=$_POST['companyName'];
        $teamMember= $_POST['teamMember'];
        $address= $_POST['address'] ;
        $contact= $_POST['contact'] ;
        $email= $_POST['email'] ;
        $password=$_POST['password'] ;
        

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://apis-pak-e-saqlain.c9users.io/api/affiliated");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "ownerName=".$ownerName. "&email=".$email."&companyName=".$companyName . "&teamMember=". $teamMember. "&address=". $address.
            "&contact=". $contact. "&password=". $password);

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

    
}else{
    echo "form not submitted yet";
}

?>