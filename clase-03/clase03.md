# Clase 3

<br>

## Archivos en PHP:

Se pueden manejar tanto archivos de texto como binarios desde PHP. Algunas de las funciones son `fopen` (abrir), `fclose` (cerrar), `fwrite / fputs` (escribir), `fread / fgets` (leer), `copy` (copiar), `unlink` (eliminar).

### Abrir archivos

`fopen()` nos permite abrir un archivo tanto de manera local como externa ("http://" o "ftp://").
El primer parametro de 'fopen' contiene el nombre del archivo a ser abierto, y el segundo especifica el modo en que el archivo sera abierto.
El valor de retorno de fopen es un entero. Este va a servir para referenciar al archivo abierto.

```php
// int fopen(archivo, modo);
$archivo = fopen("nombre-archivo.txt", "r");
```

Modos de apertura de un archivo:

```
Modo - Descripcion

`r` => Abre un archivo para solo lectura. El cursor comienza al principio del archivo.

`r+` => Abre un archivo para lectura y escritura. El cursor comienza al principio del archivo.

`w` => Abre un archivo para solo escritura. El cursor comienza al principio del archivo y trunca el fichero a longitud cero (borra todo su contenido). Si el archivo no existe, intenta crearlo.

`w+` => Abre un archivo para lectura y escritura. El cursor comienza al principio del archivo y trunca el fichero a longitud cero (borra todo su contenido). Si el archivo no existe, intenta crearlo.

`a` => Abre un archivo para solo escritura. El cursor comienza al final del archivo. Si el archivo no existe, intenta crearlo.

`a+` => Abre un archivo para lectura y escritura. El cursor comienza al final del archivo. Si el archivo no existe, intenta crearlo.

`x` => Crea un nuevo archivo para solo lectura. Retorna `false` y un error si el archivo ya existe.

`x+` => Crea y abre un archivo para lectura y escritura. Retorna `false` y un error si el archivo ya existe.
```

### Cerrar archivos

`fclose()` nos permite cerrar un archivo abierto. El parametro de 'fclose' recibe la variable con referencia al archivo a cerrar. Retorna `true` si tuvo exito al cerrar el archivo, caso contrario retorna `false`.

```php
// abro archivo
$archivo = fopen("nombre-archivo.txt", "r");

/*
se trabaja con el archivo
*/

// lo cierro
fclose($archivo);
```

### Leer archivos

`fread()` nos permite leer un archivo abierto previamente. El primer parametro de 'fread' recibe la variable con referencia al archivo a leer, mientras que el segundo parametro recibe la cantidad maxima de bytes que seran leidos. Retorna un `string` que representa el contenido del archivo leido.

```php
$archivo = fopen("nombre-archivo.txt", "r");

// leo el archivo completo y lo muestro con un `echo`
echo fread($archivo, filesize("nombre-archivo.txt"));


fclose($archivo);
```

`fgets()` nos permite leer una linea de un archivo abierto previamente. El parametro de 'fgets' recibe la variable con referencia al archivo a leer. Despues de cada llamada a 'fgets', el cursor se mueve a la siguiente linea.

```php
$archivo = fopen("nombre-archivo.txt", "r");

// leo una linea del archivo y lo muestro con un `echo`
echo fgets($archivo);


fclose($archivo);
```

`feof()` (end of file) retorna un booleano confirmando si se llego (o no) al final del archivo. El parametro de 'feof' recibe la variable con referencia al archivo a chequear.

```php
$archivo = fopen("nombre-archivo.txt", "r");

// leo cada linea del archivo y lo muestro con un `echo`, hasta que llegue al final del archivo.
while(! feof($archivo))
{
  echo fgets($archivo) . "<br>";
}


fclose($archivo);
```

### Escribir archivos

`fwrite()` | `fputs()` nos permiten escribir un archivo abierto previamente. La funcion finalizara cuando llegue al final del archivo, o cuando alcance la longitud especificada.

El primer parametro recibe la variable con referencia al archivo a leer, y el segundo, el `string` a ser escrito. El tercer parametro es opcional, y recibe la cantidad de bytes a escribir.
Retorna la cantidad de bytes que se escribieron, o `false` si hubo error.

Usando 'fwrite':

```php
$archivo = fopen("nombre-archivo.txt", "w");

echo fwrite($archivo, "probando guardado con fwrite");

fclose($archivo);
```

Usando 'fputs':

```php
$archivo = fopen("nombre-archivo.txt", "w");

echo fputs($archivo, "probando guardado con fputs");

fclose($archivo);
```

### Copiar archivos

`copy()` permite copiar un archivo. Los parametros que recibe son los nombres de los archivos. El primer parametro es el nombre del archivo de origen, y el segundo el nombre del archivo destino. Retorna `true` en caso de exito, o `false` si hubo error.

```php
echo copy("archivo-a-copiar.txt", "archivo-copiado.txt");
```

### Borrar archivos

`unlink()` permite eliminar un archivo. Recibe un unico parametro con el nombre del archivo a borrar. Retorna `true` en caso de exito, o `false` si hubo error.

```php
echo unlink("archivo-a-borrar.txt");
```

<br>

## HTTP en PHP:

### Introduccion

`HTTP` esta diseñado para permitir comunicaciones entre clientes y servidores. Funciona como un protocolo de pedido-respuesta entre cliente y servidor.

Un navegador web puede ser el cliente y una aplicacion sobre un computador que aloja un sitio web puede ser el servido. El servidor, a su vez, en caso de que necesite o requiera solicitar informacion a otro servidor, pasa a ser a la vez cliente.

### GET

Es el metodo por defecto de cualquier navegador. Para hacer otro tipo de peticion se debe hacer desde HTML o JavaScript.
El par de nombres/valores es enviado en la direccion URL (texto claro).

Las peticiones `get` se pueden almacenar en cache, pueden ser marcadas como favoritos (book marked) y permanecen en el historial de navegacion. Su longitud maxima tiene una limitacion de 2048 caracteres de URL.

Nunca debe ser utilizado para tratar datos confidenciales. No tiene body, la unica forma de enviar informacion es a partir de `query params`.

### POST

El par de nombres/valores es enviado en el body de la peticion.

Las peticiones `post` no se pueden almacenar en cache, ni pueden ser marcadas como favoritos (book marked), ni tampoco permanecen en el historial de navegacion.

No tiene restricción de longitud de datos.

### Manejo de formularios

Tanto 'get' como 'post' crean un array asociativo. Este array contiene pares clave/valor (key-value pair) donde las claves son los nombres (atributo name) de los controles del formulario, y los valores son la entrada de datos del usuario.

PHP utiliza las variables super globales `$_GET`, `$_POST` y `$_REQUEST` para recolectar datos provenientes de un formulario.

```php
/*
  $_GET() es un array pasado por GET.
  $_POST() es un array pasado por POST.
  $_REQUEST() es un array asociativo que contiene $_GET(), $_POST(), y $_COOKIE().
*/
```
