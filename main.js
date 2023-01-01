function textchecker() {
    var email = document.getElementById("getemail");
    if (email.value == "") {
        alert("Please give your email");
    } else {
        alert("you entered : " + email.value);
    }
}

function docal()
{
    var p=document.getElementById("principal");
    
    var t=document.getElementById("time");
    
    var r=document.getElementById("rate");

    var si=(p*t*r)/100;
    return si;

}