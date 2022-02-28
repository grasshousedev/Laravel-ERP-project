<!-- LOGO -->
<div align="center" id="top">
<img src="https://i.ibb.co/gTGF9ck/image.png" alt="image" border="0">
  <h1 align="center">3DWorld</h1>
  <p align="center">
    Sistema <a href="https://dynamics.microsoft.com/es-mx/erp/define-erp/">ERP (Enterprise Resource Planning)</a>, dedicado a automatizar y administrar los procesos empresariales de las áreas de: finanzas, venta al por menor, cadena de suministro, recursos humanos y operaciones.
    <br />
    <a href="https://github.com/othneildrew/Best-README-Template"><strong>Explorar documentación»</strong></a>
    <br />
    <br />
    <a href="https://github.com/Jamir-boop/SENATI-MARKET/tree/main/screenshots">Demo Screenshots</a>
  </p>
</div>
<br />

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Tabla de contenidos</summary>
  <ol>
    <li>
      <a href="#sobre-el-proyecto">Sobre el Proyecto</a>
    </li>
    <li>
        <a href="#construido-con">Construido Con</a>
    </li>
    <li>
      <a href="#ejecutar-localmente">Ejecutar localmente 🚀</a>
    </li>
  </ol>
</details>
<hr>

## Sobre el proyecto
3DWorld es resultado del análisis y la automatización de los procesos de la empresa del mismo nombre, las cuales abarcan: Cadena de suministro, Venta, Operaciones, Logística, Almacén y Recursos Humanos.
<hr>

## Construido con
-   [Laravel 8](https://laravel.com/)
-   [Composer](https://getcomposer.org/)
-   [Bootstrap](https://getbootstrap.com/)
-   [Livewire](https://laravel-livewire.com/)
-   [AdminLTE](https://adminlte.io/docs/3.1/)
-   [Datatables](https://www.datatables.net/)
-   [PostgreSQL](https://www.postgresql.org/)

<small>Detalle de las versiones y dependencias en la <a href="#">documentacion técnica</a> del programa*</small>

<p align="right">(<a href="#top">ir al inicio</a>)</p>

## Ejecutar localmente
**Se requiere tener instalado el motor de bases de datos [PostgreSQL](https://www.postgresql.org/)**

1. Clonar el repositorio; abra su terminal en su directorio de preferencia y ejecute, en seguida ingrese a la carpeta 3Dworld:

```
    git clone https://github.com/Jamir-boop/3Dworld.git && cd ./3Dworld
```
2. Duplicar el archivo `env.example` y renombrarlo a `.env`:
3. Para instalar dependencias ejecute:

```
    composer update
    npm install
```

4. En su base de datos postgresql; crear una base de datos con el nombre `postDBS`.

5. En su terminal ejecute las migraciones:
```
    php artisan migrate && php artisan migrate:fresh --seed
```
6. Para iniciar un servidor local usando artisan ejecute:
```
    php artisan serve
```


<p align="right">(<a href="#top">ir al inicio</a>)</p>
<hr>

