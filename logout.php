<?php
session_start();
// hapus semua data session
session_unset();
// hancurkan session
session_destroy();
// ke halaman awal
header("Location: index.php");
exit;
?>
