//link function for form
//sublink tank dec form
function tankWinDec(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=winTankDec');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error tank dec');
    }
  }
  return false;
}
//sublink tank inc form
function tankWinInc(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=winTankInc');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error tank inc');
    }
  }
  return false;
}

//sublink dps dec form
function dpsWinDec(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=winDpsDec');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error dps dec');
    }
  }
  return false;
}
//sublink dps inc form
function dpsWinInc(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=winDpsInc');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error dps inc');
    }
  }
  return false;
}

//sublink heal dec form
function healWinDec(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=winHealDec');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error heal dec');
    }
  }
  return false;
}
//sublink heak inc form
function healWinInc(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=winHealInc');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error heal inc');
    }
  }
  return false;
}

//sublink loose form
//link function for form
//sublink tank dec form
function tankLooseDec(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=looseTankDec');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error tank dec');
    }
  }
  return false;
}
//sublink tank inc form
function tankLooseInc(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=looseTankInc');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error tank inc');
    }
  }
  return false;
}

//sublink dps dec form
function dpsLooseDec(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=looseDpsDec');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error dps dec');
    }
  }
  return false;
}
//sublink dps inc form
function dpsLooseInc(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=looseDpsInc');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error dps inc');
    }
  }
  return false;
}

//sublink heal dec form
function healLooseDec(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=looseHealDec');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error heal dec');
    }
  }
  return false;
}
//sublink heak inc form
function healLooseInc(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=looseHealInc');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error heal inc');
    }
  }
  return false;
}

//sublink reset form
function resetAll(event){
  event.preventDefault();
  var xhr = new XMLHttpRequest();
  var data = new FormData(this);
  xhr.open('POST','controller/function/updateData.php?task=resetAll');
  xhr.send(data);
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200){
      var response = JSON.stringify(this.response);
      getData();
    }else if (xhr.readyState == 4){
      alert('error reset');
    }
  }
  return false;
}

// link event for form
tankWinDecForm.addEventListener('submit',tankWinDec);
tankWinIncForm.addEventListener('submit',tankWinInc);

dpsWinDecForm.addEventListener('submit',dpsWinDec);
dpsWinIncForm.addEventListener('submit',dpsWinInc);

healWinDecForm.addEventListener('submit',healWinDec);
healWinIncForm.addEventListener('submit',healWinInc);

tankLooseDecForm.addEventListener('submit',tankLooseDec);
tankLooseIncForm.addEventListener('submit',tankLooseInc);

dpsLooseDecForm.addEventListener('submit',dpsLooseDec);
dpsLooseIncForm.addEventListener('submit',dpsLooseInc);

healLooseDecForm.addEventListener('submit',healLooseDec);
healLooseIncForm.addEventListener('submit',healLooseInc);


resetAllForm.addEventListener('submit',resetAll);