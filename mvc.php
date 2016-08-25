<?php

function connect($sql){
    $dbh= new PDO('mysql:host=localhost;dbname=test.loc', 'root', '');
    $sth = $dbh->prepare($sql);
    $sth->execute($param);
    return $sth->fetchAll();
}

$res=connect('SELECT * FROM images');
echo $res;