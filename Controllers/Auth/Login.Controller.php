<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  require __DIR__ . '/../../Views/Auth/Login.php';
  die();
}
