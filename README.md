# CreateCRUD
Este paquete es de uso personal, para mis CRUD básicos en Laravel. Permite construir el esqueleto de un CRUD de manera muy sencilla `[el control y vista resource, modelos, migraciones, ruta para el método datatable, factory y requests de validación]`, permitiendo normalizar de una manera más sencilla todos los nombres de los archivos del CRUD de un proyecto en Laravel 5.x.

## Cómo instalar en Laravel 5.x:
Ejecutar el comando composer: `composer require jespitia/createcrud @dev`
agregue el Proveedor de Servicios en `config/app.php` en la sección `provider`.
```php
/*
* Package Service Providers...
*/
jespitia\createcrud\CreateCRUDServiceProvider::class,
```
`(Este paso solo es necesario si está utilizando una versión inferior a Laravel 5.5)`

## Uso
Vaya a la url del proyecto `http://myapp.test/artisan-commands`

### Llenar todos los campos del formulario 
![alt text](https://raw.githubusercontent.com/chuchoarte/createcrud/master/src/public/img/form-1.PNG)

### Resultados

![alt text](https://raw.githubusercontent.com/chuchoarte/createcrud/master/src/public/img/form-2.PNG)

Puedes copiar y pegar en tu terminal o simplemente hacer clic en el botón ejecutar. `(El botón "Ejecutar" solo aplica para comandos Artisan)`
