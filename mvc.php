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
echo json_encode($res);
}
