# Proyecto: Personajes de VideoJuegos
---

## 📚 Índice  

- [Clonar el repositorio](#-clonar-el-repositorio) 
- [Configuracion D.B.](#-configurar-la-base-de-datos)  
- [URLS Especificas](#-URL'S)  
- [Tecnologías Utilizadas](#-tecnologías-utilizadas)  
- [Referencias](#-referencias) 
---
## Descripción
Este proyecto es un sistema para la gestión de personajes de videojuegos. Permite visualizar, agregar, editar y eliminar personajes, con una interfaz amigable y un estilo oscuro para mejorar la experiencia visual.
El proyecto fue desarrollado con la finalidad de comprender de mejor manera la manera de trabajar con archivos en una carpeta utilizando una jerarquia MVC la cual nos ayuda a mantener un orden en nuestro proyecto ademas de que tambien utiliza un archivo .htacces el cual no permite al ususario acceder a la arpeta de aplicacion la cual contiene los datos del funcionamiento del proyecto y los datos sensibles 
---
## Instalación y Configuración

### 1. Clonar el repositorio
```bash
  git clone https://github.com/Sergio-Jimenez-T/personajesMVC/
```

### 2. Configurar la base de datos
- Crear una base de datos en MySQL.
- Importar el archivo **videojuegosdb.sql** en MySQL.
- Configurar la conexión en **config/database.php**.
---
### 3. URL'S
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
---
### 4. Tecnologías Utilizadas
- **PHP** (MVC)
- **MySQL** (Base de Datos)
- **HTML, CSS** (Interfaz de usuario)
- **Apache** (Servidor local)
---
### 5. Referencias
- [GUIA de ejemplo MVC de Profesor: Martin Cordero Ocampo repositorio MVC ejemplo:https:](https://github.com/miRepositorioGit/EjemploMvcObjetos)
- [PHP: Manual Oficial](https://www.php.net/manual/es/)
- [Guía de MVC en PHP](https://diego.com.es/ejemplo-de-mvc-en-php)
- [Apache mod_rewrite](https://httpd.apache.org/docs/2.4/mod/mod_rewrite.html)
- [Bootstrap para estilos](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
---
