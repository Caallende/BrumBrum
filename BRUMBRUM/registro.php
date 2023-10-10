
<?php
if (isset($_POST["registrar"])) {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Hash de la contraseña (puedes usar la función password_hash)
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    // Conexión a la base de datos (asegúrate de haber establecido la conexión previamente)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "concesionaria";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consulta SQL para insertar el usuario en la base de datos
    $sql = "INSERT INTO usuarios (usuario, email, contrasena) VALUES ('$usuario', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error en el registro: " . mysqli_error($conn);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
}
?>
