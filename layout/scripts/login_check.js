function validateEmpty(id,demo){
    var x = id.value
    
    result = true;
    
    if (x == "") {
        demo.innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        id.style.borderColor = "darkred";
        result = false;
    }else{
       demo.innerHTML = '';
       id.style.borderColor = "#ccc";
    }
    
    return result;

}

function validateLoginForm() {

    result = true;
    errors = false;

    if(validateEmpty(document.getElementById('uname'),document.getElementById('demo'))==false){
        errors = true;        
    }

    if(validateEmpty(document.getElementById('pwd'),document.getElementById('demo2'))==false){
        errors = true;        
    }


    if (errors == true){
        result = false;
    }

    return result;

}
