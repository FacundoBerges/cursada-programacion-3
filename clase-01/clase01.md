# Clase 1

_PHP (Hypertext Pre-Processor)_

Texto enriquecido, o plano, que se puede combinar con codigo HTML.

En la actualidad, el 77,2% de los sitios web se encuentran usando PHP.

## Cliente:

Dispositivos que generan peticiones hacia los servidores. Ej: ordenadores, notebooks, tablets, smart devices, etc.

## Servidor:

Ordenadores generalmente potentes, con software y hardware especializado que se encarga de resolver peticiones hechas por otros ordenadores.

#

Cuando el cliente hace una peticion, el servidor ejecuta el interprete de PHP. Este compila el codigo fuente que genera el sitio web. El resultado es enviado al navegador del cliente.

### Estructura basica:

```php
<?php

/*

El codigo va entre medio de las etiquetas de inicio `<?php` y cierre `?>`

*/

// `echo` Muestra mensajes en el navegador, no en la consola.
echo "HOLA MUNDO";

?>
```

Al igual que C o C#, las instrucciones deben finalizar con ';' (punto y coma), y la extension del archivo fuente debe ser '.php'.

```php
// Comentario en una linea.

# Otro tipo de comentario de una linea.

/*
Comentario
Multilinea
*/
```

### Tipos de datos:

Escalares:

1. Boolean
2. Integer
3. Float
4. String

Compuestos:

1. Array
2. Object

Especiales:

1. Resource
2. NULL

Declaracion de variables: `$nombreVariable = valor;`. Se infiere el tipo al asignar un valor. El signo '$' es obligatorio ya que significa la declaracion de la variable.

PHP es Case Sensitive para variables, pero no para palabras claves.

### Casteos en PHP:

Son realizados automaticamente por PHP dependiendo del contexto de la variable. Sin embargo, si se desea explicitar el casteo, existen las siguientes conversiones:

- (int), (integer) -> convierte a entero
- (bool), (boolean) -> convierte a booleano
- (float), (double), (real) -> convierte a decimal
- (string) -> convierte a cadena de caracteres
- (array) -> convierte a array
- (object) -> convierte a objeto
- (unset) -> convierte a nulo

### Operadores:

Se manejan de la misma manera que C, C#, Java.

### Estructuras de control:

La sentencia `if`, `while`, `do while` y `for` se maneja de la misma manera que C, C#, Java.

El `switch` evalua valor de variable y tipo de dato:

```php
$a = 0;

switch ($a)
{
  case 1:
    break;
  case 2:
    break;
  default:
    break;
}
```

Existe el `foreach`, que permite recorrer arrays y objetos:

```php
$vec = array(1, 2, 3);

foreach($vec as $valor)
{
  //$valor es un elemento de la colección
}
```

```php
$vec = array(“uno” => 1, “dos” => 2, “tres” => 3);

foreach($vec as $k => $valor)
{
 // $k posee la clave y $valor el elemento
}
```

## En PHP existen 3 tipos de arrays:

1. Arrays indexados (Indices numericos).
2. Arrays asociativos (Indices nombrados).
3. Arrays multidimensionales (Arrays que contienen otros arrays).

Se pueden crear usando el constructor de arrays.

### Array indexado:

```php
<?php

$vector = array(1, 2, 3);

var_dump($vector); // especie de console log para ver datos y sus tipos


// O directamente le paso el indice

$vector[0] = 1;
$vector[1] = 2;
$vector[2] = 3;

var_dump($vector);

```

### Array asociativo:

```php
<?php

$vector = array("Juan" => 22, "Romina" => 12, "Uriel" => 16);

var_dump($vector);


// O directamente le paso el indice

$vector["Hugo"] = 30;
$vector["Juana"] = 25;

var_dump($vector);

```

### Array multidimensional:

```php
<?php

$vector = array("Juan" => 22, "Romina" => 12, "Uriel" => 16);

var_dump($vector);


// O directamente le paso el indice

$vector["Hugo"] = 30;
$vector["Juana"] = 25;

var_dump($vector);

```
