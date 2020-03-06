{{--@extends("layouts.app")--}}
@extends('company.index')
@section("company-content")
    <main role="main">
        <section>
            <div class="container">
                <h2>Add Employee</h2>
                <form action="/company/employee-add" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="text" type="text" name="firstname" placeholder="Firstname" required=""
                               value="{{old('firstname')}}">
                        <small class="register-error">@error('firstname') {{$message}} @enderror</small>
                    </div>
                    <div class="form-group">
                        <input class="text" type="text" name="lastname" placeholder="Lastname" required=""
                               value="{{old('lastname')}}">
                        <small class="register-error">@error('lastname') {{$message}} @enderror</small>
                    </div>
                    <div class="form-group">
                        <input class="text" type="number" name="egn" placeholder="EGN" required=""
                               value="{{old('egn')}}" maxlength="10">
                        <small class="register-error">@error('egn') {{$message}} @enderror</small>
                    </div>
                    <div class="form-group">
                        <input class="text" type="number" name="salary" placeholder="Salary" required=""
                               value="{{old('salary')}}">
                        <small class="register-error">@error('salary') {{$message}} @enderror</small>
                    </div>
                    <div class="form-group">
                        <input class="date form-control" type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                        <small class="register-error">@error('email') {{$message}} @enderror</small>
                    </div>
                    <div class="form-group">
                        <select name="position" id="position">
                            @foreach ($positions as $position)
                            <option value="{{$position->id}}">{{$position->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <button class="btn btn-light font-weight-bold" type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
@endsection
<script type="text/javascript">

</script>
