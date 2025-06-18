# 📘 Introducción

Este es un ejemplo de uso para mostrar las funciones de una API RESTful utilizando **Laravel** que gestiona productos.

La API permite crear, leer, actualizar y eliminar productos, utilizando **Eloquent** para interactuar con la base de datos.  
Devuelve los datos en formato **JSON** y permite registrar precios de los productos en diferentes divisas.

---

## 🔐 Endpoints

### Autenticación

- `POST /login`: Obtener *Bearer Token*
- `POST /logout`: Eliminar el token vigente

### Productos

- `GET /products`: Obtener lista de productos
- `POST /products`: Crear un nuevo producto
- `GET /products/{id}`: Obtener un producto por ID
- `PUT /products/{id}`: Actualizar un producto
- `DELETE /products/{id}`: Eliminar un producto
- `GET /products/{id}/prices`: Obtener lista de precios de un producto
- `POST /products/{id}/prices`: Crear un nuevo precio para un producto

---

## ⚙️ Funcionamiento

1. Generar un token de acceso con el endpoint `/login`.
2. Realizar llamadas autenticadas a los endpoints anteriores utilizando el token.

---

## 👤 Credenciales de prueba

- **Usuario:** `admin`
- **Contraseña:** `password`


# 🧩 Estructura base de datos

---

## 📦 Productos

| Campo              | Tipo     | Descripción                                |
|--------------------|----------|--------------------------------------------|
| `id`               | integer  | Identificador único del producto           |
| `name`             | string   | Nombre del producto                        |
| `description`      | string   | Descripción del producto                   |
| `price`            | decimal  | Precio del producto en la divisa base      |
| `currency_id`      | integer  | Identificador de la divisa base            |
| `tax_cost`         | decimal  | Costo de impuestos del producto            |
| `manufacturing_cost` | decimal | Costo de fabricación del producto         |

---

## 💱 Divisas

| Campo          | Tipo     | Descripción                          |
|----------------|----------|--------------------------------------|
| `id`           | integer  | Identificador único de la divisa     |
| `name`         | string   | Nombre de la divisa                  |
| `symbol`       | string   | Símbolo de la divisa                 |
| `exchange_rate`| decimal  | Tasa de cambio de la divisa          |

---

## 🏷️ Precios de Productos

| Campo         | Tipo     | Descripción                                       |
|---------------|----------|---------------------------------------------------|
| `id`          | integer  | Identificador único del precio del producto       |
| `product_id`  | integer  | Identificador del producto                        |
| `currency_id` | integer  | Identificador de la divisa                        |
| `price`       | decimal  | Precio del producto en la divisa especificada     |

# Despliegue

## ⚙️ Instalación y ejecución

1. **Instalar dependencias con Composer**  
   Asegúrate de tener Composer instalado en tu máquina. Desde la raíz del proyecto, ejecuta el comando correspondiente para instalar todas las dependencias necesarias del proyecto Laravel.

```bash
   composer install
```

2. **Ejecutar el servidor de desarrollo**  
   Inicia el servidor local de Laravel para levantar la aplicación y acceder a ella desde el navegador.

```bash
   php artisan serve
```

3. **Ejecutar migraciones y seeders**  
   Crea las tablas en la base de datos y puebla con datos de ejemplo ejecutando las migraciones junto con los seeders definidos en el proyecto.

```bash
   php artisan migrate --seed
```

## ⚙️ Instalación y ejecución con docker

Antes de ejecutar los comandos antes mencionados, es posible ejecutarlos desde un contenedor de docker de ser necesario:

```bash
   docker compose up -d
```

Luego entrar al contenedor de pruebas:

```bash
   docker exec -it test-ciph3r-laravel.test-1 bash
```

Luego ejecutar los comandos del punto anterior.
