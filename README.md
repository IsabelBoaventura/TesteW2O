# Gerenciamento de estoque - W2O


Teste WEB - PHP 

## Arquitetura

O que estou usando para o sistema funcionar

* PHP (7.4.19 );
* Composer (2.3.10);
* Laravel (8.6.12);
* Icon:    

	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	
	
## Banco de Dados

Criando o banco de dados: CREATE SCHEMA `w2o` ;


Criando as tabelas via migration.

Erro na categoria:

	$table->foreign('categoria_id')->unsigned()->nullable()->references('id')->on('categorias')
            ->onDelete('set null');
			
	$table->foreign('categoria_id')->unsigned()->nullable()->references('id')->on('categorias');         



## Pastas

## Tabelas

Haverão duas tabelas principais: Produtos e Categorias;

Criando informações da tabela Categorias:

INSERT INTO categorias ( created_at, updated_at, nome, descricao, situacao)
VALUES
( now(), now(), 'ESCOLAR','Material Escolar', 'A' ),
( now(), now(), 'CONSTRUÇÃO','Material de Construção', 'A' ),
( now(), now(), 'ALIMENTAÇÃO','Produtos de Alimentação', 'A' );



Criando informações da tabela Produtos:

INSERT INTO produtos ( created_at, updated_at, nome, descricao, situacao)
VALUES
( now(), now(), 'ESCOLAR','Material Escolar', 'A' ),
( now(), now(), 'CONSTRUÇÃO','Material de Construção', 'A' ),
( now(), now(), 'ALIMENTAÇÃO','Produtos de Alimentação', 'A' );




## Iniciando 

Para iniciar o servidor: 

	php artisan serve
	




