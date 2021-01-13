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

function validatePswd(){

    var y = document.getElementById('pwd').value;

    result = true;

    if (y == "") {
        document.getElementById("demo2").style.color = 'darkred';
        document.getElementById("demo2").innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        result = false;
    }else{
        document.getElementById("demo2").innerHTML = '';
    }

    return result;
    
}

function PswdKeyUp() {

    var y = document.getElementById('pwd').value;

    if(y.length < 10){
        document.getElementById("demo2").innerHTML = 'Σας συστήνουμε να προσθέσετε επιπλέον χαρακτήρες.';
        document.getElementById("demo2").style.color = 'rgb(139, 90, 0)';
    }else{
        document.getElementById("demo2").innerHTML = '';
    }


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



function validateRole(){ 
    var x = document.getElementsByName('rdb');
    
    
    result = true;
    
    if (x[0].checked == false && x[1].checked == false ) {
        document.getElementById("demo7").innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
        result = false;
    }else{
        document.getElementById("demo7").innerHTML = '';
    }

    show_afm_ergodoti();

    return result;

}

function validate_AFM_Ergodoti(){

    var x = document.getElementsByName('rdb');

    var result = true;
        
    if ( x[1].checked == true ) {   
        var check =  validateNum(document.getElementById('afm_ergodoti'),document.getElementById('demo8'))
        if (check == false){
            result = false;
        } 
    }

    return result;

}



function validateForm() {

    result = true;
    errors = false;

    if(validateEmpty(document.getElementById('uname'),document.getElementById('demo'))==false){
        errors = true;        
    }

    if(validateEmpty(document.getElementById('pwd'),document.getElementById('demo2'))==false){
        errors = true;        
    }

    if (validateMail(document.getElementById('email'),document.getElementById('demo3'))==false){
        errors = true
    }

    if (validateNum(document.getElementById('afm'),document.getElementById('demo4'))==false){
        errors = true
    }

    if (validateName(document.getElementById('first_name'),document.getElementById('demo5'))==false){
        errors = true
    }
   
    if (validateName(document.getElementById('first_name'),document.getElementById('demo6'))==false){
        errors = true
    }

    if(validateRole()==false){
       errors = true;   
    }

    if(validate_AFM_Ergodoti()==false){
        errors = true;   
    }


    if (errors == true){
        result = false;
    }

    return result;

}

function show_afm_ergodoti() {
    var x = document.getElementsByName('rdb');
    var hidden_text = document.getElementById("hidden_input");
  
    if ( x[1].checked == true){
        hidden_text.style.display = "inline";
    } else {
        hidden_text.style.display = "none";
    }

}