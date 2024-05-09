

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Movies list</h2>
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
                                <th>Title</th>
                                <th>Image</th>
                                <th>Productor Film</th>
                                <th>Genre</th>
                                <th>Country</th>
                                <th>Director</th>
                                <th>Actor</th>
                                <th>Time</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                            <tr>
                                <td>
                                    <div class="main__table-text">{{ $movie->id_phim }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><a href="#">{{ $movie->atenphim }}</a></div>
                                </td>
                                <td>
                                    <div class="main__table-text">
                                        <img src="{{ asset('storage/' . $movie->hinhanh) }}" alt="Movie Image" style="max-width: 100px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $movie->nsx }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $movie->theloai }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $movie->quocgia }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $movie->daodien }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $movie->dienvien }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $movie->thoiluong }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $movie->created_at }}</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                       
                                        <a href="{{ route('admin.movies.edit', $movie->id_phim) }}" class="main__table-btn main__table-btn--edit">
                                            <i class="icon ion-ios-create"></i> <!-- Edit icon -->
                                        </a>

                                        <form action="{{ route('admin.movies.destroy', $movie->id_phim) }}" method="POST" style="display: inline;">
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
