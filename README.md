# To-Do List App

## Contexto del proyecto

La aplicación que se pretende desarrollar es una aplicación de lista de tareas (to-do list) utilizando el patrón de diseño Modelo-Vista-Controlador (MVC). La aplicación se desarrollará en PHP y utiliza el Objeto de Datos de PHP (PDO) para interactuar con una base de datos MySQL y POO para los modelos, vistas y controladores.

La estructura de la aplicación se divide en varias carpetas para separar las responsabilidades:

- [`models`](command:_github.copilot.openSymbolFromReferences?%5B%7B%22%24mid%22%3A1%2C%22path%22%3A%22%2Ff%3A%2FDropbox%2FTo-DoListApp%2Fapp%2Fmodels%2FTarea.php%22%2C%22scheme%22%3A%22file%22%7D%2C%7B%22line%22%3A0%2C%22character%22%3A0%7D%5D "app/models/Tarea.php"): Contiene los modelos de la aplicación, que son responsables de interactuar con la base de datos. Ejemplo: [`Tarea.php`](command:_github.copilot.openSymbolInFile?%5B%22app%2Fmodels%2FTarea.php%22%2C%22Tarea.php%22%5D "app/models/Tarea.php"), [`Usuario.php`](command:_github.copilot.openSymbolInFile?%5B%22app%2Fmodels%2FUsuario.php%22%2C%22Usuario.php%22%5D "app/models/Usuario.php")
- [`views`](command:_github.copilot.openSymbolFromReferences?%5B%7B%22%24mid%22%3A1%2C%22path%22%3A%22%2Ff%3A%2FDropbox%2FTo-DoListApp%2Fapp%2Fviews%2Fcrear.php%22%2C%22scheme%22%3A%22file%22%7D%2C%7B%22line%22%3A0%2C%22character%22%3A0%7D%5D "app/views/crear.php"): Contiene las vistas de la aplicación, que son responsables de mostrar la información al usuario. Ejemplo: [`eliminar.php`](command:_github.copilot.openSymbolInFile?%5B%22app%2Fviews%2Feliminar.php%22%2C%22eliminar.php%22%5D "app/views/eliminar.php"), [`leer.php`](command:_github.copilot.openSymbolInFile?%5B%22app%2Fviews%2Fleer.php%22%2C%22leer.php%22%5D "app/views/leer.php")
- [`controllers`](command:_github.copilot.openSymbolFromReferences?%5B%7B%22%24mid%22%3A1%2C%22path%22%3A%22%2Ff%3A%2FDropbox%2FTo-DoListApp%2Fapp%2Fcontrollers%2FTareaController.php%22%2C%22scheme%22%3A%22file%22%7D%2C%7B%22line%22%3A0%2C%22character%22%3A0%7D%5D "app/controllers/TareaController.php"): Contiene los controladores de la aplicación, que son responsables de manejar la lógica de la aplicación y coordinar los modelos y las vistas. Ejemplo: [`TareaController.php`](command:_github.copilot.openSymbolInFile?%5B%22app%2Fcontrollers%2FTareaController.php%22%2C%22TareaController.php%22%5D "app/controllers/TareaController.php"), [`UsuarioController.php`](command:_github.copilot.openSymbolInFile?%5B%22app%2Fcontrollers%2FUsuarioController.php%22%2C%22UsuarioController.php%22%5D "app/controllers/UsuarioController.php")

Además, la aplicación utiliza un archivo [`.htaccess`](.htaccess) para manejar las rutas de la aplicación, redirigiendo todas las solicitudes a un archivo [`index.php`](command:_github.copilot.openSymbolInFile?%5B%22index.php%22%2C%22index.php%22%5D "index.php"). Este archivo [`index.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2FF%3A%2FDropbox%2FTo-DoListApp%2Findex.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%5D "f:\\Dropbox\To-DoListApp\index.php") luego determina qué controlador y método llamar basado en la URL.

Por último, la aplicación tiene una carpeta "config" que contiene la configuración de la base de datos y una carpeta "public" que contiene los archivos estáticos como CSS y JavaScript.

## Estructura de carpetas del proyecto

La carpeta raíz del proyecto la llamaremos "To-DoListApp".

```
To-DoListApp/
  app/
    controllers/
    models/
    views/
     pages/
  public/
    css/
    js/
  config/
  .htaccess
  index.php
```
