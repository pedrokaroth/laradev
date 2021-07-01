@extends('template.master.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">

                <form action="{{ route('course.store') }}" method="post" autocomplete="off" >
                    @csrf

                    <div class="form-group">
                        <label for="course">Curso:</label>
                        <input type="text" id="course" name="course" class="form-control" placeholder="Insira o nome do curso">
                    </div>
                    <div class="form-group">
                        <label for="tutor">Tutor:</label>
                        <input type="text" id="tutor" name="tutor" class="form-control" placeholder="Insira o nome do tutor do curso">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Insira o email do tutor">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
