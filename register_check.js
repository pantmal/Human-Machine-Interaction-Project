
function validateName(){
    var x = document.getElementById('uname').value;
    var regex=/^[a-zA-ZΆ-ωΑ-ώ ]+$/ ///^[0-9]+$/;
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    result = true;

    if (x == "") {
        document.getElementById("demo").innerHTML = '\u2757not empty';
        result = false;
    }else{
        document.getElementById("demo").innerHTML = '';
    }

    // if (x != ''){
    //     if ((!x.match(regex))){
    //         document.getElementById("demo").innerHTML = '\u2757 not numbers';
    //         result = false;
    //     }else{
    //         document.getElementById("demo").innerHTML = '';
    //     }
    // }

    return result;

}

function validatePswd(){

    var y = document.getElementById('pwd').value;
    var regex=/^[0-9]+$/; ///^[A-Za-z]+$/

    result = true;

    if (y == "") {
        document.getElementById("demo2").innerHTML = '\u2757not empty';
        result = false;
    }else{
        document.getElementById("demo2").innerHTML = '';
    }

    // if (y != ''){
    //     if ((!y.match(regex))){
    //         document.getElementById("demo2").innerHTML = '\u2757 not ok';
    //         result = false;
    //     }else{
    //         document.getElementById("demo2").innerHTML = '';
    //     }
    // }

    return result;
    
}

function validateMail(){
    var x = document.getElementById('email').value;
    var regex=/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/ //XANA DESTO

    result = true;

    if (x == "") {
        document.getElementById("demo3").innerHTML = '\u2757not empty';
        result = false;
    }else{
        document.getElementById("demo3").innerHTML = '';
    }

    if (x != ''){
        if ((!x.match(regex))){
            document.getElementById("demo3").innerHTML = '\u2757 Λάθος διεύθυνση email';
            result = false;
        }else{
            document.getElementById("demo3").innerHTML = '';
        }
    }

    return result;

}

function validateNum(){
    var x = document.getElementById('afm').value;
    var regex=/^[0-9]+$/ 

    result = true;

    if (x == "") {
        document.getElementById("demo4").innerHTML = '\u2757not empty';
        result = false;
        return result; //may cause problems
    }else{
        document.getElementById("demo4").innerHTML = '';
    }
    
    if(x.length!=9){
        document.getElementById("demo4").innerHTML = '\u2757 Eisagete 9 ari8mous';
        result = false;
        return result;
    }
    if (x != ''){
        if ((!x.match(regex))){
            document.getElementById("demo4").innerHTML = '\u2757 Γράψτε μόνο αριθμούς';
            result = false;
        }else{
            document.getElementById("demo4").innerHTML = '';
        }
    }

    return result;

}

function validateFirstName(){
    var x = document.getElementById('first_name').value;
    var regex=/^[a-zA-ZΆ-ωΑ-ώ ]+$/ ///^[0-9]+$/;
    result = true;

    if (x == "") {
        document.getElementById("demo5").innerHTML = '\u2757not empty';
        result = false;
    }else{
        document.getElementById("demo5").innerHTML = '';
    }

    if (x != ''){
        if ((!x.match(regex))){
            document.getElementById("demo5").innerHTML = '\u2757 not numbers';
            result = false;
        }else{
            document.getElementById("demo5").innerHTML = '';
        }
    }

    return result;

}

function validateLastName(){
    var x = document.getElementById('last_name').value;
    var regex=/^[a-zA-ZΆ-ωΑ-ώ ]+$/ ///^[0-9]+$/;
    result = true;

    if (x == "") {
        document.getElementById("demo6").innerHTML = '\u2757not empty';
        result = false;
    }else{
        document.getElementById("demo6").innerHTML = '';
    }

    if (x != ''){
        if ((!x.match(regex))){
            document.getElementById("demo6").innerHTML = '\u2757 not numbers';
            result = false;
        }else{
            document.getElementById("demo6").innerHTML = '';
        }
    }

    return result;

}

function validateRole(){ //doesn't work for on change
    var x = document.getElementsByName('rdb');
    
    
    result = true;
    
    if (x[0].checked == false && x[1].checked == false ) {
        document.getElementById("demo7").innerHTML = '\u2757not empty';
        result = false;
    }else{
        document.getElementById("demo7").innerHTML = '';
    }

   
    return result;

}

function validateForm() {

    result = true;
    errors = false;

    if(validateName()==false){
        errors = true;   
    }

    if(validatePswd()==false){
        errors = true;        
    }

    if(validateMail()==false){
        errors = true;   
    }

    if(validateNum()==false){
        errors = true;   
    }

    if(validateFirstName()==false){
        errors = true;   
    }
    
    if(validateLastName()==false){
        errors = true;   
    }

    if(validateRole()==false){
       errors = true;   
    }

    if (errors == true){
        result = false;
    }

    return result;

}
