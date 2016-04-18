
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
        	<!-- TO DO: Add User Manully -->

            <!-- Show User List -->
            @if (count($users) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>ID</th>
                                <th>User</th>
                                <th>AccountType</th>
                                <th>Permission</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="table-text"><div>{{ $user->id }}</div></td>
                                        <td class="table-text"><div>{{ $user->name }}</div></td>
                                        <td class="table-text"><div>{{ $user->type }}</div></td>
                                        <td class="table-text"><div>
                                            <select>
                                                <option value="Normal">Normal</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Super">SuperAdmin</option>
                                            </select>
                                        </div></td>
<!--                                         <td class="table-text"><div>{{ $user->permission }}</div></td> -->

                                        <!-- TO DO: User Delete Button -->

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users List
                    </div>
                    <div class="panel-body">
						<strong>User Table is Null!</strong>
                    </div>                    
                </div>            	
            @endif
        </div>
    </div>

@endsection