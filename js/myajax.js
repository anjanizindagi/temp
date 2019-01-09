$(document).ready(function(){

	$('#btn2132').click(function(){


			var form_data = JSON.stringify($('#form').serializeArray(this));


				     $.ajax({
				            type:'POST',
				            url:'test/form_data',
				            data:form_data,
				            dataType:'json', 
				           
				        })
				        .done(function( json ) { 

				        	if (json['success']) {
				        		alert("success");
				        	}else{
				        		alert("error");
				        	}
				           
				        })
				        .fail(function( xhr, status, errorThrown ) {
				          
				          alert( "Sorry, there was a problem!" );
				          console.log( "Error: " + errorThrown );
				          console.log( "Status: " + status );
				          console.dir( xhr );
				        });
	

	});//end of click function bt_myform


	$('#btn').click(function(){
		var name = 'abc';
		var data = {'name' : name};
		$('#form').empty();
			//var form_data = JSON.stringify($('#form').serializeArray(this));

					
				     $.ajax({
				            type:'POST',
				            url:'test/search_form_data',
				           	data:JSON.stringify(data),
				            dataType:'json', 
				           
				        })
				        .done(function( json ) { 

				        	var error = "data not found";
				        	if (json) {
				        		#(appendid).append(json.name);
				        	}
				        	else{#(error).append(error);}
				           
				        })
				        .fail(function( xhr, status, errorThrown ) {
				          
				          alert( "Sorry, there was a problem!" );
				          console.log( "Error: " + errorThrown );
				          console.log( "Status: " + status );
				          console.dir( xhr );
				        });




});//end of function 


