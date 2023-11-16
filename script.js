const buttonn = document.getElementById("buttom1"); 
buttonn.addEventListener("click",function(){
    const post = document.getElementById("input1").value; 
    envia(post);
});
document.addEventListener("keydown", function(event){
    if (event.keyCode === 13) {
    const post = document.getElementById("input1").value; 
    envia(post);
    }});
function envia(post){
var xmlhttp = new XMLHttpRequest();

// Especifica o método e o arquivo PHP que receberá os dados
xmlhttp.open("GET", "script3php.php?Mensag=" + post, true);
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var resposta=this.responseText;
      console.log(resposta);
    }
  };

  xmlhttp.send();
}
/*[{
    "Mensagens":["1","4","5"]
}] */