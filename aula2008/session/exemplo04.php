<?php

require_once "config.php";

echo "<h1>Seção atual: " . session_id() . "</h1>";

session_regenerate_id();

echo "<h1>Seção atualizada: " . session_id() . "</h1>";