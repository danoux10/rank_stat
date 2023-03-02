//link set bloc
const responseContent = document.getElementById('response');
const headerContent = document.getElementById('header-content');
const info = document.getElementById('info');
const resetPopup = document.getElementById('confirm-popup');

//link form bloc
const loginForm = document.getElementById('login');
const registerForm = document.getElementById('register');
const deconnexion = document.getElementById('deconnexion');

//win
const tankWinDecForm = document.getElementById('winTankDec');
const tankWinIncForm = document.getElementById('winTankInc');

const dpsWinDecForm = document.getElementById('winDpsDec');
const dpsWinIncForm = document.getElementById('winDpsInc');

const healWinDecForm = document.getElementById('winHealDec');
const healWinIncForm = document.getElementById('winHealInc');

//loose
const tankLooseDecForm = document.getElementById('looseTankDec');
const tankLooseIncForm = document.getElementById('looseTankInc');

const dpsLooseDecForm = document.getElementById('looseDpsDec');
const dpsLooseIncForm = document.getElementById('looseDpsInc');

const healLooseDecForm = document.getElementById('looseHealDec');
const healLooseIncForm = document.getElementById('looseHealInc');

const resetAllForm = document.getElementById('resetAll');

//link view data
const responseForm = document.getElementById('response-form');

const username = document.getElementById('username');
const tankWinView = document.getElementById('tank-win');
const dpsWinView = document.getElementById('dps-win');
const healWinView = document.getElementById('heal-win');
const tankLooseView = document.getElementById('tank-loose');
const dpsLooseView = document.getElementById('dps-loose');
const healLooseView = document.getElementById('heal-loose');

//link input
const loginInput = document.getElementById('login-pseudo');
const registerInput = document.getElementById('register-pseudo');

const tankWinData = document.getElementsByName('winTank');
const dpsWinData = document.getElementsByName('winDps');
const healWinData = document.getElementsByName('winHeal');
const tankLooseData = document.getElementsByName('looseTank');
const dpsLooseData = document.getElementsByName('looseDps');
const healLooseData = document.getElementsByName('looseHeal');

//link set btn
const showLoginBtn = document.getElementById('login-btn');
const showRegisterBtn = document.getElementById('register-btn');
const clooseLoginBtn = document.getElementById('login-cloose');
const clooseRegisterBtn = document.getElementById('register-cloose');
const clooseResponseBtn = document.getElementById('response-cloose');
const resetBtn = document.getElementById('reset-btn');
const cancelBtn = document.getElementById('cancel-reset');
const validReset = document.getElementById('valid-reset');
