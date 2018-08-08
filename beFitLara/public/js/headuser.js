 window.addEventListener('load', function(){
  fetch('http://localhost:8000/api/cantidadUsuarios')
    .then(function(res){
      return res.json()
    }).then(function(res){
      document.getElementById('cant').innerText = res
    }).catch(function(err){
      console.error(err)
    })
});
