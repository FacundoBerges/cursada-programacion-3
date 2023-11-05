# Clase 4

<br>

## Subir archivos al servidor:

### Introduccion:

Para poder subir archivos al servidor, es necesario crear un formulario en HTML que le permita a los usuarios seleccionar un archivo.

- El metodo del formulario debe ser `post`.
- El formulario necesita del atributo `enctype`. Dicho atributo especifica el contenido / tipo a usarse cuando se envia el formulario.
- El input de tipo `file` permite mostrar una ventana modal para navegar en busca del archivo a subir.

Sin lo mencionado, el archivo fallara al subirse.

### Subir archivos al servidor

Del lado del servidor, tenemos que manipular el archivo recibido en `$_FILES`. Utilizando funciones de PHP, debemos mover el archivo subido desde su ubicacion temporal a la ubicacion definitiva dentro del servidor.

```php
// Ruta donde guardar el archivo.
$destino = "uploads/".$_FILES["archivo"]["name"];

// Mover el archivo subido desde su ubicacion temporal a un destino.
move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);
```

`$_FILES` es una variable super global que existe a partir de PHP 4.1.0. Es un array asociativo de elementos cargados al script actual a traves del metodo 'post'.

- `name` - nombre del archivo (con su extension).
- `type` - tipo del archivo (dado por el navegador).
- `tmp_name` - carpeta temporal donde se guardara el archivo subido.
- `error` - codigo de error (si es 0, no hubo errores).
- `size` - tamano del archivo, medido en bytes.

### Atributos

El atributo booleano `multiple` de HTML5 permite que los usuarios seleccionen varios archivos a ser subidos al servidor.

El atributo accept permite filtrar (en el cliente) los tipos de archivos que se permitiran subir al servidor.

<br>

## Variables de sesion:

### Introduccion

Las `variables de sesion` son una forma de guardar informacion de un usuario particular, que puede ser usada en distintas paginas del sitio web.

La informacion NO es almacenada en el cliente. Dado que HTTP no mantiene estado entre paginas, la utilizacion de variables de sesion permite mantener informacion acerca de un solo usuario, y estan disponibles para todas las paginas del sitio web.

Por defecto, las variables de sesion duran hasta que el usuario cierra el navegador.

### Sesion

Una sesion se inicia con la funcion `session_start()`. Si la variable esta creada anteriormente, no hace nada. Si no existe, la crea. Esta funcion debe estar declarada en cada script que vaya a utilizar los datos de la sesion.

Las variales de sesion se establecen con la variable super global de PHP `$_SESSION`. Esta genera un array asociativo donde voy a tener disponible la informacion que se vaya guardando en cada request.

```php
// Inicio la sesion
session_start();

// Accedo a la informacion
$_SESSION["CLAVE"] = "VALOR";
```

La mayoria de las sesiones establecen una clave de usuario en el cliente, que se asimila a lo siguiente: '765487cf34ert8dede5a562e4f3a7e12'.

Cuando una sesion se abre en otra pagina, se examina el equipo para obtener una clave de usuario. Si no hay coincidencia, se accede a esa sesion; si no, se inicia una nueva sesion.

```php
session_start();

echo $_SESSION["CLAVE"];
```

Para eliminar todas las variables de sesion globales y destruir una sesion hay que usar `session_unset()` y `session_destroy()`.

```php
// Remueve todas las variables de sesion
session_unset();

// Destruye la sesion
session_destroy();
```

### Cookies

Una cookie se utiliza a menudo para identificar a un usuario. Es un pequeno archivo que el servidor guarda en el cliente. Cada vez que el mismo equipo solicita una pagina con un navegador, se enviara tambien la cookie. Con PHP podemos tanto crear como recuperar valores de cookies.

Para establecer una cookie, utilizamos el metodo `setcookie()`. Este metodo define una cookie que viajara junto con el resto de las cabeceras HTTP.

Al igual que otras cabeceras, las cookies deben ser enviadas antes de que el script genere ninguna salida (es una restriccion del protocolo).
Esto implica que las llamadas a esta funcion se coloquen antes de que se genere cualquier salida, incluyendo las etiquetas `<html>` y `<head>` al igual que cualquier espacio en blanco.

Una vez han sido enviadas las cookies, se puede acceder a ellas en la proxima carga de la pagina gracias a los arrays `$_COOKIE`.

A excepcion del parametro `name`, los parametros son opcionales.

Si existe algun tipo de salida anterior a la llamada de esta funcion, 'setcookie()' fallara y retornara `false`. Si 'setcookie()' ejecuta satisfactoriamente, retornara `true`. Esto no indica si es que el usuario ha aceptado la cookie o no.

```php
// setcookie(name, [value], [expire], [path], [domain], [secure], [httponly]
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 dia
```

`setcookie()` es una variable super global que existe a partir de PHP 4.1.0. Es un array asociativo de elementos cargados al script actual a traves del metodo `POST`.

- `name`: Indica el nombre de la cookie (Unico parametro obligatorio).
- `value`: Establece el valor de la cookie. Este valor se guarda en el cliente.
- `expire`: Indica el tiempo en el que expira la cookie. Es una fecha Unix, por lo tanto esta expresada en numeros de segundos a partir de la presente epoca.
- `path`: Indica la ruta dentro del servidor en la que la cookie estara disponible.
- `domain`: El dominio para el cual la cookie estara disponible.
- `secure`: Establece si la cookie solo debiera transmitirse por una conexion segura HTTPS desde el cliente. Cuando se configura como `true`, la cookie solo se creara si es que existe una conexion segura.
- `httponly`: Cuando es `true`, la cookie sera accesible solo a traves del protocolo HTTP. Esto significa que la cookie no sera accesible por lenguajes de scripting, como JavaScript.

Para borrar una cookie, se debe asegurar que la fecha de expiracion ya ha pasado. De este modo, se detonara el mecanismo de eliminacion del navegador:

```php
setcookie("TestCookie2", " ", time()-3600);
setcookie("TestCookie3", " ", time()-3600, "/~cookie/", "test.com", 1);
```
