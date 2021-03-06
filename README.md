# CreateCRUD

Este paquete es de uso personal, para mis CRUD básicos en Laravel. Permite construir el esqueleto de un CRUD de manera muy sencilla. `El control y vista resource, modelos, migraciones, ruta para el método datatable, factory y requests de validación`, permitiendo normalizar de una manera más sencilla todos los nombres de los archivos del CRUD de un proyecto en Laravel 5.x.

## Cómo instalar en Laravel 5.x:
Ejecutar el comando composer: `composer require jespitia/createcrud @dev` o agregar `"jespitia/createcrud": "dev-master",` al archivo composer.json y luego ejecutar `composer update`.

agregue el Proveedor de Servicios en `config/app.php` en la sección `provider`.
```php
/*
* Package Service Providers...
*/
jespitia\createcrud\CreateCRUDServiceProvider::class,
```
`(Este paso solo es necesario si está utilizando una versión inferior a Laravel 5.5)`

## Uso
Vaya a la url del proyecto `http://myapp.test/artisan-commands`.

Llenar todos los campos del formulario.

![alt text](https://raw.githubusercontent.com/chuchoarte/createcrud/master/src/public/img/form-1.PNG)

### Resultados

Copiar el texto y pegar en al archivo de rutas. 
  * Para la versión de Laravel 5.0 hasta la 5.2 `app/Http/routes.php`.
  * Para la version de Laravel 5.3 en adelante `routes/web.php`.
  
![alt text](https://raw.githubusercontent.com/chuchoarte/createcrud/master/src/public/img/form-2.PNG)

Puedes copiar y pegar en el terminal (CMD) o simplemente hacer clic en el botón ejecutar. 

`(El botón "Ejecutar" solo aplica para comandos Artisan)`.

![alt text](https://raw.githubusercontent.com/chuchoarte/createcrud/master/src/public/img/form-3.PNG)

`php artisan vendor:publish --provider='jespitia\createcrud\CreateCRUDServiceProvider'`

Acto seguido agregar a la clase `app\Routing\AppResourceRegistrar.php` en el método `boot`
```
public function boot()
{
     //...
     $registrar = new \App\Routing\AppResourceRegistrar($this->app['router']);
         $this->app->bind('Illuminate\Routing\ResourceRegistrar', function () use ($registrar) {
         return $registrar;
     });
}
````
