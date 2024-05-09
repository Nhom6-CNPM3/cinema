

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Ticket List</h2>

               
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
                                <th>User ID</th>
                                <th>Movie</th>
                                <th>Theater</th>
                                <th>Room</th>
                                <th>Seat</th>
                                <th>Price</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                            <tr>
                                <td>
                                    <div class="main__table-text">

                                        {{ $ticket->id_ve }}</td>
                                    </div>
                                <td>
                                    <div class="main__table-text">

                                        {{ $ticket->id_user }}</td>
                                    </div>
                                <td>
                                    <div class="main__table-text">

                                        {{ $ticket->atenphim }}</td>
                                    </div>
                                <td>
                                    <div class="main__table-text">

                                        {{ $ticket->tenrap }}</td>
                                    </div>
                                <td>
                                    <div class="main__table-text">

                                        {{ $ticket->tenphong }}</td>
                                    </div>
                                <td>
                                    <div class="main__table-text">

                                        {{ $ticket->soghe }}</td>
                                    </div>
                                <td>
                                    <div class="main__table-text">

                                        {{ $ticket->giave }}</td>
                                    </div>
                                
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
