@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">

            <!-- Current Resources -->
            @if (count($resources) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Resources List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>ID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Delte</th>
                                <th>Edit</th>
                            </thead>
                            <tbody>
                                @foreach ($resources as $resource)
                                    <tr>
                                        <td class="table-text"><div>{{ $resource->id }}</div></td>
                                        <td class="table-text"><div>{{ $resource->user->name }}</div></td>
                                        <td class="table-text"><div>{{ $resource->title }}</div></td>
                                        <td class="table-text"><div>{{ $resource->address }}</div></td>
                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="/res/delete/{{ $resource->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-resource-{{ $resource->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/res/edit/{{ $resource->id }}" method="GET">
                                                {{ csrf_field() }}

                                                <button type="submit" id="edit-resource-{{ $resource->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Edit
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
