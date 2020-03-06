{{--@extends("layouts.app")--}}
@extends('company.index')
@section("company-content")
    <main role="main">
        <section>
            <h2>Add Position</h2>
            <form action="/company/position-update/{{$position->id}}" method="post">
                @if($errors->any())
                    <div class="register-error">{{ implode('', $errors->all(':message')) }}</div>
                @endif
                @csrf
                {{--                <input class="text" type="text" name="name" placeholder="Position name" required="">--}}
                {{--                --}}{{--                @error('email') {{$message}} @enderror--}}
                {{--                <input class="text" type="text" name="description" placeholder="Position description" required="">--}}
                {{--                --}}{{--                @error('password') {{$message}} @enderror--}}
                <div class="add-article-field">
                    <input class="text" type="text" name="name" placeholder="Position name" value="{{$position->name}}" required="">

                    {{--            {{Form::label('body','Описание')}}--}}
                    {{--                <br>--}}
                    {{--                {{Form::text('symptoms', '',['placeholder' => 'Симптоми на болестта.' ])}}--}}
                </div>
                <textarea name="description">{{$position->description}}</textarea>
                <input class="btn btn-secondary" type="submit" value="Submit">
            </form>
        </section>
    </main>
@endsection
