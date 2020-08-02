# API de Gerenciamento de funcionários e empresas no Teste da BRy Tecnologia

Este é uma API Rest feita em PHP, utilizando o framework Laravel, desenvolvido no teste de Desenvolvedor PHP FullStack.

Esta API permite que um usuário liste, adicione, edite e apague um funcionário ou empresa no banco de dados PostgreSQL.

### Tech

A API utiliza das bibliotecas PHP abaixo:
*[Laravel] - The PHP Framework for Web Application.
*[PostgreSQL] - The world's most advanced open source database
*[Docker] - Empowering App Development

### Variáveis que devem ser configuradas

A API por utilizar um banco de dados PostgreSQl, necessita ser configurada as credenciais de acesso, no arquivo .env do projeto. 

DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=gerenciamento
DB_USERNAME=postgres
DB_PASSWORD=123

### Uso 

Para execução da aplicação de exemplo, compile diretamente as classes ou importe o projeto em sua IDE de preferência.

### Documentação

Para instalar as dependências do projeto, e funcionar corretamente, rode o comando "composer install".

Antes de iniciar o servidor, é preciso criar as tabelas no banco de dados. Rode o comando 

"php artisan make:migration create_funcionarios_table" 

e em seguida,

"php artisan make:migration create_empresas_table"

Depois de instaldo, para rodar o servidor, rode o comando "php artisan serve;". 


[Laravel]: <https://laravel.com/>
[PostgreSQL]: https://www.postgresql.org/
