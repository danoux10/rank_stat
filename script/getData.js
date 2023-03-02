function getData(){
  var xhr = new XMLHttpRequest();
  xhr.open('GET','controller/function/getData.php');
  xhr.send();
  xhr.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var response = JSON.parse(xhr.response);
      username.innerHTML = response.pseudo;
      tankWinView.innerHTML = response.tankWin;
      dpsWinView.innerHTML = response.dpsWin;
      healWinView.innerHTML = response.healWin;
      tankLooseView.innerHTML = response.tankLoose;
      dpsLooseView.innerHTML = response.dpsLoose;
      healLooseView.innerHTML = response.healLoose;
    }else if(this.readyState == 4 && this.status == 404){
      alert("error getData");
    }
  }
}