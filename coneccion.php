<?php
$host = 'db.fyhivuwvbclomjriguhs.supabase.co';
$db = 'postgres';
$user = 'postgres';
$pass = '';
$port = "5432";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a Supabase!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
