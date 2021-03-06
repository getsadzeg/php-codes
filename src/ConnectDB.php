<?php
class ConnectDB {
	private $host;
	private $user;
	private $password;
	private $conn;
	function __construct($host, $user, $password) {
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
	}
	function setHost($host) {
		$this->host = $host;
	}
	function getHost() {
		return $this->host;
	}
	function setUser($user) {
		$this->user = $user;
	}
	function getUser() {
		return $this->user;
	}
	function setPassword($password) {
		$this->password = $password;
	}
	function getPassword() {
		return $this->password;
	}
	function setConn($conn) {
		$this->conn = $conn;
	}
	function getConn() {
		return $this->conn;
	}
	function open() {
		$conn = mysql_connect($this->getHost(), $this->getUser(), $this->getPassword());
		if(! $conn) die('connection failed' . mysql.error());
		$this->setConn($conn);
		echo "connection success \n";
	}
	function close() {
		mysql_close($this->getConn());
	}
	function select_db($dbname) {
		mysql_select_db($dbname);
	}
	function runStatement($statement) {
		$runquery = mysql_query($statement, $this->getConn());
		if(! $runquery) die('something blew up while running statement: ' . mysql_error());
		echo "statement runned successfully \n";
	}

}

$dbexample = new ConnectDB("localhost:3036", "user", "user1234");
$dbexample->open();
#$dbexample->runStatement("CREATE Database test_db");
$dbexample->select_db("test_db");
#$dbexample->runStatement("CREATE TABLE person (name VARCHAR(30) NOT NULL, surname VARCHAR(30) NOT NULL)");
#$dbexample->runStatement('INSERT INTO person '.
#      '(name, surname) '.
#     'VALUES ( "Guri", "Getsadze" )');
$dbexample->runStatement("UPDATE person SET name = 'John', surname='Doe'");

$dbexample->close();

?>
