$('document').ready(function() {
  $('#email').keyup( function(){
    var email = $('#email').val();
   
    $.ajax({
       url: 'server.php',
       type: 'post',
       data: {
         'email' : email,
       },
      success:function(data)
      {
      
       if(data != '0')
       {
        
        email_state = false;
        alert("Email not available");
        
       }
       else
       {
        email_state = true;
       }
      }
    });
});
});


function validateForm() {

    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
      alert("Name must be filled!");
      return false;
    }
    else if (!(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(x))) {
      alert("Name should be in alphabets!");
      return false;
    }
  
  
    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
      alert("Email must be filled out");
      return false;
    }
    else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))) {
      alert("Please enter a valid email address!");
      return false;
    }
      


    
    var x = document.forms["myForm"]["password"].value;
    if (x == "") {
      alert("Password must be filled out");
      return false;
    }
    else if  (/^[A-Za-z]+$/.test(x)) {
      alert("Password must contain atleast 1 digit");
      return false;
    }
    else if(!isNaN(x)) {
        alert("Password must contain atleast 1 alphabet");
        return false;
    }
    else if (x.length < 8) {
      alert("You have entered less than 8 characters for Password");
      return false;
    }




    var x = document.forms["myForm"]["address"].value;
    if (x == "") {
      alert("Address must be filled out");
      return false;
    }
  
  


    var x = document.forms["myForm"]["pincode"].value;
    if (x == "") {
      alert("Pincode must be filled out");
      return false;
    }
    else if (isNaN(x)) {
      alert("Pincode must be Numeric");
      return false;
    }



    var x = document.forms["myForm"]["phone"].value;
    if (x == "") {
      alert("Phone must be filled out");
      return false;
    }
    else if (isNaN(x)) {
      alert("Phone must be Numeric");
      return false;
    }
  
  }