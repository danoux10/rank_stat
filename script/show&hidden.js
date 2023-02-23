responseContent.classList.add('hidden');
resetPopup.classList.add('hidden');
info.classList.add('hidden');
loginForm.classList.add('hidden');
registerForm.classList.add('hidden');

function showLogin() {
  if (loginForm.classList.contains('hidden')) {
    loginForm.classList.remove('hidden');
  }
}
function closeLogin() {
  if (!loginForm.classList.contains('hidden')) {
    loginForm.classList.add('hidden');
  }
}

function showRegister() {
  if (registerForm.classList.contains('hidden')) {
    registerForm.classList.remove('hidden');
  }
}
function closeRegister() {
  if (!registerForm.classList.contains('hidden')) {
    registerForm.classList.add('hidden');
  }
}

function showResponse(){
  if(responseContent.classList.contains('hidden')){
    responseContent.classList.remove('hidden');
  }
}
function closeResponse() {
  if (!responseContent.classList.contains('hidden')) {
    responseContent.classList.add('hidden');
  }
}

function showPopup(){
  if(resetPopup.classList.contains('hidden')){
    resetPopup.classList.remove('hidden');
  }
}
function closePopup(){
  if(!resetPopup.classList.contains('hidden')){
    resetPopup.classList.add('hidden');
  }
}

showLoginBtn.addEventListener('click',showLogin);
closeLoginBtn.addEventListener('click',closeLogin);

showRegisterBtn.addEventListener('click',showRegister);
closeRegisterBtn.addEventListener('click',closeRegister);

closeResponseBtn.addEventListener('click',closeResponse);

resetBtn.addEventListener('click',showPopup);
cancelBtn.addEventListener('click',closePopup);
validReset.addEventListener('click',closePopup);
