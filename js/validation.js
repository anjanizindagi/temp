
   function myfun(){
    var a = document.getElementsByID("pwd").value;
    var b = document.getElementsByID("repwd").value;

    if(a!=b){
       document.getElementsByID("message").innerhtml="** password don't match";
      return false;
    }

    if(a==""){
      document.getElementsByID("message").innerhtml="** please input password";
      return false;
    }
    if(a.length < 5){
      document.getElementsByID("message").innerhtml="** password should be greater than 5digits";
      return false;
    }
     if(a.length >= 8){
      document.getElementsByID("message").innerhtml="** password should be smaller or atleast must be 8digits";
      return false;
    }

    } 
  