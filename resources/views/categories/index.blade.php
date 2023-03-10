@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Categories</h3>
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
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($category as $cat)
                <tr>
                    <th>{{$cat->id}}</th>
                    <th>{{$cat->name}}</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>

                    </td>
                </tr>
                @endforeach


                </tr>

            </tbody>


        </table>
    </div>
</div>




@endsection