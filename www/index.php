<?

echo '<h1>Olá Amigos!!!</h1>';
echo '<p> Obrigado por baixar meu projeto!!!</p>';
echo "<h3>Abaixo estão os drivers PDO que estão habilitados</h3>";
echo "<a href=http://localhost/info.php/>";
echo "<pre>";
print_r(PDO::getAvailableDrivers());

