

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Schedule list</h2>

                  
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
                                <th>Movie</th>
                                <th>Theater</th>
                                <th>Room</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>
                                    <div class="main__table-text">{{ $schedule->id_lichchieu }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $schedule->atenphim }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $schedule->tenrap }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $schedule->tenphong }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $schedule->ngay }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $schedule->gio }}</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                       
                                        <a href="{{ route('admin.schedules.edit', $schedule->id_lichchieu) }}" class="main__table-btn main__table-btn--edit">
                                            <i class="icon ion-ios-create"></i>
                                        </a>
                                        <form action="{{ route('admin.schedules.destroy', $schedule->id_lichchieu) }}" method="POST" style="display: inline;">
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
