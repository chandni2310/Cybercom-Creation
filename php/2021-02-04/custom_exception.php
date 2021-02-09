<?php  
class ServerException extends Exception {
	public function customMessage(){
	return 'Error at line no '.$this->getLine().' in file '.$this->getFile();
}
}
class DatabaseException extends Exception{}

try{
	if(!@mysqli_connect('localhost','root','','a_database')){
		throw new ServerException();
		
	} else {
		echo 'connected';

	}

} catch(ServerException $ex){
	echo "Error ".$ex->customMessage();

} 



?>