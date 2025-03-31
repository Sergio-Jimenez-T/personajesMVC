# Proyecto Personajes de VideoJuegos

## Índice

- [✨ Descripción](#-descripción)
- [🛠️ Tecnologías Utilizadas](#-tecnologías-utilizadas)
- [📝 Instalación](#-instalación)
  - [1. Configurar la base de datos](#1-configurar-la-base-de-datos)
  - [2. Configurar el servidor](#2-configurar-el-servidor)
  - [3. Ejecutar el proyecto](#3-ejecutar-el-proyecto)
- [📚 Estructura del Proyecto](#-estructura-del-proyecto)
- [🔗 URLs Principales](#-urls-principales)
- [📚 Referencias](#-referencias)

---

## ✨ Descripción
Este proyecto es una aplicación web para la gestión de personajes de videojuegos. Permite listar, agregar, editar y eliminar personajes, mostrando la información en un diseño optimizado y accesible.

---

## 🛠 Tecnologías Utilizadas

- **PHP (MVC)**
- **MySQL**
- **HTML, CSS**
- **Apache con mod_rewrite**

---

## 📝 Instalación

### 1. Configurar la base de datos

1. Crear una base de datos llamada `personajes_db`.
2. Importar el archivo `database.sql` incluido en el proyecto.

### 2. Configurar el servidor

1. Asegurarse de que Apache tenga activado `mod_rewrite`.
2. Configurar `.htaccess` para que redirija correctamente a `public/`.

### 3. Ejecutar el proyecto

1. Clonar el repositorio o descargarlo.
2. Abrir el navegador y acceder a `http://localhost/Personajes`.

---

## 📂 Estructura del Proyecto

```
Personajes/
│── app/
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

## 🔗 URLs Principales

- **Página principal (Dashboard por defecto):** `http://localhost/Personajes`
- **Agregar un nuevo personaje:** `http://localhost/Personajes/agregar`
- **Editar un personaje:** `http://localhost/Personajes/editar/{ID}`
- **Eliminar un personaje:** `http://localhost/Personajes/eliminar/{ID}`

---

## 📖 Referencias

- [PHP: Manual Oficial](https://www.php.net/manual/es/)
- [Guía de MVC en PHP](https://diego.com.es/ejemplo-de-mvc-en-php)
- [Apache mod_rewrite](https://httpd.apache.org/docs/2.4/mod/mod_rewrite.html)
- [Bootstrap para estilos](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [GUIA de ejemplo MVC de Profesor: Martin Cordero Ocampo repositorio MVC ejemplo:https:](https://github.com/miRepositorioGit/EjemploMvcObjetos)
---
