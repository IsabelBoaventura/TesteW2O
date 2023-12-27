# Gerenciamento de estoque - W2O

* v01_produtos: foi a versão entregue para este teste.
* Estoque: é a versão atual que estou trabalhando neste momento.

Caso aconteça algum problema, que não de apenas para recomeçar uma aula, irei recomeçar todo o projeto novamente , até sair da forma que preciso.



## Arquitetura

O que estou usando para o sistema funcionar

* PHP (7.4.19 );
* Composer (2.3.10);
* Laravel (8.6.12);
* MySQL (8.0.33);
* Icon:    

	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	
	
## Documentação

Onde encontrar as informações de Laravel:

	https://laravel.com/docs/10.x
	
* laracasts:

	https://laracasts.com/
	
* notícias / novidades:

	https://laravel-news.com/
	
* migrations:

	https://laravel.com/docs/10.x/migrations
	
* tipos de colunas das migrations:

	https://laravel.com/docs/10.x/migrations#available-column-types
	
* modificadores das colunas da migration:

	https://laravel.com/docs/10.x/migrations#column-modifiers
	
* indices para migrations:

	https://laravel.com/docs/10.x/migrations#indexes
	

	

	

	

Na tela pode se mostrar qual a versão do Laravel e do php se esta usando.

<code>
	  Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</code>


## Estrutura da Blade

Todas as blade terão a mesma estrutura, apenas repetir:

<code>
	@extends('layouts.main')
	
	@section('title', 'titulo desta blade') 
	
	@section('content')
	
	@endsection
</code>





## Controllers

Criando os controles através do artisan.
Abrindo um novo navegador, indo para o mesmo diretório e digite o comando:

	php artisan make:controller CategoriaController
	
	php artisan make:controller ProdutoController
	
	php artisan make:controller MovimentacaoController
	
	
## Migrate

No nosso exemplo usaremos o banco já existente, portanto algumas migrations não será refeito. Como produto, categoria. Mas a migration de 'Movimentacoes' será refeita. 

Para verificar a situação das migrations:

	php artisan migrate:status
	
Para refazer as tabelsa no banco (sem salvar as informações)

	php artisan migrate:fresh
	
Para adicionar um novo campo, a uma tabela já existene:

	php artisan make:migration add_nome-do-campo_to_nome-da-tabela_table
	


(Como eliminar este campo, que foi criado agora)


	

	





















	
	
## Banco de Dados

Criando o banco de dados: CREATE SCHEMA `w2o` ;


Criando as tabelas via migration.



## Pastas

## Tabelas

Haverão duas tabelas principais: Produtos e Categorias;

Criando informações da tabela Categorias:

INSERT INTO categorias ( created_at, updated_at, nome, descricao)
VALUES
( now(), now(), 'ESCOLAR','Material Escolar' ),
( now(), now(), 'CONSTRUÇÃO','Material de Construção' ),
( now(), now(), 'ALIMENTAÇÃO','Produtos de Alimentação' );



Criando informações da tabela Produtos:

INSERT INTO produtos ( nome, descricao, preco, foto, data_vencimento, created_at, updated_at, sku)
VALUES
( 'Leite', 'alimento liquido -  origem animal', 3.50,'', '2023-12-30', now(), now(),  'LEV-JN-SL-36-GN' ),
( 'Mesa', 'material escritorio -  mesinha para o cha ', 395.50,'', '2023-12-30', now(), now(), 'CELIPXCE64'  ),

( 'Arroz', 'alimento em graos', 5.50,'', '2024-12-30', now(), now(),  123654789 );



Criando informações da tabela Movimentação:

INSERT INTO movimentacao ( produto_id, data_movimento, tipo_movimento, quantidade, estoque_atual)
VALUES
( 1, '2023-10-10', 'E', 10, 10 );


## Informações importantes

SKU é um código único, recomendável ter de 4 a 8 caracteres e pode ter letras e números.
Escolhi a quantidade máxima de 20 caracteres.
Deve ser escrito em letras Maiusculas, e evitar as letras 'l' e 'o' e os números 1 e 0 ;



## Iniciando 

Para iniciar o servidor: 

	php artisan serve
	
	
	
	
	
	




