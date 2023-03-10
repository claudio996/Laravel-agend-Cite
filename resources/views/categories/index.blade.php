@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Specialities</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('/categories/create') }}" class="btn btn-sm btn-primary">New categories</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            /argon/
                        </th>
                        <td>
                            4,569
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>

                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>

 


@endsection
