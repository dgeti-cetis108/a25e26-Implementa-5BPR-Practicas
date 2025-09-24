<?php
/**
 * Reglas y convenciones PSR-1
 * 
 * - Los archivos PHP deben utilizar la etiqueta de apertura
 *   <?php y omitir la etiqueta de cierre en archivos puramente PHP.
 * - Solo se permite una declaración por archivo.
 * - Se recomienda usar namespaces para organizar el código.
 * - Nombres de clases: utilizar StudlyCaps (por ejemplo, MiClase).
 * - Nombres de métodos y funciones: utilizar camelCase 
 *   (por ejemplo, miMetodo).
 * - Definir una codificación de caracteres obligatoriamente 
 *   (por ejemplo, UTF-8 sin BOM).
 * 
 * Reglas para definir identificadores (variables o constantes):
 * 1. Deben comenzar con una letra (a-z, A-Z) o un guion bajo (_).
 * 2. Pueden contener letras, dígitos (0-9) y guiones bajos.
 * 3. Son sensibles a mayúsculas y minúsculas.
 * 4. Por convención todas las variables inician con $
 */

$nombre = "Bidkar"; // string
$edad = 45; // int
$es_docentes  = true; // boolean
$estatura = 1.8; // float
$letra = 'A'; // char

// $1nombre = 'Juan'; // error: no debe iniciar con número
