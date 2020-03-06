{{--@extends("layouts.app")--}}
@extends('company.index')
@section("company-content")
    <main role="main">
        <section>
            <h2>Employees</h2>
            <a href="/company/employee-create" class="btn btn-light font-weight-bold">
                Add new Employee
            </a>
            @if(count($employees) > 0)

                <table class="table table-striped results">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">EGN</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Position</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $employees as $employee )
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->firstname}} {{$employee->lastname}}</td>
                            <td>{{$employee->egn}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->is_active === 1 ? 'Active' : 'Blocked'}}</td>
                            <td>{{$employee->position}}</td>
                            <td>
                                <a href="/company/employee-edit/{{$employee->id }}" class="btn btn-primary">Edit</a>
                                <a href="/company/employee-toggle-block/{{$employee->id }}"
                                   class="btn btn-success">{{$employee->is_active === 1 ? 'Block' : 'Activate'}}</a>
                                <form action="/company/employee-delete/{{$employee->id }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </section>
    </main>
@endsection
