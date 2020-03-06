{{--@extends("layouts.app")--}}
@extends('company.index')
@section("company-content")
    <main role="main">
        <section>
            <div class="container">
                <h2>Add Position</h2>
                <form action="/company/position-add" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="text" type="text" name="name" placeholder="Position name" required=""
                               value="{{old('name')}}">
                        <small class="register-error">@error('name') {{$message}} @enderror</small>
                    </div>
                    <div class="form-group">
                        <textarea name="description"
                                  placeholder="Position description">{{old('description')}}</textarea>
                        <small class="register-error">@error('description') {{$message}} @enderror</small>
                    </div>
                    <button class="btn btn-light font-weight-bold" type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
@endsection
