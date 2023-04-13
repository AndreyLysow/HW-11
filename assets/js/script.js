
function askForBDay(){
let bday= prompt("Когда Вы родились?",((new Date()).getFullYear()-18) +"-"  + ((new Date()).getMonth()) + "-"  + ((new Date()).getDate()));
if (bday != null){
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(xhttp.response);
      specialoffer.style.display="none";
    }
  };
xhttp.open("POST", "/php/bdUpdate.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("birthday="+bday);
}
}

