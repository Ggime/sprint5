window.onload = function () {
 var form = document.querySelector('#login');

 var regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

    var inputEmail = form.querySelector('input[name=email]');

    inputEmail.addEventListener('blur', function () {
        if (!regexEmail.test(this.value)) {
            this.classList.add('is-invalid');
            this.parentNode.querySelector('div').classList.add('error');
            this.parentNode.querySelector('div').innerHTML = 'Formato de <b>email inválido</b>';
        } else {
            this.classList.remove('is-invalid');
            this.parentNode.querySelector('div').classList.remove('error');
            this.parentNode.querySelector('div').innerHTML = '';
        }
    });

 var inputPass = form.querySelector('input[name=password]');

 inputPass.addEventListener('blur', function () {
          if (this.value.trim() === '') {
            this.classList.add('is-invalid');
            this.parentNode.querySelector('div').classList.add('error');
            this.parentNode.querySelector('div').innerHTML = 'Ingresa tu <b>contraseña</b>';
        } else {
            this.classList.remove('is-invalid');
            this.parentNode.querySelector('div').classList.remove('error');
            this.parentNode.querySelector('div').innerHTML = '';
        }
    });

};
