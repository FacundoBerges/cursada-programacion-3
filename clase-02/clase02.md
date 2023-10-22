# Clase 2

<br>

## Funciones propias en PHP:

Para declararlas, se usa la palabra function. No son case-sensitive y pueden empezar con letra o '\_' (guion bajo).

```php
function NombreFuncion($param_1, $param_2, $param_N){
  // Codigo de funcion.
}

function NombreFuncionSinParam(){
  return $returnVariable;
}

function NombreFuncionDefaultParam(
    $param_1,
    $param_2 = "hello" /* valor por defecto en caso que no se envie argumento*/){
  return $returnVariable;
}
```

## Incluir archivos en PHP:

Las declaraciones `include` o `require` importan todo el codigo de un archivo en otro. Se pueden usar cualquiera de las 2. En caso de que no funcione una, probar con la otra.

- require: producirá un error fatal (`E_COMPILE_ERROR`) y frenará el script.
- include: sólo producirá una advertencia (`E_WARNING`) y el script continuará.

```php
include "ruta_archivo.php";
include_once "ruta_archivo.php";

require "ruta_archivo.php";
require_once "ruta_archivo.php";
```

Las versiones `_once` solo traen el archivo 1 sola vez. Esta pensado para incluir el archivo siempre y cuando no se haya incluido previamente.

## Clases y Objetos en PHP:

La forma de declarar clases y atributos / metodos es similar a C# :

```php
class NombreClase
{
  // Atributos (private - protected – public/var - static)
  [Modificadores] $nombreAtributo;

  // Métodos (private - protected – public/var - static)
  [Modificadores] function NombreMetodo([params])
  { ... }
}
```

Sin embargo, la principal diferencia es que todo metodo, incluso los constructores, no pueden ser sobrecargados:

```php
class NombreClase
{
  //Atributos.
  private $_attr1;
  protected $_attr2;


  //Constructor
  public function __construct()
  {
    // código
  }


  //Métodos.
  private function Func1($param)
  {
    //código
  }

  protected function Func2()
  {
    //código
  }

  public function Func3()
  {
    //código
  }

}
```

El operador `->` (operador flecha) es utilizado para acceder a los metodos de instancia de la clase.
<br>
El operador `::` (doble dos puntos) es utilizado para acceder a los metodos estaticos de la clase.

```php
// Instanciacion del objeto
$unObjeto = new NombreClase();

// atributos / metodos de instancia
$unObjeto->attr1;
$unObjeto->FuncX();

// atributos / metodos de clase o estaticos
NombreClase::$staticAttr1;
NombreClase::StaticFuncY();
```

Para acceder a un metodo o atributo de la misma instancia usamos el operador `$this`:

```php
class NombreClase
{
  public $id;
  public $nombre;

  public function __construct($id, $nombre)
  {
    if($this->validar($id))
    {
      $this->id = $id;
      $this->nombre = $nombre;
    }
  }

  public function validar($id)
  {
    // Validacion
  }
}
```

### Herencia

La herencia se realiza a partir de la palabra reservada `extends`. La palabra `parent` funciona como la palabra super de Java o base de C#.

```php
class ClaseBase
{
  public function __construct()
  {
    // Inicializar variables
  }
}

class ClaseDerivada extends ClaseBase
{
  public function __construct()
  {
    parent::__construct(); // Inicializar variables de clase padre.
    // Inicializar variables de clase actual.
  }
}
```

### Polimorfismo

Cualquier metodo puede ser modificado en sus clases derivadas en PHP.

```php
class ClaseBase
{
  public function __construct() { }

  public function Saludar()
  {
    return "hola";
  }
}

class ClaseDerivada extends ClaseBase
{
  public function __construct() { }

  public function Saludar()
  {
    return parent::Saludar() . " " . "mundo";
  }
}
```

### Interfaces

Las interfaces en PHP solo pueden contener declaraciones de metodos. Se implementan con la palabra reservada `implements`.

```php
interface IInterface
{
  function Metodo();
}

class NombreClase implements IInterface
{
  public function Metodo()
  {
    // Implementacion.
  }
}
```

### Clases abstractas

Las clases abstractas pueden contener atributos y metodos, ademas de metodos sin implementacion con el modificador `abstract`.

```php
abstract class ClaseAbstracta
{
  public abstract function Metodo();
}

class NombreClase extends ClaseAbstracta
{
  public function Metodo()
  {
    // Implementacion.
  }
}
```

### Constructores

```php
class Auto
{
  public $marca;
  public $color;

  public function __construct($marca, $color = "")
  {
    $this->marca = $marca;
    $this->color = $color;
  }
}

$coche1 = new Auto("Fiat", "Rojo");
$coche1 = new Auto("Ford"); // Segundo parametro opcional
```
