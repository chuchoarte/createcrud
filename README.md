# CreateCRUD
El inicio de la automatización de un CRUD en Laravel.
Este paquete le permite construir un CRUD de manera semi-automatica, permitiendo normalizar de una manera mas sencilla todos los CRUD de tu proyecto en Laravel 5.

## Cómo instalar en Laravel 5.x:
Ejecutar el comando composer: `composer require jespitia/createcrud @dev`
agregue el Proveedor de Servicios en `config/app.php` en la sección `provider`
```php
jespitia\createcrud\CreateCRUDServiceProvider::class,
```
`(Este paso solo es necesario si está utilizando una versión inferior a Laravel 5.5)`

## Uso
Vaya a su app local `http://myapp.test/artisan-commands`

### Llenar los todos campos del formulario 
![alt text](https://raw.githubusercontent.com/chuchoarte/createcrud/master/src/public/img/form-1.PNG)

### Resultados

![alt text](https://raw.githubusercontent.com/chuchoarte/createcrud/master/src/public/img/form-2.PNG)

Puedes copiar y pegar en tu terminal o simplemente hacer clic en el botón ejecutar. `(Solo aplica para comandos Artisan)`
