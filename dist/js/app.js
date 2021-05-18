
function myOptions(){
    let opt = document.getElementById("options").value;

    if (opt == 'Promoted'){
        $('#promo_level').css('display','block');
        $('#des').css('display','block');
        $('#submit').removeAttr('disabled')
    }else if(opt == 'Not Promoted'){
        $('#promo_level').css('display','none');
        $('#des').css('display','block');
        $('#submit').removeAttr('disabled')
    }
    else {
        $('#promo_level').css('display','none');
        $('#des').css('display','none');
        $('#submit').attr('disabled','true')
    }

}





                     