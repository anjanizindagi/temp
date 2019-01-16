$(document).ready(function(){

});//end of ready function 


function like_post(image_id){
    if (image_id) {
      var likeimagedata = {"image_id":image_id};
         $.ajax({
              type:'POST',
              url:base_url+'newsfeed/like_post',
              data:JSON.stringify(likeimagedata),
              dataType:'json', 
             
          })
          .done(function( json ) { 
            $("#like").css("color", "blue");
            
            location.reload();
                     
             
          })
          .fail(function( xhr, status, errorThrown ) {
            
            alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
          }); 
    }//end of if 
}//end of function like post


