function edit(){
$('#myModal').modal('show');
}

/*$(document).ready(function(){
	$('#submit_profile').click(function(){

		var data = JSON.stringify($('#profile_form').serializeArray(this));

		$.ajax({
              type:'POST',
              url:base_url+'timeline/upload_profile',
              data:data,
              dataType:'json', 
             
          })
          .done(function( json ) { 
            
            location.reload();
                     
             
          })
          .fail(function( xhr, status, errorThrown ) {
            
            alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
          }); 
	})
})