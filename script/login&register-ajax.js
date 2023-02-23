//link register
function registerAjax(event) {
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'controller/function/login&register.php?task=register');
  var data = new FormData(this);
  xhr.send(data);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = JSON.parse(this.response);
      //sublink register error
      if (response.sucReg == 0) {
        showResponse();
        responseContent.classList.add('error');
        responseContent.classList.remove('success');
        responseForm.innerHTML = 'Pseudo Déjà existant';
      }
      //sublink register success
      if(response.sucReg == 1) {
        showResponse();
        responseContent.classList.add('success');
        responseContent.classList.remove('error');
        responseForm.innerHTML = 'Pseudo Ajouter avec success';
        registerInput.value = '';
        closeRegister();
      }
    } else if (xhr.readyState == 4) {
      alert('error register');
    }
  }
  return false;
}

registerForm.addEventListener('submit', registerAjax);

//link login
function loginAjax(event) {
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'controller/function/login&register.php?task=login');
  var data = new FormData(this);
  xhr.send(data);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = JSON.parse(this.response);
      //sublink login error
      if(response.sucLog == 0){
        showResponse();
        responseContent.classList.add('error');
        responseContent.classList.remove('success');
        responseForm.innerHTML = 'Pseudo Incorrect';
      }
      //sublink login success
      if (response.sucLog == 1){
        headerContent.classList.add('hidden');
        registerForm.classList.add('hidden');
        getData();
        loginInput.value = '';
        loginForm.classList.add('hidden');
        info.classList.remove('hidden');
        closeResponse();
      }
    } else if (xhr.readyState == 4) {
      alert('error login');
    }
  }
  return false;
}

loginForm.addEventListener('submit', loginAjax);

function deconnexionAjax(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'controller/function/login&register.php?task=deconnexion');
  var data = new FormData(this);
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      console.log(this.responseText);
      var response = JSON.parse(this.response);
      if(response.sucDec == 1){
        headerContent.classList.remove('hidden');
        info.classList.add('hidden');
      }
    }else if (xhr.readyState ==4){
      alert('error deconnexion');
    }
  }
  return false;
}

deconnexion.addEventListener('submit',deconnexionAjax);