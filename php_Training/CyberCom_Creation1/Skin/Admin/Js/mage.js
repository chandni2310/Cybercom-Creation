var Base = function(){

};

Base.prototype = {
	alert : function(){
		alert(11);

	},

	url : null,
	params : {},
	method : 'post',

	setUrl : function(url){
		this.url = url;
		return this;
	},

	getUrl : function(){
		return this.url;
	},

	setmethod : function(method){
		this.method = method;
		return this;
	},

	getMethod : function(){
		return this.method;
	},

	setParams : function(params){
		this.params = params;
		return this;
	},

	resetParams : function(){
		this.params = {};
		return this;
	},

	getParams : function(key){
		if (typeof key === 'undefined'){
			return this.params;
		}
		if(typeof this.params[key] == 'undefined'){
			return null;
		}
		return this.params[key];
	},

	addParam : function(key,value){
		this.params[key] = value;
		return this;
	},

	removeParam : function(key){
		if(typeof this.params[key] != 'undefined'){
		delete this.params[key];
		}
		return this;
	},

	load : function(){
		var request = $.ajax({
			method : this.getMethod(),
			url : this.getUrl(),
			data : this.getParams(),
			success : function(response){
				alert(response.status);
			}

		});
		/*request.done(function(response){
			console.log(response);*/

	
	},
	setForm: function (button) {
	    form = $(button).parents("form");
	    this.setParams(form.serialize());
	    this.setUrl(form.attr("action"));
	    this.setMethod(form.attr("method"));
	    return this;
  	}
}





var object = new Base();
object.getParams(12);
object.setParams(
	{
		name: 'chandni',
		email: 'abc@gmail.com'

	});

object.setUrl('http://localhost/php_Training/Cybercom_Creation/index.php?c=product&a=test');
//console.log(object);
//	object.load();