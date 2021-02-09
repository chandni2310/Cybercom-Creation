<?php 
class BankAccount{

	public $balance=0;

	public function DisplayBalance() {
		return 'Balance is '.$this->balance;
	}

	public function Withdraw($amount) {
		if(($this->balance)<$amount) {
			echo 'Not sufficient balance<br>';
		} else {
			$this->balance=$this->balance-$amount;
		}
	} 

	public function Deposit($amount){
		$this->balance=$this->balance+$amount;
	}



}

$chandni=new BankAccount;
$alex=new BankAccount;
//echo $chandni->balance;
//$chandni->Withdraw(12);
$chandni->Deposit(100);
$alex->Deposit(200);

$chandni->Withdraw(10);
$alex->Withdraw(240);
 echo $chandni->DisplayBalance();
 echo '<br>';
 echo $alex->DisplayBalance();
 




?>