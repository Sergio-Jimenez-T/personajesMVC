# Proyecto Personajes de VideoJuegos

## Índice

- [✨ Descripción](#-descripción)
- [🛠️ Tecnologías Utilizadas](#-tecnologías-utilizadas)
- [📝 Instalación](#-instalación)
  - [1. Configurar la base de datos](#1-configurar-la-base-de-datos)
  - [2. Configurar el servidor](#2-configurar-el-servidor)
  - [3. Ejecutar el proyecto](#3-ejecutar-el-proyecto)
- [📚 Estructura del Proyecto](#-estructura-del-proyecto)
- [📎Funcionamiento del programa](#-funcionamiento-del-programa)
- [🔗 URLs Principales🔍](#-urls-principales)
- [📖 Referencias](#-referencias)

---

## ✨ Descripción
Este proyecto es una aplicación web para la gestión de personajes de videojuegos. Permite listar, agregar, editar y eliminar personajes, mostrando la información en un diseño optimizado y accesible.

---

## 🛠 Tecnologías Utilizadas

- **PHP (MVC)**
- **MySQL**
- **HTML, CSS**
- **Servidor Apache**
- **[XAMPP](#https://www.apachefriends.org/es/index.html)**

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
--
### 🛠 **Funcionamiento del Programa**  

El proyecto sigue el patrón **Modelo-Vista-Controlador (MVC)**, lo que significa que separa la lógica de negocio (Modelo), la presentación (Vista) y el control de flujo (Controlador).  

1. **Inicio del Programa**  
   - Cuando un usuario accede a `http://localhost/Personajes`, se ejecuta el archivo **`public/index.php`**.  
   - Gracias a **`.htaccess`**, las URLs se manejan para que no sea necesario escribir `public/` en la ruta.  
   - Este archivo carga la configuración y redirige al **controlador** correspondiente.  

2. **Flujo General**  
   - **Controlador (`PersonajesController.php`)**: Recibe las peticiones y decide qué acción realizar.  
   - **Modelo (`Personaje.php`)**: Se comunica con la base de datos para obtener, insertar, actualizar o eliminar datos.  
   - **Vistas (`view/`)**: Se encargan de mostrar los datos al usuario.  

3. **Interacción con el Usuario**  
   - **Mostrar todos los personajes**: El usuario accede a la página principal y se muestra una tabla con los personajes almacenados.  
   - **Agregar un personaje**: El usuario llena un formulario y envía los datos para que se guarden en la base de datos.  
   - **Editar un personaje**: Se carga la información actual de un personaje y se permite modificarla.  
   - **Eliminar un personaje**: Se ofrece la opción de eliminar un personaje de la base de datos.  

---

### 🎯 **Front Controller**  

En este caso **no se usa un Front Controller puro**, sino un **controlador específico para Personajes** (`PersonajesController.php`).  

### **Diferencia entre Front Controller y este enfoque:**  

| Característica           | Front Controller (No usado aquí) | Enfoque actual (Usado aquí) |
|-------------------------|--------------------------------|-----------------------------|
| **Punto de entrada único** | Sí, todas las solicitudes pasan por un solo controlador. | No, cada entidad (ej. Personajes) tiene su propio controlador. |
| **Gestión de rutas**     | Usa un solo controlador y delega la lógica. | Cada controlador maneja sus propias acciones. |
| **Modularidad**          | Menos modular, pero más centralizado. | Más modular, cada entidad tiene su lógica separada. |
---
## Cada funcionalidad (ya sean los de listar todos los personajes, agregar, editar, eliminar) se maneja dentro de **`PersonajesController.php`**, lo que lo convierte en un **controlador dedicado** en lugar de un **Front Controller**.  
---
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
- [GUIA de ejemplo MVC de Profesor: Martin Cordero Ocampo repositorio MVC ejemplo:](https://github.com/miRepositorioGit/EjemploMvcObjetos)
- [XAMPP](https://www.apachefriends.org/es/index.html)
---
