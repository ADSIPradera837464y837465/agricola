<?php

/**
 * Dirección física del proyecto en el servidor
 */
define("DIR", "/Applications/MAMP/htdocs/agricola/");

/**
 * Dirección web
 */
define("URL", "http://localhost/agricola/web/");

define("DB_HOST", "localhost");
define("DRIVER", "pgsql");
define("DB_NAME", "soho_framework");
define("DB_USUARIO", "postgres");
define("DB_PASSWORD", "sqlx32");
define("DB_PORT", 5432);

define("DSN", DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT);

define("MODULO_DEFAULT", "ejemplo");
define("ACCION_DEFAULT", "index");
