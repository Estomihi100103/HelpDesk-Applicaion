@extends('layouts.main')

@section('container')
    <div class="container bg-body-secondary mt-4">
        <h2 style="font-weight: bold; font-style: italic;">Beranda</h2>



        <!-- Button to trigger the modal -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control"data-bs-toggle="modal" data-bs-target="#exampleModal">
            <label for="floatingInput" style="font-weight: bold; font-style: italic; margin-top: 0.2rem;">Buat
                Pertanyaan</label>
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Set the modal width using 'modal-lg' class -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-center"
                            id="exampleModalLabel"style="font-weight: bold; font-style: italic; margin-bottom: 0.2rem;">Buat
                            Pertanyaan</h2>
                        <!-- Center the title and make it bold -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="submit" method="post">
                        <div class="modal-body">
                            <!-- Isi modal -->
                            <div class="mb-3">
                                <label for="questionTitle" class="form-label">Judul Pertanyaan</label>
                                <input type="text" class="form-control" id="questionTitle"
                                    placeholder="Tuliskan judul pertanyaan">
                            </div>
                            <div class="mb-3">
                                <label for="questionText" class="form-label">Pertanyaan Anda</label>
                                <textarea class="form-control" id="questionText" rows="4" placeholder="Ketik pertanyaan Anda"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="categorySelect" class="form-label">Kategori</label>
                                <select class="form-select" id="categorySelect">
                                    <option selected>Pilih kategori pertanyaan</option>
                                    <option value="web-programming">Web Programming</option>
                                    <option value="komputasi">Komputasi</option>
                                    <option value="data-sains">Data Sains</option>
                                    <option value="data-analis">Data Analis</option>
                                </select>
                            </div>
                            <!-- Additional instructions -->
                            <div class="alert alert-info" role="alert">
                                Kit untuk menjawab pertanyaan yang bagus. Pastikan pertanyaan yang Anda ajukan belum pernah
                                di
                                ajukan dan pastikan pertanyaan Anda singkat.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Kirim Pertanyaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        @for ($i = 0; $i < 5; $i++)
            <div class="card mt-4">
                <div class="card-body">
                    <h6 class="card-title fs-10 mb-1" style="font-weight: bold; font-style: italic; margin-bottom: 0.2rem;">
                        Estomihi</h6>
                    <p class="card-text mb-0"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <h5 class="card-title mt-2" style="font-weight: bold; font-style: italic;">Berpikir Komputasional</h5>
                    <p class="card-text mt-1">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>

                </div>

            </div>
        @endfor

    </div>
@endsection
