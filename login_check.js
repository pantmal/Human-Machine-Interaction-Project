
function validateName(){
    var x = document.getElementById('uname').value;
    var regex=/^[a-zA-ZΆ-ωΑ-ώ ]+$/ ///^[0-9]+$/;

    result = true;

    if (x == "") {
        document.getElementById("demo").innerHTML = '\u2757not empty';
        result = false;
    }else{
        document.getElementById("demo").innerHTML = '';
    }

    if (x != ''){
        if ((!x.match(regex))){
            document.getElementById("demo").innerHTML = '\u2757 not numbers';
            result = false;
        }else{
            document.getElementById("demo").innerHTML = '';
        }
    }

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

function validateForm() {

    result = true;
    errors = false;

    if(validateName()==false){
        errors = true;
        
    }
    if(validatePswd()==false){
        errors = true;        
    }

    if (errors == true){
        result = false;
    }

    return result;

}
