# Sistema de Agendamento de Aulas

Este projeto é uma aplicação para gerenciamento de funcionários e alunos, incluindo funcionalidades de login, agendamento de aulas e treinos, e comunicação via e-mail.

## Tecnologias Utilizadas

- **Frontend:** Blade (Laravel)
- **Backend:** Laravel 10

## Funcionalidades Principais

- **Gerenciamento de Funcionários:** Permite adicionar, editar e remover funcionários.
- **Login de Funcionários:** Sistema de autenticação para funcionários.
- **Gerenciamento de Alunos:** Permite adicionar, editar e remover alunos.
- **Agendamento de Aulas e Treinos:** Funcionalidade para agendar aulas e treinos.
- **Sistema de Comunicação com Alunos:** Envio de e-mails para comunicação com alunos.
- **Envio Automático de E-mails:** Sistema automatizado para envio de e-mails.

## Como Rodar o Projeto

### Pré-requisitos

- Certifique-se de ter o Node.js instalado em sua máquina.
- Certifique-se de ter o Composer instalado para gerenciar as dependências do Laravel.
- Certifique-se de ter o MySQL instalado para gerenciar o banco de dados do Laravel.

### Passos para Execução

1. **Clone o Repositório:**
```bash
git clone https://github.com/usuario/nome-do-projeto.git
cd nome-do-projeto
```

2. **Instale as Dependências do Laravel:**
```bash
composer install
```

3. **Instale as Dependências do Node.js:**
```bash
npm install
```

4. **Configure o ambiente para o banco de dados**
```properties
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[nome_do_seu_banco]
DB_USERNAME=[seu_usuario]
DB_PASSWORD=[sua_senha_super_segura]
```

5. **Configure o ambeiente para o envio de e-mail**
```properties
MAIL_MAILER=[protocol]
MAIL_HOST=[host_de_email]
MAIL_PORT=[port]
MAIL_USERNAME=[seu_usuario_de_email]
MAIL_PASSWORD=[senha_do_seu_email]
MAIL_ENCRYPTION=[mail_encryption]
```

6. **Execute as Migrations:**
```bash
php artisan migrate
```

7. **Execute o Seeder(Opcional):**
```bash
php artisan db:seed
```

8. **Inicie o Servidor:**
```bash
php artisan serve
```

9. **Acesse o Projeto:**
```
Acesse o projeto em http://127.0.0.1:8000
```

## Login de ADM ##
- Email: beortizz@gmail.com
- Senha: bernardo1234


![Print do projeto](/image.png)
