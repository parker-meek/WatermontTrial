window.onsubmit=ValidateForm;
window.onload= ConnectSQL;
function ValidateForm() {
    var fname= document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var age= document.getElementById("age").value;
    var gender = document.getElementsByName("gender");
    var practice= document.getElementsByName("practice");
    var genderValid= false;
    var practiceValid=false;
    var invalidMessages="";

    if(fname== ""){
        invalidMessages += "No First Name Provided \n"

    }
    if(lname=="") {
        invalidMessages += "No Last Name Provided \n"

    }
    if(age==""){
        invalidMessages +="No age provided\n"
    }
    var i=0;

    for(i=0;!genderValid && i < 2;i++){
        if(gender[i].checked== true)
            genderValid= true;
    }

    if(!genderValid){
        invalidMessages +="No Gender Selected\n"
    }

    i = 0;

    for(i=0; !practiceValid && i < 4;i++){
        if(practice[i].checked==true)
            practiceValid= true;

    }

    if(!practiceValid){
        invalidMessages+= "No Practices selected \n"
    }


    if(invalidMessages){
        alert(invalidMessages)
        return false
    }else{
        return true;
    }
}

function ConnectSQL() {
    var mysql = require('mysql');

    var con = mysql.createConnection({
        host: "localhost",
        user: "root",
        password: "root"
    });

    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");
    });
}