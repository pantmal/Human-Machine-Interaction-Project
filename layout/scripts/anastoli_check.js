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

function validateOption(){ 
    var x = document.getElementById('anastoli');
    var y = document.getElementById('tilergasia');
    
    var result = true;

        
    if (x.checked == false && y.checked == false ) {
        document.getElementById("demo6").innerHTML = '\u2757 Πρέπει να διαλέξετε τουλάχιστον μία επιλογή.';
        result = false;
    }else{
        document.getElementById("demo6").innerHTML = '';
    }

   
    return result;

}

function validateAllOptions(){

    var x = document.getElementById('tilergasia');
    var y = document.getElementById('anastoli');

    var result = true;
        
    if (x.checked == true ) {   
        var check_one = validateEmpty(document.getElementById('date_from_til'),document.getElementById('demo7'))
        var check_two = validateEmpty(document.getElementById('date_to_til'),document.getElementById('demo8'))
        if (check_one == false || check_two == false){
            result = false;
        } 
    }

    if (y.checked == true ) {
        var check_three = validateEmpty(document.getElementById('date_from_anastoli'),document.getElementById('demo9'))
        var check_four = validateEmpty(document.getElementById('date_to_anastoli'),document.getElementById('demo10'))
        if (check_three == false || check_four == false){
            result = false;
        } 
    }

    if (x.checked == true && y.checked == true ) {
        var check_one = validateEmpty(document.getElementById('date_from_til'),document.getElementById('demo7'))
        var check_two = validateEmpty(document.getElementById('date_to_til'),document.getElementById('demo8'))
        var check_three = validateEmpty(document.getElementById('date_from_anastoli'),document.getElementById('demo9'))
        var check_four = validateEmpty(document.getElementById('date_to_anastoli'),document.getElementById('demo10'))
        if (check_one == false || check_two == false && check_three == false || check_four == false){
            result = false;
        } 
    }

   
    return result;

}

function validateAnastoliForm() {

  result = true;
  errors = false;

  if (validateName(document.getElementById('name'),document.getElementById('demo'))==false){
      errors = true; 
  }
 
  if (validateName(document.getElementById('surname'),document.getElementById('demo1'))==false){
      errors = true; 
  }

  if (validateNum(document.getElementById('afm'),document.getElementById('demo2'))==false){
      errors = true; 
  }

  if (validateName(document.getElementById('name_worker'),document.getElementById('demo3'))==false){
    errors = true;  
  }

  if (validateName(document.getElementById('surname_worker'),document.getElementById('demo4'))==false){
      errors = true; 
  }

  if (validateNum(document.getElementById('afm_worker'),document.getElementById('demo5'))==false){
      errors = true; 
  }
   
  if (validateOption()==false){
    errors = true; 
  }

  if (validateAllOptions()==false){
    errors = true; 
  }
  
  if (errors == true){
      result = false;
  }

  return result;

}




function show_options(checkBox, text) {

  
  if (checkBox.checked == true){
    text.style.display = "inline";
  } else {
    text.style.display = "none";
  }

  validateOption()
      
}
