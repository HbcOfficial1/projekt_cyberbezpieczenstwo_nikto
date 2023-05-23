<?php
// Sprawdź poprawność danych logowania
$username = $_POST['username'];
$password = $_POST['password'];

// Tutaj możesz dodać logikę weryfikacji danych logowania, np. porównanie z danymi w bazie danych

// Jeśli dane logowania są poprawne
if ($username === 'admin' && $password === 'password') {
    // Przekieruj na inną stronę po zalogowaniu
    header('Location: welcome.php');
    exit;
} else {
    // Dane logowania są niepoprawne, możesz wyświetlić komunikat błędu
    echo 'Nieprawidłowa nazwa użytkownika lub hasło.';
}
?>
