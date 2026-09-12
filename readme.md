<div align="center">

# 📝 CRUD PHP

### Sistema simples de cadastro, edição, visualização e exclusão de usuários

Desenvolvido em **PHP + MySQL**, utilizando **Composer** e **PHP dotenv** para gerenciamento de dependências e variáveis de ambiente.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![WampServer](https://img.shields.io/badge/WampServer-white?style=for-the-badge&logo=wampserver&logoColor=orange)
![License](https://img.shields.io/badge/license-MIT-brightgreen?style=for-the-badge)

</div>

---

## 📌 Índice

- [Sobre o projeto](#-sobre-o-projeto)
- [Tecnologias utilizadas](#️-tecnologias-utilizadas)
- [Estrutura do projeto](#-estrutura-do-projeto)
- [Como rodar o projeto](#-como-rodar-o-projeto)
- [Nota sobre segurança](#-nota-sobre-segurança-produção)
- [Banco de dados](#️-banco-de-dados)
- [Desenvolvedor](#-desenvolvedor)
- [Licença](#-licença)

---

## 📖 Sobre o projeto

Este projeto é um **CRUD simples** desenvolvido em PHP + MySQL, permitindo realizar operações de:

- ✅ Cadastro de usuários
- ✏️ Edição de usuários
- 👁️ Visualização de usuários
- 🗑️ Exclusão de usuários

Foi criado como projeto de estudo, aplicando conceitos de conexão com banco de dados, variáveis de ambiente e organização de um projeto PHP com Composer.

---

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Uso no projeto |
|---|---|
| **PHP** | Lógica do back-end e regras do CRUD |
| **MySQL** | Armazenamento dos dados de usuários |
| **WampServer** | Ambiente local de desenvolvimento (Apache + MySQL) |
| **Composer** | Gerenciador de dependências PHP |
| **PHP dotenv** | Leitura de variáveis de ambiente do arquivo `.env` |

---

## 📁 Estrutura do Projeto

```
CRUD_PHP/
├── config/
│   └── database.php
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── create.php
│   ├── delete.php
│   ├── edit.php
│   ├── form.php
│   └── index.php
├── vendor/
├── .env
├── .gitignore
├── composer.json
├── composer.lock
└── README.md
```

`config/` guarda o acesso ao banco e `public/` é a única pasta pensada para ficar exposta ao navegador — os arquivos sensíveis (`.env`, `config/`, `vendor/`) ficam fora dela de propósito.

---

## 🔧 Como Rodar o Projeto

### ✅ Pré-requisitos

Antes de começar, você vai precisar ter instalado:

- [ ] [WampServer](https://www.wampserver.com/)
- [ ] [Composer](https://getcomposer.org/)
- [ ] [Git](https://git-scm.com/)

### 1️⃣ Iniciar o WampServer

Abra o WampServer e certifique-se de que os serviços **Apache** e **MySQL** estejam com o ícone verde (em execução).

### 2️⃣ Clonar o repositório

Abra o terminal na pasta `www` do WampServer:

```bash
cd C:\wamp64\www
```

Clone o projeto:

```bash
git clone https://github.com/Patrick-Hoff/CRUD_PHP.git
```

Entre na pasta do projeto:

```bash
cd CRUD_PHP
```

### 3️⃣ Instalar as dependências

```bash
composer install
```

### 4️⃣ Configurar o banco de dados

Abra o **phpMyAdmin** e crie um banco de dados chamado:

```
crud
```

Depois, execute o seguinte script SQL:

```sql
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` varchar(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

### 5️⃣ Configurar o `.env`

Na raiz do projeto, crie um arquivo chamado `.env` com o seguinte conteúdo:

```env
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=
DB_NAME=crud
```

> ⚠️ Caso seu MySQL possua uma senha, informe-a em `DB_PASSWORD`.

### 6️⃣ Acessar o sistema

Com o WampServer, Apache e MySQL em execução, abra o navegador em:

```
http://localhost/CRUD_PHP/public/
```

---

## 🗄️ Banco de Dados

### Tabela `users`

| Campo | Tipo | Descrição |
|---|---|---|
| `userid` | `INT` | Identificador único do usuário (auto incremento) |
| `nome` | `VARCHAR(30)` | Nome do usuário |
| `password` | `VARCHAR(255)` | Senha do usuário |
| `isAdmin` | `VARCHAR(1)` | Define se o usuário é administrador |

---

## 👨‍💻 Desenvolvedor

<div align="center">

**Patrick Hoffmann Campos**

[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Patrick-Hoff)

</div>

---

## 📝 Licença

Este projeto está sob a licença **MIT** — sinta-se livre para usar, estudar e modificar.

<div align="center">

⭐ Se este projeto te ajudou de alguma forma, considere deixar uma estrela no repositório!

</div>