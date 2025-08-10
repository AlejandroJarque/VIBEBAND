VIBEBAND/
├── config/                    # Configuraciones, conexión a BD, variables globales
│   └── db.php
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
│   └── bands/
│       └── register.php
│   └── layouts/               # Plantillas comunes (header, footer, etc.)
│
├── storage/                   # Archivos subidos, logs, cache, backups (si aplica)
│
├── tests/                     # Tests automáticos (para cuando avances más)
│
├── vendor/                    # Dependencias (si usas Composer)
│
├── .gitignore                 # Para ignorar archivos en Git
└── README.md                  # Documentación general del proyecto