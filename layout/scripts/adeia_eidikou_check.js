function validateName(id,demo){
    var x = id.value
    var regex=/^[a-zA-ZΆ-ωΑ-ώ ]+$/ ///^[0-9]+$/;

    var result = true;
    
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

    var result = true;

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

    var result = true;

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
    

    var result = true;
    
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

function validateHiddenInput(){

    var x = document.getElementById("kids_4").value;
    var y = document.getElementById('number_of_kids').value; 
    
    var result = true;
    
    
    if ( y == 'four_or_more') {
        if (x == ''){
            document.getElementById('demo7').innerHTML = '\u2757 Το πεδιό αυτό είναι υποχρεωτικό.';
            document.getElementById("kids_4").style.borderColor = "darkred";
            result = false;
        }else{
            document.getElementById('demo7').innerHTML = '';
            document.getElementById("kids_4").style.borderColor = "black";
        }

        if (isNaN(x) || x < 4) {
            document.getElementById('demo7').innerHTML = '\u2757 Παρακαλούμε γράψτε έναν αριθμό από το 4 και πάνω.';
            document.getElementById("kids_4").style.borderColor = "darkred";
            result = false;
        }else{
            document.getElementById('demo7').innerHTML = '';
            document.getElementById("kids_4").style.borderColor = "black";
        }
    }
    
    return result;

}



function validateSelect(){
    
    var kids = document.getElementById('number_of_kids');
    var paidi_1 = document.getElementById("paidi_1");
    var paidi_2 = document.getElementById("paidi_2");
    var paidi_3 = document.getElementById("paidi_3");
    var paidi_4 = document.getElementById("paidi_4");
    
    var result = true;
    

    if (kids.value=="one"){
        var check_one = validateEmpty(paidi_1, document.getElementById('demo8'));
        if(check_one == false){
            result = false;
        }
    }
    else if (kids.value=="two"){
        var check_one = validateEmpty(paidi_1, document.getElementById('demo8'));
        var check_two = validateEmpty(paidi_2, document.getElementById('demo9'));
        if( check_one == false || check_two == false){
            result = false;
        }
    }
    else if (kids.value=="three"){
        var check_one = validateEmpty(paidi_1, document.getElementById('demo8'));
        var check_two = validateEmpty(paidi_2, document.getElementById('demo9'));
        var check_three = validateEmpty(paidi_3, document.getElementById('demo10'));
        if( check_one == false || check_two == false || check_three == false){
            result = false;
        }
    }
    else if (kids.value=="four_or_more"){
        var check_one = validateEmpty(paidi_1, document.getElementById('demo8'));
        var check_two = validateEmpty(paidi_2, document.getElementById('demo9'));
        var check_three = validateEmpty(paidi_3, document.getElementById('demo10'));
        var check_four = validateEmpty(paidi_4, document.getElementById('demo11'));
        if( check_one == false || check_two == false || check_three == false || check_four == false ){
            result = false;
        }
    }

    
    return result;
}

function validateAdeiaEidikouForm() {

    var result = true;
    var errors = false;

    if (validateName(document.getElementById('name1'),document.getElementById('demo'))==false){
        errors = true
    }
   
    if (validateName(document.getElementById('surname'),document.getElementById('demo1'))==false){
        errors = true
    }

    if (validateMail(document.getElementById('email'),document.getElementById('demo2'))==false){
        errors = true
    }

    if (validateNum(document.getElementById('afm'),document.getElementById('demo3'))==false){
        errors = true
    }
        
    if(validateEmpty(document.getElementById('date_from'),document.getElementById('demo4'))==false){
        errors = true      
    }

    if(validateEmpty(document.getElementById('date_to'),document.getElementById('demo5'))==false){
        errors = true      
    }

    if(validateEmpty(document.getElementById('number_of_kids'), document.getElementById('demo6'))==false){
        errors = true    
    }
    
    if(validateSelect()==false){
        errors = true      
    }

    if(validateHiddenInput()==false){
        errors = true     
    }


    if (errors == true){
        result = false;
    }

    return result;

}

function show_func() {
    var number_of_kids = document.getElementById("hidden");
    var hidden_paidi_1 = document.getElementById("hidden_paidi_1");
    var hidden_paidi_2 = document.getElementById("hidden_paidi_2");
    var hidden_paidi_3 = document.getElementById("hidden_paidi_3");
    var hidden_paidi_4 = document.getElementById("hidden_paidi_4");
    
    if (document.getElementById('number_of_kids').value == 'one'){
        number_of_kids.style.display = 'none';
        hidden_paidi_1.style.display = 'inline';
        hidden_paidi_2.style.display ='none';
        hidden_paidi_3.style.display = 'none';
        hidden_paidi_4.style.display = 'none';
        
    }
    else if (document.getElementById('number_of_kids').value == 'two'){
        number_of_kids.style.display = 'none';
        hidden_paidi_1.style.display = 'inline';
        hidden_paidi_2.style.display = 'inline';
        hidden_paidi_3.style.display = 'none';
        hidden_paidi_4.style.display = 'none';
    }
    else if(document.getElementById('number_of_kids').value == 'three'){
        number_of_kids.style.display = 'none';
        hidden_paidi_1.style.display = 'inline';
        hidden_paidi_2.style.display = 'inline';
        hidden_paidi_3.style.display = 'inline';
        hidden_paidi_4.style.display = 'none';
    }
    else if(document.getElementById('number_of_kids').value == 'four_or_more'){
        
        number_of_kids.style.display = 'inline';
        hidden_paidi_1.style.display = 'inline';
        hidden_paidi_2.style.display = 'inline';
        hidden_paidi_3.style.display = 'inline';
        hidden_paidi_4.style.display = 'inline';
        
    }
    else{
        input.style.display = 'none';
    }

    validateEmpty(document.getElementById('number_of_kids'), document.getElementById('demo6'))
         
}
