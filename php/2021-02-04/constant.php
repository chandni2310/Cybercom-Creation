<?php  



class Circle {

	const pi=3.14;

	public function area($radius){
		return 'Area is '.self::pi *($radius*$radius);
	}
    
}

$c=new Circle;
echo Circle::pi;

//echo $c->area(10);






?>