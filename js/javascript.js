function myFunction(){
    var x = document.getElementById("inicio");
    if(x.className === "barra"){
        x.className += " responsive";
    }else{
        x.className = "barra";
    }
}