# Projeto Marketplace

![Bonanza](https://github.com/Samanta00/Marketplace/assets/80990432/92681aa7-ecca-46d2-b858-7b8614a7b9a7)

Bem-vindo ao Projeto Marketplace! Este projeto tem como objetivo ilustrar um marketplace, fornecendo uma plataforma virtual onde o cliente pode acessar e visualizar todos os produtos, adicioná-los ao carrinho e realizar compras de forma prática e segura.

## Funcionalidad
es Principais

- Listagem de produtos disponíveis para compra.
- Adição de produtos ao carrinho de compras.

## Tecnologias Utilizadas

- Laravel: Um poderoso framework PHP para o desenvolvimento de aplicações web.
- PostgreSQL: Um sistema de gerenciamento de banco de dados relacional.
- HTML/CSS: Linguagens de marcação e estilo para a construção das páginas web.
- JavaScript: Uma linguagem de programação utilizada para interatividade do lado do cliente.
- Typescript: Um framework de tipagem de funções.

## Requisitos de Instalação

Antes de iniciar a configuração do projeto, verifique se o seu ambiente atende aos seguintes requisitos:

- PHP >= 7.4
- PostgreSQL >= 5.7
- Composer (https://getcomposer.org/)

## Instalação

Siga os passos abaixo para configurar o projeto em sua máquina local:

 1. Clone o repositório para o seu ambiente local:

   ```bash
   git clone https://github.com/Samanta00/Marketplace.git


 2. Instalação de dependências:
 abra a parta do projeto no terminal 
 cd backend
 composer install
 npm install

3. Utilização do banco de dados:
Copie o arquivo .env.example e renomeie para .env:
exemplo: cp .env.example .env

4. Configure o arquivo .env com as informações do banco de dados:
Para uma Facilidade Maior utiliza o banco de dados utilizado para a criação desse projeto
### DB_CONNECTION=pgsql
### DB_HOST=snuffleupagus.db.elephantsql.com
### DB_PORT=5432
### DB_DATABASE=dllpzhjv
### DB_USERNAME=dllpzhjv
### DB_PASSWORD=gAiRTM_M_R_svn4kUOHesFkSLkIm1Izu

5. Gere uma nova chave para a aplicação:
php artisan key:generate

6. Execute as migrações do banco de dados:
php artisan migrate

7. Inicie o servidor de desenvolvimento:
php artisan serve

 Ao Executar o backend depois de instalar todas as dependências e configurar todas as tabelas que exigem ao uso do projeto, você poderá utilizar as rotas.

 Um exemplo de como você pode listar as rotas é a seguinte:
![rota1](https://github.com/Samanta00/Marketplace/assets/80990432/841b1ff0-6460-478a-819e-8dae18df2352)

 
 Agora você pode dar continuidade com todas as outras rotas. Estou listando todas as rotas desse projeto

Rotas de Produtos:
utilize o GET para ler a rota
http://127.0.0.1:8000/api/products

utilize o POST para adicionar novos valores a rota
http://127.0.0.1:8000/api/products

utilize o GET passando um id especifico que queira visualizar tal produto
http://127.0.0.1:8000/api/view/{id}

utilize o PUT passando um id especifico que queira alterar tal produto
http://127.0.0.1:8000/api/update/{id}

utilize o DELETE passando um id especifico que queira alterar tal produto
http://127.0.0.1:8000/api/delete/{id}

Rotas Para Categoria
utilize o GET para ler a rota
http://127.0.0.1:8000/api/categories

utilize o POST para adicionar novos valores a rota
http://127.0.0.1:8000/api/categories

utilize o DELETE passando um id especifico que queira alterar tal categoria
http://127.0.0.1:8000/api/categories/{id}

Rotas Para Cart
utilize o GET para ler a rota
http://127.0.0.1:8000/api/cart

utilize o POST para adicionar novos valores a rota
http://127.0.0.1:8000/api/cart

utilize o PUT passando um id especifico que queira alterar tal produto
http://127.0.0.1:8000/api/cartupdate/{id}

utilize o DELETE passando um id especifico que queira alterar tal produto do carrinho de compras
http://127.0.0.1:8000/api/cart/{id}
