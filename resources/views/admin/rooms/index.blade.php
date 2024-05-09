

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Rooms list</h2>

                    
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
                                <th>Name</th>
                                <th>Theater</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td>
                                    <div class="main__table-text">{{ $room->id_phong }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><a href="#">{{ $room->tenphong }}</a></div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $room->tenrap }}</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="{{ route('admin.rooms.edit', $room->id_phong) }}" class="main__table-btn main__table-btn--edit">
                                            <i class="icon ion-ios-create"></i> <!-- Edit icon -->
                                        </a>
                                        <form action="{{ route('admin.rooms.destroy', $room->id_phong) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="main__table-btn main__table-btn--delete">
                                                <i class="icon ion-ios-trash"></i> <!-- Delete icon -->
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
