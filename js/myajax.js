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
				        	}
				        	else{
				        		alert("error");
				        	}
				           
				        })
				        /*.fail(function( xhr, status, errorThrown ) {
				          
				          alert( "Sorry, there was a problem!" );
				          console.log( "Error: " + errorThrown );
				          console.log( "Status: " + status );
				          console.dir( xhr );
				        });*/
	
		});//end of function
});


	
