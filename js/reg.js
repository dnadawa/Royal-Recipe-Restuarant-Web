password=document.getElementById("pass");
repassword=document.getElementById("repass");

pass=password.value;
repass=repassword.value;

$(document).ready(function(){
    $("#repass").hover(function(){
            alert("You entered p1!");
        },
        function(){
            alert("Bye! You now leave p1!");
        });
});