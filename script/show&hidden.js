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
function clooseLogin() {
  if (!loginForm.classList.contains('hidden')) {
    loginForm.classList.add('hidden');
  }
}

function showRegister() {
  if (registerForm.classList.contains('hidden')) {
    registerForm.classList.remove('hidden');
  }
}
function clooseRegister() {
  if (!registerForm.classList.contains('hidden')) {
    registerForm.classList.add('hidden');
  }
}

function showResponse(){
  if(responseContent.classList.contains('hidden')){
    responseContent.classList.remove('hidden');
  }
}
function clooseResponse() {
  if (!responseContent.classList.contains('hidden')) {
    responseContent.classList.add('hidden');
  }
}

function showPopup(){
  if(resetPopup.classList.contains('hidden')){
    resetPopup.classList.remove('hidden');
  }
}
function cloosePopup(){
  if(!resetPopup.classList.contains('hidden')){
    resetPopup.classList.add('hidden');
  }
}

showLoginBtn.addEventListener('click',showLogin);
clooseLoginBtn.addEventListener('click',clooseLogin);

showRegisterBtn.addEventListener('click',showRegister);
clooseRegisterBtn.addEventListener('click',clooseRegister);

clooseResponseBtn.addEventListener('click',clooseResponse);

resetBtn.addEventListener('click',showPopup);
cancelBtn.addEventListener('click',cloosePopup);
validReset.addEventListener('click',cloosePopup);
