# SistemaInventarioPHP

=== CHASQUISOFT TU ALIADO TECNOLOGICO ===

Sistema de Inventarios y Ventas en PHP y MySQL con facturación electrónica. Administra inventarios, ventas, usuarios, clientes, categorías y cajas. Incluye configuración de la empresa para personalización. Ideal para empresas que necesitan una solución integral y eficiente.

## Instalación

1. Copie o mueva la carpeta `SistemaInventario` a su servidor local o remoto.

2. Cree una base de datos en MySQL con el nombre de su preferencia, selecciónela e importe la base de datos del sistema utilizando phpMyAdmin u otro gestor gráfico de MySQL. La base de datos se encuentra en la carpeta `DB`.

3. Abra el archivo `server.php` con su editor de código favorito y configure únicamente los datos del servidor. El archivo se encuentra en la carpeta `config`.

4. Abra el archivo `app.php` con su editor de código favorito y configure los siguientes valores según su empresa y servidor. El archivo se encuentra en la carpeta `config`.

   - `APP_NAME` -> El nombre de su empresa u organización.
   - `APP_URL` -> La dirección URL de su servidor local (por ejemplo, http://localhost/SistemaInventario/). Es importante incluir el protocolo (http o https).

5. **Usuario por defecto**: 
   - Usuario: Administrador
   - Clave: Administrador

## Contribuciones

Si desea contribuir a este proyecto, por favor siga las pautas de contribución en `CONTRIBUTING.md`.

