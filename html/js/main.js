document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault();
  
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  
  // Tutaj możesz dodać logikę weryfikacji danych logowania
  // np. porównać je z wartościami przechowywanymi na serwerze lub w bazie danych
  
  if (username === 'admin' && password === 'password') {
    alert('Zalogowano pomyślnie!');
  } else {
    alert('Błędna nazwa użytkownika lub hasło!');
  }
});
