<?php
    class database
   
    {
         
        function __construct()
        {
            $this->pdo=new PDO("mysql:host=localhost;dbname=train;charset=utf8","root","");//connection
            
        }
        public function disconnect()
        {
            $this->pdo=null;
        }
        public function getRow($q,$p)
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetch();
        }
        public function getCount($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->rowCount();
        }
        public function getRows($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetchAll();
        }
        public function getObject($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function insertRow($q,$p)
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->rowCount();
        }
        public function update($q,$p)
        {
            return $this->insertRow($q,$p);
        }
        public function delete($q,$p)
        {
            return $this->insertRow($q,$p);
        }
        public function Execute($q)
        {
            return $this->pdo->exec($q);
        }
        public function ff(){
            $this->pdo->exec('use ques_ans');
            
        }
         public function err(){
           //return $this->pdo->errorInfo();
         return $this->pdo->errorCode();
            
        }
             
    }
	  $db=new database();//intializeconstructor to connect the db
	   $db->Execute("drop database train");
    $db->Execute("create database if not exists train");
    $db->Execute("use train");
	$db->Execute("CREATE TABLE tr(id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        depart VARCHAR(40) NOT NULL,depart_time VARCHAR(30) NOT NULL
        ,arrive VARCHAR(40) NOT NULL,arrive_time VARCHAR(30) NOT NULL,
        class VARCHAR(20)NOT NULL,price VARCHAR(20)NOT NULL);");
	$db->Execute('INSERT INTO tr (depart, depart_time, arrive, arrive_time, class, price) VALUES
        ("Cairo","10:10","Assyut","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","Express","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","Express","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","Express","1st: 50.50
	2nd: 40"),
			("Cairo","10:10","Assyut","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","Express","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","Express","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","Express","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","Express","1st: 50.50
	2nd: 40"),
			("Cairo","10:10","Assyut","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","VIP-1","1st: 50.50
	2nd: 40"),
			("Cairo","10:10","Assyut","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","VIP-2","1st: 50.50
	2nd: 40"),
			("Cairo","10:10","Assyut","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","SLEEPING-1","1st: 50.50
	2nd: 40"),
			("Cairo","10:10","Assyut","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","SLEEPING-2","1st: 50.50
	2nd: 40"),
			("Cairo","10:10","Assyut","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Cairo","10:10","Assyut","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Cairo","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Qena","10:10","Cairo","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Qena","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Alexandria","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Aswan","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Sohag","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Luxor","10:10","Assyut","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40"),
			("Assyut","10:10","Luxor","11:11","DISTINCTIVE","1st: 50.50
	2nd: 40");');