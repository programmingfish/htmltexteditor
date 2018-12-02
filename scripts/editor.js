//(C)Arvid Dezittere 2018
//Written by: Arvid Dezittere
window.onload = reset();
function reset(){
    console.warn("Welcome developer, user, ...! Thanks for using this. You can find the files on Github.");
}
function load(){
    document.getElementById("error").innerHTML = "No erros ;-)";
    console.warn("Loading of the content has started!");
    var style = document.getElementById("elm").value;
    if(style == "strong"){
       $("#display").css("font-weight","bold"); 
    }
    //text align: right/left/center
    if(style.indexOf('#align:') > -1){
        //text algin
        if(style.indexOf('right') > -1){
            $("#display").css("text-align","right");
        }
        if(style.indexOf('left') > -1){
            $("#display").css("text-align","left");
        }
        if(style.indexOf('center') > -1){
            $("#display").css("text-align","center");
        }
        else{
            alert("Agrument after align is missing!");
        }
    }
    if(style == "#size"){
        $("#display").css("font-size","20px");
    }
    if(style == "#title"){
        $("#display").css("font-size","35px");
        $("#display").css("text-decoration-line","underline");
    }
    if(style == "#reset"){
        $("#display").css("text-align","left");
        $("#display").css("font-weight","light");
        $("#display").css("font-size","15px");
        $("#display").css("text-decoration-line","none");
        
    }
    else{
        console.error("Error user input is not correct! \n user input: " + style);
        document.getElementById("error").innerHTML = "Error, please use the correct command!";
    }
}