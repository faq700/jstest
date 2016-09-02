<?php

class DB {

    private $dbh;
    public function __construct()
    {
            $this->dbh = new PDO('mysql:host=localhost;dbname=jstest', 'root', '');
    }

    public function query ($sql) {
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
			return $sth->fetchAll(PDO::FETCH_COLUMN);
	}
}

if($_POST['move']=='right'){
    $dtb=new DB;
    $res=$dtb->query('SELECT name FROM images');
    asort($res);
    $last=$_POST['last'];
    $key=array_search($last, $res);
    $ress=[];
    if(isset($res[$key+3])){
        $ress[0]=$res[$key+1];
        $ress[1]=$res[$key+2];
        $ress[2]=$res[$key+3];
    } elseif (isset($res[$key+2])){
        $ress[0]=$res[$key+1];
        $ress[1]=$res[$key+2];
        $ress[2]=$res[0];
    } elseif (isset($res[$key+1])){
        $ress[0]=$res[$key+1];
        $ress[1]=$res[0];
        $ress[2]=$res[1];
    } else {
        $ress[0]=$res[0];
        $ress[1]=$res[1];
        $ress[2]=$res[2];
    }
    echo json_encode($ress);
    //echo $ress;
}
