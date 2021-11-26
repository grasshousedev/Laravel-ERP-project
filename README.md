<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">GRUPO MARKET</p>

## COMO EJECUTAR LOCALMENTE

### Clonando el repositorio:

Abra su terminal en un directorio de preferencia y ejecute:

```
git clone https://github.com/Jamir-boop/ERP-Laravel.git
```

### Agregando archivo .env:

Duplicar el archivo env.example y renombrarlo a:

```
.env
```

### Instalamos Dependencias:

En terminal ingrese a la carpeta ERP-Laravel:

```
cd ./ERP-laravel
```

Para instalar dependencias ejecute:

```
composer update
npm install
npm run dev
```

### Creando base de datos:

Crear una base de datos en el motor postgres con el nombre "postDBS".
El código de autenticación para establecer conexion con la base de datos es `1234`
en caso de que el suyo sea distinto puede cambiarlo en el archivo ".env"
En seguida para integrar las migraciones ejecutar los scripts:

```
php artisan migrate
php artisan migrate:fresh --seed
```

### Inicializando localmente:

```
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
