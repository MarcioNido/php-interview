## PHP-Interview

Aplicação fictícia utilizada para entrevistas técnicas.

### Requerimentos

Para realizar a entrevista téncica você precisará: 

- Uma conta no GitHub: https://docs.github.com/pt/get-started/onboarding/getting-started-with-your-github-account
- GIT: https://git-scm.com/book/pt-br/v2/Come%C3%A7ando-Instalando-o-Git
- Docker: https://docs.docker.com/get-docker/

### Processo

Siga os seguintes passos:

- Acesse o repositório php-interview em: https://github.com/MarcioNido/php-interview
- Faça um fork do repositório para a sua conta do GitHub: https://docs.github.com/pt/get-started/quickstart/fork-a-repo
- Em seu terminal, clone o seu repositório php-interview. Utilize o seu repositório e não o original ou não conseguirá fazer alterações: `git clone https://github.com/<seu-usuario-github>/php-interview.git`
- Vá para o diretório raiz da aplicação: `cd php-interview`
- Suba os containers da aplicação com docker-compose: `docker-compose up -d`
- Execute a migração para criar a base de dados: `docker exec -it php-interview php artisan migrate:fresh`
- Carregue a base com alguns dados de teste: `docker exec -it php-interview php artisan db:seed`

### Verificar Instalação

Para verificar se a aplicação está instalada e funcionando, teste utilizando Postman ou um navegador. As seguintes URLs devem funcionar:

- GET http://localhost/api/imobiliarias (exibe uma lista de imobiliárias)
- GET http://localhost/api/corretores (exibe uma lista de corretores)

O resultado está no formato JSON.

### Rodando Testes

Para rodar testes (unit tests & feature tests) utilize o seguinte comando:

- `docker exec -it php-interview php artisan test`

### Execute as Tarefas

Faça as alterações no código em seu ambiente local de desenvolvimento de acordo com as instruções que serão enviadas por e-mail. Depois atualize seu repositório e crie um PULL REQUEST para o repositório original. 
