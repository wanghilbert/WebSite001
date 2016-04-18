
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
        	<!-- TO DO: Add User Manully -->

            <!-- Show User List -->
            @if (count($request) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Key</th>
                                <th>Value</th>
                            </thead>
                            <tbody>
                                @foreach ($request as $key=>$value)
                                    <tr>
                                        <td class="table-text"><div>{{ $key }}</div></td>
                                        <td class="table-text"><div>{{ $value }}</div></td>
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