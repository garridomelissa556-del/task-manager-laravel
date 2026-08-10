# ✅ Task Manager - Laravel

Aplicación web para la **gestión de tareas personales y académicas**, desarrollada con Laravel.

El sistema permite que cada usuario administre sus propias tareas mediante una interfaz web, incorporando autenticación, verificación de correo electrónico, etiquetas, prioridades, estados, filtros y una papelera para recuperar tareas eliminadas.

## 🚀 Funcionalidades

* Registro e inicio de sesión de usuarios.
* Verificación de correo electrónico.
* Recuperación y restablecimiento de contraseña.
* Gestión del perfil del usuario.
* Creación, visualización, edición y eliminación de tareas.
* Estados de tarea: **Pendiente, En progreso y Completada**.
* Prioridades: **Baja, Media y Alta**.
* Fechas límite con validación para impedir fechas anteriores al día actual.
* Creación y administración de etiquetas personalizadas.
* Relación de múltiples etiquetas con una tarea.
* Búsqueda de tareas por título o descripción.
* Filtros por estado, prioridad y etiqueta.
* Ordenamiento por fecha límite, prioridad o fecha de creación.
* Paginación de resultados.
* Estadísticas de tareas totales y completadas.
* Papelera mediante Soft Deletes.
* Restauración de tareas eliminadas.
* Eliminación definitiva desde la papelera.
* Control de acceso para impedir que un usuario consulte o modifique tareas pertenecientes a otro usuario.

## 🛠️ Tecnologías utilizadas

* PHP 8.2+
* Laravel 12
* Laravel Breeze
* Blade
* Tailwind CSS
* Alpine.js
* Vite
* Eloquent ORM
* SQLite
* HTML
* CSS
* JavaScript

## 🔐 Seguridad

El sistema utiliza el sistema de autenticación de Laravel y protege las funcionalidades principales mediante middleware de autenticación y verificación de correo.

Cada tarea y etiqueta pertenece a un usuario específico. Las operaciones sobre estos recursos verifican el propietario para evitar que otros usuarios puedan consultar o modificar información que no les pertenece.

Las contraseñas son gestionadas mediante el sistema de hashing proporcionado por Laravel.

## 🗂️ Gestión de tareas

Cada tarea puede almacenar:

* Título.
* Descripción.
* Estado.
* Prioridad.
* Fecha límite.
* Una o varias etiquetas.

El sistema incorpora validaciones tanto para la información ingresada como para las relaciones entre usuarios, tareas y etiquetas.

## 🔎 Búsqueda y filtros

El dashboard permite localizar y organizar tareas mediante:

* Búsqueda por título o descripción.
* Estado.
* Prioridad.
* Etiqueta.
* Fecha límite.
* Orden de prioridad.
* Tareas creadas recientemente.

Esto permite administrar una cantidad mayor de tareas sin depender únicamente de un listado cronológico.

## 🗑️ Papelera

Las tareas utilizan **Soft Deletes**, por lo que al eliminarlas inicialmente no desaparecen de forma permanente.

Desde la papelera el usuario puede:

* Restaurar una tarea.
* Eliminarla definitivamente.

## ⚙️ Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/garridomelissa556-del/task-manager-laravel.git
cd task-manager-laravel
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Instalar dependencias de frontend

```bash
npm install
```

### 4. Crear el archivo de configuración

```bash
cp .env.example .env
```

En Windows también puede copiarse manualmente `.env.example` y renombrarlo como `.env`.

### 5. Generar la clave de la aplicación

```bash
php artisan key:generate
```

### 6. Crear y configurar la base de datos

Configure la conexión correspondiente dentro del archivo `.env`.

Después ejecute:

```bash
php artisan migrate
```

### 7. Compilar los recursos frontend

Para desarrollo:

```bash
npm run dev
```

### 8. Iniciar Laravel

```bash
php artisan serve
```

La aplicación estará disponible normalmente en:

```text
http://127.0.0.1:8000
```

## 📧 Verificación de correo

El proyecto incorpora verificación de correo electrónico mediante Laravel.

Para utilizar el envío real de correos es necesario configurar un servicio de correo en las variables `MAIL_*` del archivo `.env`.

Las credenciales reales nunca deben almacenarse directamente en GitHub.

## 🎯 Objetivo del proyecto

El proyecto busca implementar una aplicación web completa de gestión de tareas aplicando conceptos de desarrollo backend y frontend, autenticación, autorización, persistencia de datos, relaciones entre modelos, validación de información y diseño de interfaces utilizando el ecosistema Laravel.

---

Desarrollado con **Laravel, PHP y Tailwind CSS**.
