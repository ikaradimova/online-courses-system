{{--@extends("layouts.app")--}}
@extends('company.index')
@section("company-content")
        <main role="main">
            <section>
                <h2>Positions</h2>
                    <a href="/company/position-create" class="btn btn-light font-weight-bold">
                        Add new position
                    </a>
{{--                @dd($positions);--}}
                @if(count($positions) > 0)

                    <table class="table table-striped results">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $positions as $position )
                            <tr>
                                <td>{{$position->id}}</td>
                                <td>
                                    {{$position->name}}
                                </td>
                                <td>{{$position->description}}</td>
                                    <td>
                                        <a href="/company/position-edit/{{$position->id }}" class="btn btn-primary">Edit</a>
                                        <form action="/company/position-delete/{{$position->id }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
{{--                                        {!! Form::open(["action" => ["ArticlesController@destroy", $article->id], "method" => "POST", "class" => "delete", "id" => "article-deletion-form"]) !!}--}}
{{--                                        {{Form::hidden("_method","DELETE")}}--}}
{{--                                        <button type="submit" id="article-deletion-button">--}}
{{--                                            <i class="fas fa-times" style="color: red"></i>--}}
{{--                                        </button>--}}
{{--                                        {!! Form::close() !!}--}}
                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </section>
        </main>
@endsection
