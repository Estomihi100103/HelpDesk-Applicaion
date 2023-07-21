@extends('layouts.main')

@section('container')
    <div class="container bg-body-secondary mt-4 ">
        <h2 class="container mb-4" style="font-weight: bold; font-style: italic;">Frequently Ask Question</h2>



        @for ($i = 0; $i < 5; $i++)
            <div class="card mt-4">
                <div class="card-body">
                    <a class="btn btn-secondary disabled" role="button" aria-disabled="true">Q</a>
                    <h6 class="card-title fs-10 mb-1"
                        style="font-weight: bold; font-style: italic; margin: 0 10px; display: inline-block;">
                        Jelaskan perbedaan data analyst dengan data scince</h6>
                        <br><br>
                    <a class="btn btn-success disabled" role="button" aria-disabled="true">Q</a>
                    <p class="card-text mt-1" style="display: inline-block;">This is a wider card with supporting text below
                        as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        @endfor

    </div>
@endsection
