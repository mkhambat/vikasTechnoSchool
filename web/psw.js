$(document).ready(function() {
    $(".registrationFormAlert").hide();
    function checkPasswordMatch(password,confirmPassword) {
        // alert(password)
        // alert(confirmPassword)
        // if (password.length==confirmPassword.length){
        //   confirmPassword=confirmPassword+'0'
        //  }


        if (password != confirmPassword) {
            $("#buttonActivate").prop("disabled", true);
            $(".registrationFormAlert").show();
            return false;
        }
        else {
            $("#buttonActivate").prop("disabled", false);
            $(".registrationFormAlert").hide();
            return true;
        }

    }

    $("input").keyup(function() {
        var password = $("#psw").val();
        var confirmPassword = $("#psw-repeat").val();
        if (password.length >= 8 && confirmPassword.length >= 8) {
          checkPasswordMatch(password,confirmPassword);
      }

    });
});
