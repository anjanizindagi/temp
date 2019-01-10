$(document).ready(function(){

	$('#user_btn').click(function(){


			var form_data = JSON.stringify($('#userform').serializeArray(this));


				     $.ajax({
				            type:'POST',
				            url:'http://localhost/bindassbuddy/userinfo/userinfo_data',
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
	

	});//end of click function user_btn



});//end of function 


function myfun(val){
	


				     $.ajax({
				            type:'POST',
				            url:'user_info/userinfo_data',
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