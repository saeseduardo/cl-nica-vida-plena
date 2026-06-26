# Clínica Vida Plena — Landing Page

Landing page profesional para una clínica médica en Venezuela, construida con Laravel 11, Blade, Tailwind CSS 3 y Alpine.js. Diseñada para convertir visitantes en pacientes mediante un formulario de citas y botón de WhatsApp.

---

## Tech Stack

| Capa | Tecnología |
|------|-----------|
| Backend | Laravel 11 |
| Templates | Blade |
| Estilos | Tailwind CSS 3 |
| Interactividad | Alpine.js 3 |
| Base de datos | MySQL 8 |
| Emails | Laravel Mail + SMTP (Mailpit en dev) |
| Build tool | Vite 8 |
| Web server | Nginx 1.25 (Docker) |
| Runtime | PHP 8.3-FPM (Docker) |
| Deploy | Railway |

---

## Secciones

- **Header** — Navegación sticky con menú hamburguesa (Alpine.js)
- **Hero** — Dos columnas, headline y CTAs hacia formulario de contacto
- **Trust Bar** — Métricas clave: +2000 pacientes, 15 años, 8 especialidades
- **Servicios** — Grid de 6 especialidades médicas con iconos SVG
- **Equipo** — 3 médicos con foto, especialidad y años de experiencia
- **Testimonios** — 3 reseñas de pacientes con valoración de 5 estrellas
- **Contacto** — Formulario de cita + mapa + datos de la clínica
- **Footer** — Links, redes sociales y copyright

---

## Requisitos

- Docker y Docker Compose v2
- Git

---

## Instalación local (Docker)

```bash
# 1. Clonar el repositorio
git clone https://github.com/saeseduardo/cl-nica-vida-plena.git
cd cl-nica-vida-plena

# 2. Copiar variables de entorno para Docker
cp .env.example .env
```

Edita `.env` con estos valores para que apunte a los servicios Docker:

```env
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=clinica_vida_plena
DB_USERNAME=clinica_user
DB_PASSWORD=clinica_pass

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_FROM_ADDRESS=contacto@clinicavidaplena.com
```

```bash
# 3. Levantar los contenedores
docker compose up -d

# 4. Instalar dependencias PHP
docker compose exec app composer install

# 5. Generar clave de aplicación
docker compose exec app php artisan key:generate

# 6. Ejecutar migraciones
docker compose exec app php artisan migrate

# 7. Instalar dependencias JS y compilar assets
docker compose exec app npm install
docker compose exec app npm run build
```

---

## URLs locales

| Servicio | URL |
|----------|-----|
| Landing page | http://localhost:8080 |
| Mailpit (emails) | http://localhost:8025 |
| MySQL | localhost:3307 |

---

## Comandos útiles

```bash
# Ver logs en tiempo real
docker compose logs -f

# Acceder al shell del contenedor
docker compose exec app sh

# Recompilar assets en modo desarrollo (hot reload)
docker compose exec app npm run dev

# Parar todos los contenedores
docker compose down

# Parar y borrar la base de datos (reset completo)
docker compose down -v
```

---

## Paleta de colores

| Nombre | Hex | Uso |
|--------|-----|-----|
| `blue-ice` | `#F0F7FF` | Fondos alternos de sección |
| `blue-med` | `#1A6FA8` | Color primario, botones, CTAs |
| `green-health` | `#2DAA7E` | Acentos, iconos, estados de éxito |
| `dark-blue` | `#1C2B3A` | Texto principal |

---

## Estructura de vistas

```
resources/views/
├── layouts/
│   └── app.blade.php          ← Layout base (SEO, fonts, assets)
├── sections/
│   ├── header.blade.php
│   ├── hero.blade.php
│   ├── trust-bar.blade.php
│   ├── services.blade.php
│   ├── team.blade.php
│   ├── testimonials.blade.php
│   ├── contact.blade.php
│   └── footer.blade.php
└── welcome.blade.php          ← Vista principal
```

---

## Deploy en Railway

Railway detecta el `Dockerfile` automáticamente. Solo es necesario configurar las variables de entorno en el dashboard:

```env
APP_ENV=production
APP_KEY=           # php artisan key:generate --show
APP_URL=https://tu-app.up.railway.app
DB_*               # Conectar el plugin MySQL de Railway
MAIL_*             # Credenciales SMTP reales
```

---

*Proyecto de portafolio — Eduardo Argenis | Full Stack Developer*  
*GitHub: [github.com/saeseduardo](https://github.com/saeseduardo)*
