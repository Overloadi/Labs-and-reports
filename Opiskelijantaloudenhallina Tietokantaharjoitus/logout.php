<?php
session_save_path('php_sessions');
session_start();
echo "Kirjauduit ulos <br>";
echo "<a href='index.php'>Takaisn kirjautumissivulle</a>";
session_unset();
session_destroy();  
?>