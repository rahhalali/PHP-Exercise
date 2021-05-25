
<?php
$array=Array(
    "musicals"=>Array("okahoma","The Music Man","South Pacific"),
    "dramas"=>Array("Lawrence of Arabia" ,"To Kill a Mockingbird","Casablanca "),
    "mysteries"=>Array("The Maltese Falcon","Rear Window","North by Northwest")
);

foreach($array as $key => $val)
{
    echo $key."</br>";
    foreach( $val as $keyItem => $valKey)
    {
        echo "---> ". $keyItem ." = ".$valKey."</br>";
    }
   
}
echo "</br></br>";
krsort($array);
foreach($array as $key => $val)
{
    echo $key."</br>";
    foreach( $val as $keyItem => $valKey)
    {
        echo "---> ". $keyItem ." = ".$valKey."</br>";
    }
   
}

?>