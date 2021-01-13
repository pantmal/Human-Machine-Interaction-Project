function validateEmpty(id,demo){
    var x = id.value
    
    result = true;
    
    if (x == "") {
        demo.innerHTML = '\u2757 Το πεδιό αυτό δεν μπορεί να είναι κενό.';
        id.style.borderColor = "darkred";
        result = false;
    }else{
       demo.innerHTML = '';
       id.style.borderColor = "black";
    }
    
    return result;

}


function validateMail(id,demo){
    var x = id.value
    var regex=/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/ 
  
    result = true;
  
    if (x == "") {
        demo.innerHTML = '\u2757 Το πεδιό αυτό δεν μπορεί να είναι κενό.';
        id.style.borderColor = "darkred";
        result = false;
    }else{
       demo.innerHTML = '';
       id.style.borderColor = "black";
    }
  
    if (x != ''){
        if ((!x.match(regex))){
            demo.innerHTML = '\u2757 Λάθος διεύθυνση email.';
            id.style.borderColor = "darkred";
            result = false;
        }else{
            demo.innerHTML = '';
            id.style.borderColor = "black";
        }
    }
  
    return result;
  
  }



function validateEditForm() {

    result = true;
    errors = false;

    if(validateEmpty(document.getElementById('uname'),document.getElementById('demo'))==false){
        errors = true;        
    }

    if(validateMail(document.getElementById('email'),document.getElementById('demo2'))==false){
        errors = true;        
    }


    if (errors == true){
        result = false;
    }

    return result;

}
