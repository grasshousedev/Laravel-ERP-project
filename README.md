<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## COMO EJECUTAR LOCALMENTE

###Clonando el repositorio:
Abra su terminal en un directorio de preferencia y ejecute:

```
git clone https://github.com/Jamir-boop/ERP-Laravel.git
```

###Instalamos Dependencias:
Una vez clonado el repositorio en terminal ingrese a la carpeta ERP-Laravel:
```
cd ./ERP-laravel
```

Para instalar dependencias ejecute:
```
composer update
npm install
npm run dev
```

###Creando base de datos:
Crear una base de datos en el motor postgres con el nombre "postDBS".
Para integrar las migrciones ejecutar los scripts:

```
php artisan migrate
php artisan migrate:fresh --seed
```

###Inicializando localmente:
```
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
