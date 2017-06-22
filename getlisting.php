<html><body>
<?php


$maps_url = 'https://apis-pak-e-saqlain.c9users.io/api/listing';
    $maps_json = file_get_contents($maps_url);
    $maps_array = json_decode($maps_json, true);

echo "array has value  <br><br>";
print_r($maps_array);

      

?>
</body>
</html>