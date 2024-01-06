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
	
* migrations rollback:

	https://laravel.com/docs/10.x/migrations#rolling-back-migrations
	
* migrations campos tabela:

	https://laravel.com/docs/10.x/migrations#available-column-types
	
	
	
## Entidade

Denominação dada geralmente a classe de objetos que se quer declarar ao se usar em geral. Por exemplo, se queremos trabalhar com produtos, a entidade será "produto" esta mesma entidade poderá ser apresentado no plural, singular,  maiusculo, minusculo e de outras formas como for conveniente para o momento. 

Para fins de melhor compreender, todos os exemplos apresentado usaram a entidade <b style="color:blue; size:14px" >Evento</b>. 

	
## Convenções de nomes

Os nomes das entidades devem seguir determinados padrões para ser reconhecido pelo laravel. Por exemplo:

* Tabelas: serão escritas no plural e em minusculo (eventos);
* Model: primeira letra em Maiusculas, as restantes em minusculo e no singular (Evento);
* Controller: Primeira letra em maiusculo, restante do nome em minusculo, no singular, seguido pela palavra "Controller", sem espaço entre a entidade e a palavra "Controller" (EventoController). 

Cuidado com as palavras que o plural em português é diferente do plural em ingles. No idioma inglês para representar o plural, acrescenta um 's' no final de cada palavra. Em português, acrescentar o 's' pode não fazer sentido. Exemplo: entidade movimentação,  no plural ficaria movimentações, entretanto o laravel irá formar "movimentacaos".  
O que não será encontrado pelo banco de dados. 



	

	

Na tela pode se mostrar qual a versão do Laravel e do php se esta usando.

<code>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</code>


## Estrutura da Blade

Todas as blade terão a mesma estrutura, apenas repetir:

<code>@extends('layouts.main')
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
	
## Banco de Dados

Criando o banco de dados: CREATE SCHEMA `w2o` ;

Criando as tabelas via migration.


	
	
## Migrate

No nosso exemplo usaremos o banco já existente, portanto algumas migrations não será refeito. Como produto, categoria. Mas a migration de 'Movimentacoes' será refeita. 

Para verificar a situação das migrations:

	php artisan migrate:status
	
Para refazer as tabelsa no banco (sem salvar as informações)

	php artisan migrate:fresh
	
Para adicionar um novo campo, a uma tabela já existene:

	php artisan make:migration add_nome-do-campo_to_nome-da-tabela_table
	


Como eliminar este campo, que foi criado agora
	
	php artisan migrate:rollback
	
Apenas ver o que o rollback varia sem executar:

	php artisan migrate:rollback --pretend
	
Reverter(desfazer) todas as migrations já feitas:

	php artisan migrate:reset
	
Desfazer e refazer toda a estrutura do banco de dados:
	<b style="color:red;size:16px">Cuidado</b>

	php artisan migrate:refresh
	
	<b style="color:red;size:16px">Cuidado</b>
	
Refazendo apenas as ultimas 5 migrations:

	php artisan migrate:refresh --step=5
	
Alguns tipos de bancos que são aceitos nas migrations:  id, timestamp, text, sting, boolean, integer, ...
	
## Receber e enviar ao Banco

As conexões do nosso aplicativo com o banco de dados será realizada através da Model, será nestes arquivos que faremos as importações e exportações para o banco. 

## Model

As model são realizadas através do artisan

	php artisan make:model Event
	
Quase não se modificará a Model,  mas suas actions são essenciais para o Controller poder receber e enviar as informações do banco e para o banco. 



## Controller com a Model

Com a Model criada, temos de informar ao Controller que ele usará a Model. 
Assim dentro do controller, chamamos a model:

	use App\Models\Evento
	
E dentro da action index chamamos a função principal desta action. 

	$events = Evento::all();





## Pastas

## Tabelas

Haverão duas tabelas principais: Produtos e Categorias;

Criando informações da tabela Categorias:

	INSERT INTO categorias 
	( created_at, updated_at, nome, descricao)
	VALUES
	( now(), now(), 'ESCOLAR','Material Escolar' ),
	( now(), now(), 'CONSTRUÇÃO','Material de Construção' ),
	( now(), now(), 'ALIMENTAÇÃO','Produtos de Alimentação' );



Criando informações da tabela Produtos:

	INSERT INTO produtos 
	( nome, descricao, preco, foto, data_vencimento, created_at, updated_at, sku)
	VALUES
	( 'Leite', 'alimento liquido -  origem animal', 3.50,'', '2023-12-30', now(), now(),  'LEV-JN-SL-36-GN' ),
	( 'Mesa', 'material escritorio -  mesinha para o cha ', 395.50,'', '2023-12-30', now(), now(), 'CELIPXCE64'  ),
	( 'Arroz', 'alimento em graos', 5.50,'', '2024-12-30', now(), now(),  123654789 );



Criando informações da tabela Movimentação:

	INSERT INTO movimentacao 
	( produto_id, data_movimento, tipo_movimento, quantidade, estoque_atual)
	VALUES
	( 1, '2023-10-10', 'E', 10, 10 );


## Informações importantes

SKU é um código único, recomendável ter de 4 a 8 caracteres e pode ter letras e números.
Escolhi a quantidade máxima de 20 caracteres.
Deve ser escrito em letras Maiusculas, e evitar as letras 'l' e 'o' e os números 1 e 0 ;



## Iniciando 

Para iniciar o servidor: 

	php artisan serve
	
	
### Adicionando registros 

No laravel para adicionar registros no banco de dados será necessários alguns processos:

* criação do formulário para o usuário digitar os dados.

A criação do o form será realizada na View ( create.blade.php );

* Criação da Rota (web.php);

Quando é criada uma nova view, deve se informar qual a rota que devemos chamar ela, qual o tipo de ação que esta rota terá e para qual função dentro do controller ela deve ser dirigida. 

 

	Route::post('events', [EventController::class, 'store')
	
O método **store** é padrão do laravel ( não é obrigatório, mas é o recomendável) será ele que será responsável pelo envio dos dados para o banco de dados. 

* Criação da Action dentro do Controller 

Dentro do controller, devemos criar a action que irá receber as informações do formulário e encaminhar para o banco. 

Para capturar as informações do formulário  usaremos a variável **$request**.

Chamamos a model do banco e passamos cada um dos campos do formulário para os campos do banco.

Chamamos o método que salva as informações no banco. 

E redirecionamos para a página principal, ou a página que desejarmos.

	
    public function store ( Request $request){
		$event = new Event;
		$event->titulo = $request->titulo
		$event->descricao = $request->descricao
		$event->save();
		return redirect('/');
	}
    
	
	
	
	teste phytion 
	
	
	
	~~~python
    s = "Sintaxe do Pythong"
    print s
    ~~~


	
	```python
    s = "Sintaxe do Pythong"
    print s
    ```
	
	
	




