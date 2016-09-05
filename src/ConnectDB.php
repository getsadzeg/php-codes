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
	function getConn() {
		return $this->conn;
	}
	function open() {
		$conn = mysql_connect(getHost(), getUser(), getPassword());
		if(! $conn) die('connection failed' . mysql.error());
		echo "connection success \n";
	}
	function close() {
		mysql_close(getConn());
	}
	function runStatement($statement) {
		$runquery = mysql_query($statement, getConn());
		if(! $runquery) die('something blew up while running statement: ' . mysql_error());
		echo "statement runned successfully";
	}


}
?>
