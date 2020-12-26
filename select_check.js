

{/* <div id='hidden' style="display: none;">
		<label for="number">Αριθμός Παιδιών(4+): <span>*</span></label>
    <input type="text" name="number_of_kids" pattern="\d*" maxlength="2" required>
    </div> */}


function change_func() {
    var input = document.getElementById("hidden");
    
    if (document.getElementById('cars44').value == 'four_or_more'){
        input.style.display = 'inline';
    }else{
        input.style.display = 'none';
    }

    // for (var i = 0; i < inputs.length; ++i)   
    // {
    //     if(i < document.getElementById('combo').value){
    //         inputs[i].style.display = 'inline';
    //     } else {
    //         inputs[i].style.display = 'none';
    //     }
    // }

}