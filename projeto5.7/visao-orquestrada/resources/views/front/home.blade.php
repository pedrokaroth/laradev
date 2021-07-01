@extends('front.master.master')
@section('title', 'Seja muito bem vindo')
@section('content')

    Meu nome é {{ $user->name }}

    {!! $alert !!}

    @if(!empty($user->email))
        <p>O usuário informou um email</p>
    @elseif($user)
        <p>Existe um objeto usuário</p>
    @else
        <p>Não existe um objeto usuário</p>
    @endif

    @isset($user)
        <p>Existe um usuário setado</p>
    @endisset

    @empty($user)
        <p>Usuario vazio</p>
    @endempty

    @switch($user->level)
        @case(1)
        <p>Nivel 1</p>
        @break

        @case(2)
        <p>Nivel 2</p>
        @break
    @endswitch

    <h2>Listagem de Cursos</h2>
    @foreach($courses as $course)
        <div style="border: 1px solid black">
            <h3>{{ $course['name'] }}</h3>
            <p>Tutor: {{ $course['tutor'] }}</p>
            @php
                var_dump($loop);
            @endphp
        </div>
    @endforeach
    <div class="row">
        <div class="col-12">
            @component('front.components.alert', ['type' => 'danger'])
                Mensagem de teste
            @endcomponent
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @alert(['type' => 'danger'])
                Mensagem gerada pelo componente
            @endalert
        </div>
    </div>
    <h3 class="pedro_css">
        teste
    </h3>
@endsection
