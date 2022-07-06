## PHP-Interview

Aplicação fictícia utilizada para entrevistas técnicas.

### Requerimentos

Para instalar o php-interview é necessário apenas o GIT e o Docker.
- Instruções para instalar o GIT: https://git-scm.com/book/pt-br/v2/Come%C3%A7ando-Instalando-o-Git
- Instruções para instalar o Docker: https://docs.docker.com/get-docker/

### Instalação

- Clone o repositório php-interview `git clone https://bitbucket.org/leardi-developers/php-interview.git`
- Vá para o diretório raiz da aplicação `cd php-interview`
- Suba os containers da aplicação com docker-compose `docker-compose up -d`
- Execute a migração para criar a base de dados `docker exec -it php-interview php artisan migrate:fresh`
- Carregue a base com alguns dados de teste `docker exec -it php-interview php artisan db:seed`

### Verificar Instalação

Para verificar se a aplicação está instalada e funcionando, teste utilizando Postman ou um navegador. As seguintes URLs devem funcionar:

- GET http://localhost/api/imobiliarias (exibe uma lista de imobiliárias)
- GET http://localhost/api/corretores (exibe uma lista de corretores)

O resultado está no formato JSON.

## Rodando Testes

Para rodar testes (unit tests & feature tests) utilize o seguinte comando:

- `docker exec -it php-interview php artisan test`

