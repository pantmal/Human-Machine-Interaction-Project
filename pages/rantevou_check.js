function validateName(id,demo){
    var x = id
    var regex=/^[a-zA-ZΆ-ωΑ-ώ ]+$/ ///^[0-9]+$/;

    result = true;
    console.log(x);

    if (x == "") {
        demo.innerHTML = '\u2757not empty';
        result = false;
    }else{
       demo.innerHTML = '';
    }

    if (x != ''){
        if ((!x.match(regex))){
            demo.innerHTML = '\u2757 not numbers';
            result = false;
        }else{
            demo.innerHTML = '';
        }
    }

    return result;

}

function validateMail(id,demo){
    var x = id
    var regex=/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/ //XANA DESTO

    result = true;
    console.log(x);

    if (x == "") {
        demo.innerHTML = '\u2757not empty';
        result = false;
    }else{
       demo.innerHTML = '';
    }

    if (x != ''){
        if ((!x.match(regex))){
            demo.innerHTML = '\u2757 Λάθος διεύθυνση email';
            result = false;
        }else{
            demo.innerHTML = '';
        }
    }

    return result;

}

function validateNum(id,demo){
    var x = id
    var regex=/^[0-9]+$/ 

    result = true;
    console.log(x);

    if (x == "") {
        demo.innerHTML = '\u2757not empty';
        result = false;
    }else{
       demo.innerHTML = '';
    }
    
    if(x.length!=9)
    {demo.innerHTML = '\u2757 Eisagete 9 ari8mous';
            result = false;
            return result;
    }
    if (x != ''){
        if ((!x.match(regex))){
            demo.innerHTML = '\u2757 Γράψτε μόνο αριθμούς';
            result = false;
        }else{
            demo.innerHTML = '';
        }
    }

    return result;

}

function validateDate(id,demo){
    var x = id
    

    result = true;
    console.log(x);

    if (x == "") {
        demo.innerHTML = '\u2757not empty';
        result = false;
    }else{
       demo.innerHTML = '';
    }

    

    return result;

}

// function validateForm() {

//     result = true;
//     errors = false;

   
        
    
//     if(validateDate(document.getElementById('date_from').value,document.getElementById('demo4'))==false){
//         errors = true;        
//     }

//     if (errors == true){
//         result = false;
//     }

//     return result;

// }

function show_func() {
    var number_of_kids = document.getElementById("hidden");
    var hidden_paidi_1= document.getElementById("hidden_paidi_1");
    var hidden_paidi_2=document.getElementById("hidden_paidi_2");
    var hidden_paidi_3=document.getElementById("hidden_paidi_3");
    var hidden_paidi_4=document.getElementById("hidden_paidi_4");
    
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
    
    

}