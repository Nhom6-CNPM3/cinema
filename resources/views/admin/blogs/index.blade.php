

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Blog List</h2>

                  
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    <div class="main__table-text">{{ $blog->id_tintuc }}</div>
                                </td>
                                <td>
                                    <div class="main__table-text">
                                        <img src="{{ asset('storage/' . $blog->hinhanh) }}" alt="Blog Image" style="max-width: 90px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="main__table-text">{{ $blog->tieude }}</div>
                                </td>

                                <td>
                                    <div class="main__table-text">

                                        {{ Str::limit($blog->noidung, 20, '...') }}</div>
                                </td>

                                <td>
                                    <div class="main__table-btns">
                                        
                                        <a href="{{ route('admin.blogs.edit', $blog->id_tintuc) }}" class="main__table-btn main__table-btn--edit">
                                            <i class="icon ion-ios-create"></i>
                                        </a>
                                        <form action="{{ route('admin.blogs.destroy', $blog->id_tintuc) }}" method="POST" style="display: inline;">
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
