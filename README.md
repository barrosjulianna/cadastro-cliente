# 📌 README – Cadastro de Clientes API

## 📖 Sobre o Projeto

API RESTful desenvolvida em **Laravel 12** para gerenciamento de **Clientes** e seus **Endereços**.
Permite criar, listar e consultar clientes, retornando dados em formato JSON.

---

## ⚙️ Requisitos

* PHP >= 8.2
* Composer
* Postman (para testar as rotas)

---

## 🚀 Instalação

1. **Clonar o repositório**

   ```bash
   git clone https://github.com/barrosjulianna/cadastro-cliente.git
   cd cadastro-cliente
   ```

2. **Instalar dependências**

   ```bash
   composer install
   ```

3. **Configuração inicial**

   * O projeto já copia automaticamente o `.env.example` para `.env`.
   * O banco SQLite (`database/database.sqlite`) já será criado.
   * As migrations serão executadas automaticamente após a instalação.
   * A chave `APP_KEY` também é gerada via Composer, mas se por algum motivo faltar, você pode rodar:

     ```bash
     php artisan key:generate
     ```

---

## ▶️ Executando o Projeto

1. **Subir o servidor local**

   ```bash
   php artisan serve --port=9000
   ```

   ou:

   ```bash
   php -S 127.0.0.1:9001 -t public
   ```

2. **Acessar os endpoints**

   * `GET  /api/clientes` → lista todos os clientes
   * `GET  /api/clientes/{id}` → busca cliente por ID
   * `POST /api/clientes` → cria novo cliente

---

## 📬 Testes com Postman

* Uma coleção do **Postman** está disponível em [`docs/CadastroClientes.postman_collection.json`](docs/Cadastro-Cliente.postman_collection.json).

Basta importar no Postman e executar os testes.

---

## 📑 Exemplo de JSON para criação

```json
{
  "nome": "Agro Vale",
  "email": "contato@agrovale.com",
  "cnpj": "12.987.654/0001-11",
  "valor_contrato": 5000.00,
  "endereco": {
    "logradouro": "Rua do Campo",
    "numero": "250",
    "cep": "87050-000",
    "bairro": "Zona Rural",
    "cidade": "Maringá"
  }
}
```

---

## 🛠️ Tecnologias Utilizadas

* **Laravel 12**
* **PHP 8.2**
* **SQLite**
* **Postman**



Quer que eu também prepare um **Exemplo de Resposta JSON** (o que a API devolve no POST bem-sucedido) e inclua no README?
