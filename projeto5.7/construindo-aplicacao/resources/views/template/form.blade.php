@extends('template.master.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                -
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach

                <form action="{{ route('course.store') }}" method="post" autocomplete="off" >
                    @csrf

                    <div class="form-group">
                        <label for="course">Curso:</label>
                        <input type="text" id="course" name="course" class="form-control {{ ($errors->has('course') ? 'is-invalid' : '') }}" placeholder="Insira o nome do curso" value="{{old('course')}}">
                        @if($errors->has('course'))
                            <div class="invalid-feedback">
                                {{ $errors->first('course') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tutor">Tutor:</label>
                        <input type="text" id="tutor" name="tutor" class="form-control  {{ ($errors->has('tutor') ? 'is-invalid' : '') }}" placeholder="Insira o nome do tutor do curso" value="{{old('tutor')}}">
                        @if($errors->has('tutor'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tutor') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control  {{ ($errors->has('email') ? 'is-invalid' : '') }}" placeholder="Insira o email do tutor" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
