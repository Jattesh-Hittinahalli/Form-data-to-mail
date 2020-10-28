<?php

$mongo = new MongoClient();
$db=$mongo->jatte;
$collection=$db->text;

if($_POST)
{
    $insert= array(
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'phone'=>$_POST['phone'],
        'text'=>$_POST['text']
    );

    if($collection->insert($insert))
    {
        echo "data inserted";
    }

    else
    {
        echo "Some issue";
    }


}
else 
{
    echo "no data stored";
}



?>