# Proyecto: Personajes de VideoJuegos

## Descripción
Este proyecto es un sistema para la gestión de personajes de videojuegos. Permite visualizar, agregar, editar y eliminar personajes, con una interfaz amigable y un estilo oscuro para mejorar la experiencia visual.

## Instalación y Configuración

### 1. Clonar el repositorio
```bash
  git clone <URL_DEL_REPOSITORIO>
```

### 2. Configurar la base de datos
- Crear una base de datos en MySQL.
- Importar el archivo **database.sql** en MySQL.
- Configurar la conexión en **config/database.php**.

### 3. Configurar el servidor local
Si usas Apache, puedes configurar `.htaccess` para que el acceso sea directo a la carpeta del proyecto sin necesidad de ingresar a `/public`.

Ejemplo de configuración en **Apache**:
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /Personajes/
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

## URLs Principales
| Acción  | URL |
|---------|-----|
| Dashboard principal | `http://localhost/Personajes/` |
| Agregar personaje | `http://localhost/Personajes/index.php?action=agregar` |
| Editar personaje | `http://localhost/Personajes/index.php?action=editarPersonaje&id=<ID>` |
| Eliminar personaje | `http://localhost/Personajes/index.php?action=eliminar&id=<ID>` |

## Estructura del Proyecto
```
Personajes/
│── app/
│   ├── config/
│   │   ├── database.php
│   ├── controller/
│   │   ├── PersonajesController.php
│   ├── model/
│   │   ├── Personaje.php
│   ├── view/
│   │   ├── todosRegistros.php
│   │   ├── agregar.php
│   │   ├── editar.php
│   │   ├── eliminar.php
│── public/
│   ├── index.php
│── CSS/
│   ├── styles.css
│── .htaccess
│── README.md
```

## Tecnologías Utilizadas
- **PHP** (MVC)
- **MySQL** (Base de Datos)
- **HTML, CSS** (Interfaz de usuario)
- **Apache** (Servidor local)

## Contacto
Si tienes dudas o sugerencias, ¡hazme saber! 🚀
