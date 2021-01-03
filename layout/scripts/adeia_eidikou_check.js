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



// function validateSelect(){
//     var x = document.getElementsByName('rdb');
    
//     result = true;
    
//     //...

//     return result;
// }

function validateAdeiaEidikouForm() {

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

    if(validateEmpty(document.getElementById('date_to'),document.getElementById('demo5'))==false){
        errors = true;        
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

    //validateSelect();
    
}
