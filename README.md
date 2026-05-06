# Demo de Pago con Clip - Checkout Redirect V2

Este proyecto es una demostración sencilla de una tienda web estática que permite a los usuarios seleccionar productos, calcular el total de su carrito y redirigirlos automáticamente a una **pasarela de pago de Clip (Redirect V2)**.

##  Funcionalidades principales

- Diseño web responsive tipo tienda.
- Lista de productos con imágenes, descripciones y cantidades ajustables.
- Cálculo automático del total.
- Generación dinámica de `payment_request_url` usando la API de Clip.
- Redirección automática al checkout de Clip al confirmar pago.
- Estilo moderno y limpio, ideal como demo o base para proyectos más complejos.

## Estructura del Proyecto

- `index.html`: Página principal que incluye todo el HTML, CSS y JS.
- Las credenciales privadas nunca deben exponerse en aplicaciones frontend o código JavaScript público.
- Utiliza el archivo `checkout.php`, para almacenar tus Api Keys en Prod esto por motivos de seguridad y políticas CORS ya que el endpoint `/v2/checkout` está diseñado para integraciones server-to-server.
- Toda la lógica está contenida en el archivo HTML (estructura + estilos + lógica JS).

## Productos de prueba

Incluye tres artículos:

| Producto         | Precio  | Imagen                                                  |
|------------------|---------|----------------------------------------------------------|
| Jersey Burdeos   | $299.00 | ![Jersey](https://dcdn-us.mitiendanube.com/stores/005/471/805/products/1725538674403-ab533c801bd44d574d17314445515197-1024-1024.webp) |
| Vestido Linas    | $499.00 | ![Vestido](https://dcdn-us.mitiendanube.com/stores/005/471/805/products/14-1e83126b0ec6a148ff17314443478040-1024-1024.webp) |
| Falda Leopardo   | $699.00 | ![Falda](https://dcdn-us.mitiendanube.com/stores/005/471/805/products/1729615360945-150x150-9cd526d1ed0526944217314441101237-1024-1024.webp) |

## Integración con Clip

### API utilizada:
`POST https://api.payclip.com/v2/checkout`

### Cuerpo del request:
```json
{
  "amount": 1497,
  "currency": "MXN",
  "purchase_description": "Orden #OTCL101",
  "redireccion_url": {
    "success": "",
    "error": "",
    "default": ""
  }
}
```

> El `amount` se calcula automáticamente en el frontend, en función de los productos seleccionados.

### Requisitos:
- API Key pública de Clip codificada en base64 en el header `Authorization`.
- Redirección a la URL devuelta por `payment_request_url`.

## ⚠Consideraciones de seguridad

- Las credenciales privadas nunca deben exponerse en aplicaciones frontend o código JavaScript público.El endpoint /v2/checkout está diseñado para integraciones server-to-server.
- Para entornos reales, la solicitud al endpoint de Clip debe hacerse desde un backend seguro.
-  Este proyecto es solo para demostración/desarrollo.

## Instrucciones de instalación

1. Clona este repositorio o descarga el archivo `index.html` + `checkout.php`
2. Ajusta los valores de `Authorization` y `redireccion_url` según tu cuenta Clip o lógica.

## Publicar con GitHub Pages (opcional)

1. Sube el archivo a un repositorio público.
2. Ve a **Settings > Pages**.
3. Activa GitHub Pages en la rama `main` y la raíz `/`.
4. Tu demo estará disponible en:
   ```
   https://TU_USUARIO.github.io/TU_REPOSITORIO/
   ```

##  Autor

Inspirado por las integraciones oficiales de Clip.

## Recursos adicionales

- [Documentación oficial de Clip](https://developer.clip.mx)
- [Referencia de Checkout Redirect V2](https://developer.clip.mx/reference/redirect-v2)

## Licencia

Este proyecto está disponible bajo la licencia MIT para fines educativos y de demostración.
