
	@extends('layouts.main')
	
	@section('title', 'Principal') 
	
	@section('content')

        
        <h1>Tela principal</h1>
        <h2>Movimentação estará aqui depois </h2>


        {{-- @foreach($numeros as $cd_num )
            <p>{{ $cd_num }}</p>
            <p>{{ $loop->index }} </p>
        @endforeach
         --}}


        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
	
	@endsection




   