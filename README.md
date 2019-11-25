# Tracade.me

## Documentación
[Laravel](https://laravel.com/docs/6.x)

### NOTA
Cada que se haga pul o merge ejecutar el comando
```
php artisan storage:link
```

### Base de datos

#### Ejecutar migracion
1. Crear base de datos *tracademe* 
2. Ejecutar comando
```
php artisan migrate
```
### Inicializar base
Para crer los registros base (disciplinas y aulas) asi como algunos registros iniciales de grupos y alumnos ejecutar el siguiente comando:
```
php artisan db:seed --class=InitSeeder
```
### Registros de prueba
#### Alumnos
CCreación de 10 alumnos de prueba asignados a una discplina aleatoria:
```
php artisan db:seed --class=AlumnosTableSeeder
```
## Controller dentro de carpetas
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
 
 ## Default login
 editar *config>auth*
 
* providers 
* passwords
* guards
    * web
    * defaults
        * passwords
 * registerController
 
 
## Rutas
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