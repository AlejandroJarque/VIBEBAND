# VIBEBAND

**VIBEBAND** 
Es un proyecto en desarrollo orientado a la creación de una plataforma musical inteligente.  
Su objetivo es ofrecer una experiencia personalizada de gestión, reproducción y recomendación de música,  
integrando funciones adaptadas a las necesidades del usuario.

Este repositorio contiene el código fuente, la configuración y los recursos necesarios para el desarrollo del sistema.

## Estructura de carpetas
VIBEBAND/
├── config/                   # Configuraciones, conexión a BD, variables globales
│   ├── db.php                # Configuración y clase para conexión a BD                                (listo)
│   └── test_db.php           # Script para testear conexión a la base de datos                         (listo)
│
├── public/                    # Archivos accesibles desde el navegador (punto de entrada)
│   ├── index.php              # Controlador frontal (router básico)
│   ├── css/                   # Estilos CSS públicos
│   ├── js/                    # Scripts JS públicos
│   └── assets/                # Imágenes, fuentes, etc.
│
├── controllers/               # Controladores (lógica que conecta modelos y vistas)
│   └── BandController.php
│
├── models/                    # Modelos (clases para acceder a BD y lógica de negocio)
│   └── Band.php
│
├── views/                     # Vistas (archivos PHP que generan el HTML para mostrar)
│   ├── bands/
│   │   └── register.php
│   └── layouts/               # Plantillas comunes (header, footer, etc.)
│
├── storage/                   # Archivos subidos, logs, cache, backups 
│
├── tests/                     # Tests automáticos (para cuando avances más)
│
├── utils/                     # Utilidades y helpers (validaciones, autenticación, etc.)
│   └── helpers.php
│
├── vendor/                    # Dependencias (si usas Composer)
│
├── .gitignore                 # Para ignorar archivos en Git                                           (listo)
└── README.md                  # Documentación general del proyecto                                     (listo)
