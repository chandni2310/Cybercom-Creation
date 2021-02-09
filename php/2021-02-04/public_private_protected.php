<?php 
class BankAccount{

	private $balance=10;

	public function DisplayBalance() {
		return 'Balance is '.$this->balance;
	}

	


}

$chandni=new BankAccount;
echo $chandni->DisplayBalance();
 //echo '<br>';
 //echo $chandni->balance;
 //echo $chandni->_balance; //for private
 // echo $chandni->_Tbalance; // for protected




?>