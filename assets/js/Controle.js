function showDiv(div, act){
    if(act === "1"){
        document.getElementById(div).style.display = "block";
    } else if(act === "0"){
        document.getElementById(div).style.display = "none";
    }
}