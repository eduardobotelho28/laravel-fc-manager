# Laravel FC Manager

Sistema de gerenciamento para o time fictício Laravel FC, desenvolvido como projeto acadêmico para o IFSUL Campus Charqueadas.

## Como executar o projeto

### Pré-requisitos
- PHP 8.0 ou superior
- Composer
- MySQL
- XAMPP/WAMPP ou servidor web local

### Passo a passo

#### 1. Clonar o repositório
```bash
git clone [URL_DO_REPOSITORIO]
cd laravel-fc-manager
```

#### 2. Instalar dependências
```bash
composer install
```

#### 3. Configurar banco de dados
O arquivo `.env` já está incluído no projeto com as configurações padrão:
- **Banco de dados:** `laravel-fc-manager`
- **Usuário:** `root`
- **Senha:** (vazia)

**Importante:** Certifique-se de que existe um banco de dados chamado `laravel-fc-manager` no seu MySQL. Caso precise alterar as configurações de conexão, edite o arquivo `.env` conforme sua necessidade.

#### 4. Executar migrations e seeder
```bash
php artisan migrate
php artisan db:seed --class=UsersTableSeeder
```

#### 5. Iniciar o servidor
Você pode executar o projeto de duas formas:

**Opção 1 - Usando o servidor built-in do PHP:**
```bash
php artisan serve
```

**Opção 2 - Usando XAMPP/WAMPP:**
- Inicie o XAMPP/WAMPP
- Acesse o projeto através do navegador

**Importante:** Certifique-se de que o serviço MySQL esteja rodando.

#### 6. Acessar o sistema
- **Email:** admin@gmail.com
- **Senha:** 123456

Após o login, você poderá navegar e utilizar todas as funcionalidades do sistema de gerenciamento do Laravel FC.

---

**Projeto desenvolvido para fins acadêmicos - IFSUL Campus Charqueadas**
