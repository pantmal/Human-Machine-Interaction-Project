function validateName(id,demo){
    var x = id.value
    var regex=/^[a-zA-ZΆ-ωΑ-ώ ]+$/ ///^[0-9]+$/;

    result = true;
    
    if (x == "") {
        demo.innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        id.style.borderColor = "darkred";
        result = false;
    }else{
       demo.innerHTML = '';
       id.style.borderColor = "black";
    }

    if (x != ''){
        if ((!x.match(regex))){
            demo.innerHTML = '\u2757 Δεν επιτρέπονται αριθμοί.';
            id.style.borderColor = "darkred";
            result = false;
        }else{
            demo.innerHTML = '';
            id.style.borderColor = "black";
        }
    }

    return result;

}

function validateMail(id,demo){
    var x = id.value
    var regex=/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/ 

    result = true;

    if (x == "") {
        demo.innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
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

function validateNum(id,demo){
    var x = id.value
    var regex=/^[0-9]+$/ 

    result = true;

    if (x == "") {
        demo.innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        id.style.borderColor = "darkred";
        result = false;
    }else{
       demo.innerHTML = '';
       id.style.borderColor = "black";
    }
    
    
    if (x != ''){
        if ((!x.match(regex))){
            demo.innerHTML = '\u2757 Γράψτε μόνο αριθμούς.';
            id.style.borderColor = "darkred";
            result = false;
        }else if(x.length!=9){
            demo.innerHTML = '\u2757 Εισάγετε 9 αριθμούς.';
            id.style.borderColor = "darkred";
            result = false;
        }else{
            demo.innerHTML = '';
            id.style.borderColor = "black";
        }
    }

    return result;

}

function validateEmpty(id,demo){
    var x = id.value
    

    result = true;
    
    if (x == "") {
        demo.innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        id.style.borderColor = "darkred";
        result = false;
    }else{
       demo.innerHTML = '';
       id.style.borderColor = "black";
    }

    
    return result;

}

function validateReason(){ //doesn't work for on change
    var x = document.getElementsByName('rdb');
    
    
    result = true;
    
    if (x[0].checked == false && x[1].checked == false && x[2].checked == false && x[3].checked == false ) {
        document.getElementById("demo6").innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        result = false;
    }else{
        document.getElementById("demo6").innerHTML = '';
    }

    
    return result;

}

function show_textarea() {
    var x = document.getElementsByName('rdb');
    var hidden_text = document.getElementById("hidden_text");
  
    // If the checkbox is checked, display the output text
    if ( x[3].checked == true){
        hidden_text.style.display = "inline";
    } else {
        hidden_text.style.display = "none";
    }

    validateReason();
        
}

function validateTextArea(){
    var x = document.getElementsByName('rdb');
    
    result = true;
    
    if ( x[3].checked == true && document.getElementById('comment_text').value == '' ) {
        document.getElementById("demo7").innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        result = false;
    }else{
        document.getElementById("demo7").innerHTML = '';
    }

    return result;
}

function validateRantevouForm() {

    result = true;
    errors = false;

    if (validateName(document.getElementById('name1'),document.getElementById('demo'))==false){
        errors = true; 
    }
   
    if (validateName(document.getElementById('surname'),document.getElementById('demo1'))==false){
        errors = true; 
    }

    if (validateMail(document.getElementById('email'),document.getElementById('demo2'))==false){
        errors = true; 
    }

    if (validateNum(document.getElementById('afm'),document.getElementById('demo3'))==false){
        errors = true; 
    }
        
    if(validateEmpty(document.getElementById('date_from'),document.getElementById('demo4'))==false){
        errors = true;        
    }

    if(validateEmpty(document.getElementById('time'),document.getElementById('demo5'))==false){
        errors = true;        
    }

    if(validateReason()==false){
        errors = true;        
    }

    if(validateTextArea()==false){
        errors = true;        
    }

    if (errors == true){
        result = false;
    }

    return result;

}


