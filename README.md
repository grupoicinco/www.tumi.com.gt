# TUMI Guatemala — E-Commerce Website

E-commerce website for TUMI Guatemala built on the ICINCO framework (CodeIgniter 3). Covers the full retail experience: product catalog, shopping cart, user accounts, multi-method checkout, and a plugin-based CMS for content and store management.

---

## Features

### Storefront
- **Product catalog** — browseable by category, collection, gender, and silhouette; with sale pricing logic
- **Shopping cart** — session/cookie-based cart with quantity management
- **User accounts** — registration, login, address management, Google OAuth 2.0 sign-in
- **Checkout** — multi-step flow with support for:
  - Credit card (QPayPro / VisaNet Guatemala)
  - Bank transfer
  - LifeMiles loyalty points redemption
  - In-store payment
- **Order management** — order history, detail view, and change/return request submission

### CMS (back-office)
A plugin-based content management system allowing store staff to manage:
- Site content and images
- Product catalog and uploads
- Customer email communications
- User accounts and permissions

---

## Architecture

| Layer | Details |
|---|---|
| Framework | CodeIgniter 3 (custom ICINCO extension) |
| Controllers | `catalogo`, `carro`, `pedido`, `ingresa`, `perfil`, `atencion` + CMS plugins |
| Auth | Session-based + Google OAuth 2.0 (`oauth2callback`) |
| Database | MySQL via CodeIgniter Query Builder |
| Email | Transactional via `FW_Posts` library |

---

## Tech stack

- PHP / CodeIgniter 3
- MySQL
- Google OAuth 2.0
- QPayPro REST API (VisaNet Guatemala)
- JavaScript / jQuery
