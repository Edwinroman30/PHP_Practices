
<?php
// Vamos a mostrar un PDF
header('Content-type: application/pdf');

// Se llamará downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

// La fuente de PDF se encuentra en original.pdf
readfile('C:\Users\a19a64629\Documents\IB\Programación\PHP.pdf');

?>
