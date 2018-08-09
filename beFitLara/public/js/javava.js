window.onload = function () {
	var form = document.querySelector('#regis');

	var theInputs = form.elements;
	theInputs = Array.from(theInputs);
	theInputs.pop();

  var nombre = theInputs[1]
  var apellido = theInputs[2]
  var telefono = theInputs[3]
  var email = theInputs[4]
  var edad = theInputs[5]
  var barrio = theInputs[6]
  var pass = theInputs[8]
  var repass = theInputs[9]

	for (var input of theInputs) {
		input.addEventListener('blur', function () {
			if (this.value.trim() === '') {
				this.classList.add('is-invalid');
				this.parentNode.querySelector('div').classList.add('error');
				this.parentNode.querySelector('div').innerHTML = 'Campo <b>obligatorio</b>';
			} else {
				this.classList.remove('is-invalid');
				this.parentNode.querySelector('div').classList.remove('error');
				this.parentNode.querySelector('div').innerHTML = '';
			}
		});
	}


  var regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;



	email.addEventListener('blur', function () {
		if (!regexEmail.test(this.value)) {
			this.classList.add('is-invalid');
			this.parentNode.querySelector('div').classList.add('error');
			this.parentNode.querySelector('div').innerHTML = 'Formato de <b>email invalido</b>';
		} else {
			this.classList.remove('is-invalid');
			this.parentNode.querySelector('div').classList.remove('error');
			this.parentNode.querySelector('div').innerHTML = '';
		}
	});
     pass.addEventListener('blur', function() {
       var textLength = this.value.length;
         if(textLength < 6) {
          this.classList.add('is-invalid');
     			this.parentNode.querySelector('div').classList.add('error');
     			this.parentNode.querySelector('div').innerHTML = 'Minimo <b>6 caracteres</b>';
        } else {
          this.classList.remove('is-invalid');
    			this.parentNode.querySelector('div').classList.remove('error');
    			this.parentNode.querySelector('div').innerHTML = '';
        }
});

function diferentPassword() {
    if (pass.value != repass.value) {
        pass.classList.add('is-invalid');
        pass.parentNode.querySelector('div').classList.add('error');
        pass.parentNode.querySelector('div').innerHTML = 'Las password no coinciden';
        return true;
    } else {
      pass.classList.remove('is-invalid');
      pass.parentNode.querySelector('div').classList.remove('error');
      pass.parentNode.querySelector('div').innerHTML = '';
      return false;
     }
};
telefono.addEventListener('blur', function(){
		 if(isNaN(telefono.value)){
			 telefono.classList.add('is-invalid');
			 telefono.parentNode.querySelector('div').classList.add('error');
			 telefono.parentNode.querySelector('div').innerHTML = 'El telefono tiene que ser numerico';
		 } else {
			 telefono.classList.remove('is-invalid');
			 telefono.parentNode.querySelector('div').classList.remove('error');
			 telefono.parentNode.querySelector('div').innerHTML = '';
		 }
	 });
 		function phonenumber()
			{
  		var phoneno = /^\d{10}$/;
  		if(telefono.value.match(phoneno) ){
				telefono.classList.remove('is-invalid');
	      telefono.parentNode.querySelector('div').classList.remove('error');
	      telefono.parentNode.querySelector('div').innerHTML = '';
      	return true;
	        	}
	      else
        	{
					telefono.classList.add('is-invalid');
		      telefono.parentNode.querySelector('div').classList.add('error');
		      telefono.parentNode.querySelector('div').innerHTML = 'El numero debe tener 10 digitos';
        	return false;
        	}
			};

	form.onsubmit = function (ev) {
    ev.preventDefault();
		if (
			nombre.value.trim() != '' &&
      apellido.value.trim() != '' &&
      phonenumber() &&
      edad.value.trim() != '' &&
      email.value.trim() != '' &&
      barrio.value.trim() != '' &&
      pass.value.length >= 6 &&
			regexEmail.test(email.value) &&
      !diferentPassword()
		) {
			this.submit()
		} else {
      	
    }
	};


};
