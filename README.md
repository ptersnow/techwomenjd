# techwomenjd

Plataforma web para cadastro de informações das mulheres da STEM de Jardim.
                                                
## Como usar

1. [Requisitos](#1-requisitos)
2. [Instalação](#2-instalação)
3. [Acesso](#3-acesso)

## 1. Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel 9](https://laravel.com/docs)
- [Node.js](https://nodejs.org/en/)
- [Bootstrap](https://getbootstrap.com/)
- [JQuery](https://jquery.com/)


## 2. Instalação

**2.1.** Clone o repositório:

```bash
    git clone https://github.com/ptersnow/techwomenjd.git
```

**2.2.** Vá até a pasta local que foi criada contendo o projeto:

```bash
    cd techwomenjd
```

**2.3.** Instalação das dependências do projeto com composer:
```bash
    composer install
```
**2.3.** Criar Link simbólico para o storage

php artisan storage:link

**2.4.** Faça uma cópia do arquivo `.env.example` e renomeie para `.env`:

**2.6.** Crie o arquivo do banco de dados dentro da pasta database

```bash
    touch database/database.sqlite
```


**2.7.** Configure a conexão com os dados do banco de dados no arquivo `.env`:

    DB_CONNECTION=sqlite


**2.5.** Criação de nova chave de criptografia:
```bash    
    php artisan key:generate
```

**2.7.** Geração do cache das configurações da aplicação:
```
    composer build
```

**2.8.** Criação das tabelas e inserção dos dados no banco de dados:

```bash
    php artisan migrate:fresh --force --seed    
```

**2.9.** Iniciar o servidor da aplicação
```
    php artisan serve
```

## 3. Acesso
> Caso a instalação tenha sido realizada em um host local, troque o domínio por **localhost:8000** ou **127.0.0.1:8000**.

**3.1.** Acesso à área pública da aplicação:

> **URL:** http://domínio/


**3.1.** Acesso à área privada da aplicação:

> **URL:** http://domínio/admin <br/> 

Criar Usuario pelo terminal usando tinker:

```bash

 php artisan tinker

```

No tinker: 

```bash

>>> $user = new \App\User;
>>> $user->email = 'admin@admin.edu';
>>> $user->password = Hash::make('secret'); # altere 'secret' para uma senha forte
>>> $user->name = 'Administrator Name';
>>> $user->save();
>>> exit() # sair do tinker

```
