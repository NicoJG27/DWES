<?php
session_start();
unset($_SESSION['visitas']);
session_destroy();
?>