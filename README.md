# API de Gerenciamento de funcionários e empresas no Teste da BRy Tecnologia

Este é uma API Rest feita em PHP, utilizando o framework Laravel, desenvolvido no teste de Desenvolvedor PHP FullStack.

Esta API permite que um usuário adicione, liste, edite e apague um funcionário ou empresa no banco de dados PostgreSQL.

### Tech

A API utiliza das tecnologias abaixo:
* [PHP] - Hypertext Preprocessor.
* [Apache] - The Apache HTTP Server Project.
* [Laravel] - The PHP Framework for Web Application.
* [PostgreSQL] - The world's most advanced open source database.
* [Docker] - Empowering App Development.
* [Composer] - Application-Level Package Manager.

### Variáveis que devem ser configuradas

A API por utilizar um banco de dados PostgreSQl, necessita ser configurada as credenciais de acesso, no arquivo .env do projeto (esse arquivo ainda não está criado, você deve criá-lo). Utilize o arquivo .env.example como exemplo.

O que deve ser configurado:

| Variável | Descrição | Arquivo de Configuração |
| ------ | ------ | ------ |
| DB_CONNECTION | Banco de dados utilizado | .env
| DB_HOST | URL de acesso ao banco | .env
| DB_PORT | Porta de acesso ao banco | .env
| DB_DATABASE | Nome do banco | .env
| DB_USERNAME | Usuário de acesso ao banco | .env
| DB_PASSWORD | Senha de acesso ao banco | .env

### Uso 

Para execução da aplicação de exemplo, instale as dependências do projeto e execute os comandos necessários.

### Documentação

Para instalar as dependências do projeto, e funcionar corretamente, rode o comando:

- composer install

Antes de iniciar o servidor, é preciso criar as tabelas no banco de dados. Rode o comando:

- php artisan make:migration 

Depois de instalado, para rodar o servidor, rode o comando:
- php artisan serve

[Laravel]: <https://laravel.com/>
[PostgreSQL]: https://www.postgresql.org/
[Docker]: https://www.docker.com/
[Composer]: https://getcomposer.org/
[PHP]: https://www.php.net/
[Apache]: https://httpd.apache.org/

### Observações

O Framework Lavarel, depende de alguns requisitos como php >= 7.2.5, JSON PHP Extension entre outras extensões . Certifique-se de instalar tudo corretamente. Segue o link para auxiliar na instalação:

https://laravel.com/docs/7.x/installation
