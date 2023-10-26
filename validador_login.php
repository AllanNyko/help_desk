<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] == 'nao') {

  header('Location: index.php?login=erro2');
}
