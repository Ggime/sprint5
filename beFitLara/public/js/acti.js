window.onload = function(){

var form = document.querySelector('#agract');

var theInputs = form.elements;
theInputs = Array.from(theInputs);
theInputs.pop();
console.log(theInputs);
for (var input of theInputs) {
  input.addEventListener('blur', function () {
    if (this.value.trim() === '') {
      this.classList.add('is-invalid');
      this.parentNode.querySelector('div').classList.add('error');
      this.parentNode.querySelector('div').innerHTML = 'Este campo es <b>obligatorio</b>';
    } else {
      this.classList.remove('is-invalid');
      this.parentNode.querySelector('div').classList.remove('error');
      this.parentNode.querySelector('div').innerHTML = '';
    }
  });
};

form.onsubmit = function (ev) {

  if (
    theInputs[1].value.trim() === '' ||
    theInputs[2].value.trim() === '' ||
    theInputs[3].value.trim() === '' ||
    theInputs[4].value.trim() === '' ||
    theInputs[5].value.trim() === '' ||
    theInputs[6].value.trim() === '' ||
    theInputs[7].value.trim() === '' ||
    theInputs[8].value.trim() === '' ||
    theInputs[9].value.trim() === ''  )
     {
    ev.preventDefault();
    window.alert('Completa todos los campos');
  }
};

};
