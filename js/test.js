$(document).ready(function(){

	$('#btn').click(function(){


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



});//end of function 


function myfun(val){
	


				     $.ajax({
				            type:'POST',
				            url:'test/form_data',
				            data:JSON.stringify(val),
				            dataType:'json', 
				           
				        })
				        .done(function( json ) { 

				        	//$('#res_name').text(json['name']);
				        	//$('#res_pass').text(json['pass']);

				        	$('#res').text(json['error']);
				           
				        })
				        .fail(function( xhr, status, errorThrown ) {
				          
				          alert( "Sorry, there was a problem!" );
				          console.log( "Error: " + errorThrown );
				          console.log( "Status: " + status );
				          console.dir( xhr );
				        });
	
}