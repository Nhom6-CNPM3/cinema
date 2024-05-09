

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>User list</h2>

                    
                    </div>
                </div>
            </div>
            <!-- end main title -->

            <!-- reviews -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Phone Number</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    <div class="main__table-text">{{ $user->id_user }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $user->sdt }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $user->username }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $user->email }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $user->role == 1 ? 'Admin' : 'Member' }}</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        
                                        <a href="{{ route('admin.users.edit', $user->id_user) }}" class="main__table-btn main__table-btn--edit">
                                            <i class="icon ion-ios-create"></i>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user->id_user) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="main__table-btn main__table-btn--delete">
                                                <i class="icon ion-ios-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
            <!-- end reviews -->

            
        </div>
    </div>
</main>
    @endsection
