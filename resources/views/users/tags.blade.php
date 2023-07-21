@extends('layouts.main')

@section('container')
    <div class="container bg-body-secondary mt-4 ">
        <h2 class="container mb-4" style="font-weight: bold; font-style: italic;">Tags</h2>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
        <div class="container py-3 px-3">
            <p style="font-style: italic; font-weight: 600;">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero debitis nesciunt rem fugit voluptatibus ab
                eaque
                error ipsum quas similique tenetur facilis quisquam repudiandae ut, placeat repellat doloremque, neque hic.
            </p>
        </div>

        <div class="row">
            @for ($i = 0; $i < 5; $i++)
                <div class="col-md-4">
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title fs-10 mb-1"
                                style="font-weight: bold; font-style: italic; margin: 0 10px;">
                                Komputasional</h5>
                            <small style=" margin: 0 10px">Count</small>
                            <p style="font-style: italic; font-weight: 550; margin: 0 10px">komputasional</p>
                            <a href="/" class="btn btn-primary mt-3"style=" margin: 0 10px">Read more</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
