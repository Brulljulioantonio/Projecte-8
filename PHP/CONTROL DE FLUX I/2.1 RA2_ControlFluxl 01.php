# Què fa el programa: comprova si es major, menor o igual que zero
# Autor: Biel Rull Simon
# Data: 1/10/25

# Versió 1.0

<?php
$num = intval(readline("Introdueix un número: "));

if ($num > 0) {
    echo "major a 0\n";
}
if ($num < 0) {
    echo "menor que 0\n";
}
if ($num == 0) {
    echo "igual a 0\n";
}
?>
