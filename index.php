<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <script language="JavaScript" src="../jquery-3.1.0.js"></script>
    <script language="javascript" src="../script.js"></script>
</head>
<body>

<div class="main"></div>
<button value="left" class="bot"><</button>
<div class="bot">
    <a><img class="botimg" src="../images/DSCN3798.jpg"></a>
    <a><img class="botimg" src="../images/DSCN3798.jpg"></a>
    <a><img class="botimg" src="../images/DSCN3798.jpg"></a>
</div>
<button value="right" class="bot"> > </button>

</body>
</html>

<?php
class DB {

    private $dbh;
    public function __construct()
    {
            $this->dbh = new PDO('mysql:host=localhost;dbname=jstest', 'root', '');
    }

    public function query ($sql, $param=[]) {
            $sth = $this->dbh->prepare($sql);
            $sth->execute($param);
            return $sth->fetchAll();
    }
}

$dtb=new DB;
$res=$dtb->query('SELECT name FROM images');
var_dump($res);

/*
$res=connect('SELECT * FROM images');
var_dump($res);
foreach($res as $k => $v){
    echo 'fg';
    echo $v;
}*/
?>