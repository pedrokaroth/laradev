@extends('front.master.master-with-side-bar')
@section('title', 'LaraDev o melhor curso de laravel do Brasil')
@section('js')
    <script>
        alert('teste');
    </script>
@endsection

@section('css')
    <style>
        .teste {
            color: purple;
        }
    </style>
@endsection

@section('sidebar')
    @parent
    <h3 class="teste">[PAGE] Sidebar do Curso</h3>
    <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, omnis?</li>
        <li>Accusamus, accusantium blanditiis dicta nam non qui reprehenderit vero voluptate!</li>
        <li>Architecto, consectetur cumque harum ipsum mollitia nemo nulla quae reprehenderit.</li>
        <li>Alias asperiores consequuntur cumque fugiat magni nesciunt obcaecati optio, similique?</li>
        <li>Deserunt distinctio impedit numquam sunt! Illum labore laboriosam quo tempore?</li>
    </ul>
@endsection

@section('content')

@endsection
