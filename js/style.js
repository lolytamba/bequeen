function cekPassword(){ 
    
    var password            = $("#password").val();
    var confirm_password    = $("#confirm").val();

    if(password != "" && confirm_password !=""){
        if (password != confirm_password) {
            $("#password").css({"border-color": "red"});
            $("#confirm").css({'border-color': "#c33"});
            $("#btnSubmit").attr("disabled", "disabled");
            $("#errorMsg").html("Password do not match.");
            $("#errorMsg").css("display", "block");
        }     
        else{
            $('.submit').prop("disabled", true);
            $('.submit').removeAttr("disabled");
        }
    }
}

function cekform(){
    var sMsg="";
    var re = new RegExp("^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$");

    if(document.forms["signup"]["name"].value==""){
        sMsg +=("\n* Anda belum mengisikan nama");
    }
    if(document.forms["signup"]["no_hp"].value==""){
        sMsg +=("\n* Anda belum mengisikan No Handphone");
    }
    if(document.forms["signup"]["email"].value==""){
        sMsg +=("\n* Anda belum mengisikan email");
    }
    if(!(re.test(document.forms["signup"]["email"].value))){
        sMsg +=("\n* Email Tidak Sesuai Format");
    }
    if(document.forms["signup"]["password"].value==""){
        sMsg +=("\n* Anda belum mengisikan Password");
    }
    if(document.forms["signup"]["confirm"].value==""){
        sMsg +=("\n* Anda belum mengisikan Confirm Password");
    }
    if(sMsg!=""){
        alert("Peringatan: \n" +sMsg);
        return false;
    }
    else    
        return true;
}

function cekform2(){
    var sMsg="";
    var re = new RegExp("^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$");

    if(document.forms["sigin"]["email"].value==""){
        sMsg +=("\n* Anda belum mengisikan Email");
    }
   
    if(document.forms["signin"]["password"].value==""){
        sMsg +=("\n* Anda belum mengisikan Password");
    }
   
    if(sMsg!=""){
        alert("Peringatan: \n" +sMsg);
        return false;
    }
    else    
        return true;
}



