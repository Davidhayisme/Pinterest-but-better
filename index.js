function checkk(){
    var username = document.getElementById("username").Value;
    var password = document.getElementById("password").Value;
}
if (username == "admin" && password=="username"){
    alert("success");
    window.location="http://localhost:8080/"
    return false; 
}
else{
    alert("fail")
}