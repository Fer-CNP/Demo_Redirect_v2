 # Clip Checkout Redirect V2 - Demo Implementation!



Este proyecto es una demostración profesional de una tienda web que utiliza la **API Redirect V2 de Clip**. A diferencia de las integraciones básicas, esta versión utiliza una arquitectura de **Proxy Backend** para garantizar la seguridad de las credenciales y resolver problemas de CORS.

## Funcionalidades principales

- **Diseño Responsive:** Interfaz moderna tipo tienda optimizada para móviles y escritorio.
- **Cálculo Dinámico:** Gestión de carrito con actualización de totales en tiempo real.
- **Seguridad Server-to-Server:** Implementación de un puente PHP para proteger el API Key.
- **CORS Friendly:** Configuración de cabeceras para permitir peticiones seguras desde el navegador.
- **Flujo Completo:** Desde la selección del producto hasta la redirección automática a la pasarela de Clip.

## Arquitectura de la Solución

Para cumplir con las políticas de seguridad de Clip y las mejores prácticas de desarrollo, el proyecto se divide en dos capas:

1.  **Frontend (`index.html`):** Gestiona la interfaz de usuario y envía la información del pedido a nuestro propio servidor.
2.  **Backend (`checkout.php`):** Actúa como un proxy seguro que recibe la petición del frontend, añade las credenciales de Clip (Basic Auth) y solicita la URL de pago a la API oficial.

## Estructura del Proyecto

| Archivo | Descripción |
| :--- | :--- |
| `index.html` | Estructura, estilos (CSS) y lógica de cliente (JS). |
| `checkout.php` | Script PHP que gestiona la comunicación segura con la API de Clip. |

## Productos de Prueba

| Producto | Precio | Imagen |
| :--- | :--- | :--- |
| **Jersey Burdeos** | $299.00 | [Ver](https://dcdn-us.mitiendanube.com/stores/005/471/805/products/1725538674403-ab533c801bd44d574d17314445515197-1024-1024.webp) |
| **Vestido Linas** | $499.00 | [Ver](https://dcdn-us.mitiendanube.com/stores/005/471/805/products/14-1e83126b0ec6a148ff17314443478040-1024-1024.webp) |
| **Falda Leopardo** | $699.01 | [Ver](https://dcdn-us.mitiendanube.com/stores/005/471/805/products/1729615360945-150x150-9cd526d1ed0526944217314441101237-1024-1024.webp) |

##  Instrucciones de Configuración

1.  **Clonar el proyecto:**
    ```bash
    git clone [https://github.com/Fer-CNP/Demo_Redirect_v2.git](https://github.com/Fer-CNP/Demo_Redirect_v2.git)
    ```
2.  **Configurar API Key:**
    En `checkout.php`, reemplaza `TU_TOKEN_AQUI` con tu token de Clip en formato Base64.
3.  **Definir Redirecciones:**
    Asegúrate de actualizar las URLs de `success`, `error` y `default` en el objeto `payload` dentro de `index.html` para que coincidan con tu dominio.

## ⚠️ Consideraciones de Seguridad

- **Integración Server-to-Server:** El endpoint `/v2/checkout` de Clip no permite peticiones directas desde el navegador (CORS). El uso de `checkout.php` es obligatorio para que la integración funcione.
- **Protección de Credenciales:** Nunca subas tu Token real a repositorios públicos. Utiliza variables de entorno o archivos protegidos en producción.

## 📚 Recursos Adicionales

- [Documentación oficial de Clip](https://developer.clip.mx)
- [Referencia de Checkout Redirect V2](https://developer.clip.mx/reference/introduccion-a-clip-checkout)

---
**Autor:** [Fer-CNP](https://github.com/Fer-CNP)  
**Licencia:** MIT - Fines educativos y de demostración.
