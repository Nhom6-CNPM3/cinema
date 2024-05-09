

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Seats list</h2>
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
                                <th>Room</th>
                                <th>Row</th>
                                <th>Seat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($seats as $seat)
                            <tr>
                                <td>
                                    <div class="main__table-text">{{ $seat->id_ghe }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $seat->room->tenphong }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $seat->sohang }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $seat->soghe }}</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="{{ route('admin.seats.edit', $seat->id_ghe) }}" class="main__table-btn main__table-btn--edit">
                                            <i class="icon ion-ios-create"></i> <!-- Edit icon -->
                                        </a>

                                        <form action="{{ route('admin.seats.destroy', $seat->id_ghe) }}" method="POST" style="display: inline;">
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
