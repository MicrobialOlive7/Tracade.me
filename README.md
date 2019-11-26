# Tracade.me

## Documentación Oficial
[Laravel](https://laravel.com/docs/6.x)

## Instalación Local
### Requerimientos
Para la instalación de **tracade.me** de manera local se necesita tener lo siguiente instalado:
* XAMPP
* Composer
* Git

Se recomienda el uso del IDE [PHP Storm de JetBrains](https://www.jetbrains.com/es-es/phpstorm/download/#section=windows)

### Código Fuente
Para la descarga del codigo fuente, ejecutar el siguiente comando en la carpeta htdcos de XAMPP:
 ```
git clone https://github.com/MicrobialOlive7/Tracade.me.git
 ```
 
Ó clonar el  proyecto desde GitHub Desktop

### Inicialización
*Todos los pasos siguientes eben de realizarse para la correcto funcionamiento de tracade.me

#### Instalación de charts
Para el correcto funcionamiento de las gráficas, ejecutar el siguiente comando:
 ```
composer require consoletvs/charts:6.*
 ```
#### Base de datos

##### Ejecutar migración
1. Crear base de datos con el nombre *tracademe* 
2. Ejecutar comando
```
php artisan migrate
```
##### Inicializar base
Para crer los registros base (disciplinas y aulas) asi como algunos registros iniciales de grupos y alumnos ejecutar el siguiente comando:
```
php artisan db:seed --class=InitSeeder
```
##### Registros de prueba
###### Alumnos
Creación de 10 alumnos de prueba asignados a una discplina aleatoria:
```
php artisan db:seed --class=AlumnosTableSeeder
```
###### Habilidades
Creación de 16 habilidades de prueba:
```
php artisan db:seed --class=HabilidadesTableSeeder
```

### Visualización de imagenes de habilidades
Ejecutar el siguiente comando para la correcta visualizacion de las imagenes
```
php artisan storage:link
```
Este comando crea un enlace directo de la carpeta *storage* en */public* hacia la carpeta */storage/app* que es donde se almacenan
las imágenes de las habilidades

**es probable que haya que eliminar la carpeta */storage* de public y volver a ejecutar*

## Desarrollo de tracade.me
### Formato de Rutas
Las rutas se crear en el archivo *web.php*
Los nombres de las rutas y comentarios de cada una seran de la siguiente manera:
**Comentarios**
 ```
/// Tipo de ruta /// Vista o Funcion
 ```
 
**Nombre**

*Funciones*
* Las funciones del CRUD se llaman como corresponda (**C**reate, **U**pdate, **R**ead, **D**elete)
* Las funciones para las vistas del CRUD se llamaran: *showFuncion()*

*Rutas*
* Las rutas para las vistas se llamaran de la siguiente forma: *funcion-objeto*
* Las rutas para las funciones post se llamaran de la siguiente forma: *objetoFuncion*

*Ejemplo:*
```
//--- Modificar ---//
// Vista
Route::get('modificar-grupo/{id}', 'Grupos\GruposController@showUpdate')->name('modificar-grupo');
// Funcion
Route::post('grupoUpdate/{id}', 'Grupos\GruposController@update')->name('grupoUpdate');
 ```

### Crear controller dentro de carpetas
Para crear controladores dentro de una carpeta dentro de la carpeta *Controller* se debe hacer lo siguiente>

1. Ejecutar  comando
```
php artisan make:controller Carpeta\NombreController
```

*Se debe crear con el comando para que laravel sepa que esta
     dentro de esa carpeta*
     
2. Crear la ruta en *routes/web.php*
 ```
 Carpeta\NombreController@funcion
 ```
 
### Regresar al login por defecto de laravel
 editar *config>auth*
 
* providers 
* passwords
* guards
    * web
    * defaults
        * passwords
 * registerController
 
 
 
## NOTAS
**Cada que se haga pull o merge:**

+ Ejecutar el siguiente comando para la correcta visualizacion de las imagenes
```
php artisan storage:link
```
Este comando crea un enlace directo de la carpeta *storage* en */public* hacia la carpeta */storage/app* que es donde se almacenan
las imágenes de las habilidades

+ Se recomienda inicializar la base de datos también.

