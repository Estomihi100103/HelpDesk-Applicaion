@extends('Authlayouts.main')

@section('content')
    <div class="container d-flex  justify-content-center align-items-center py-0 mt-3">
        <div class="col-sm-12 col-md-8 col-lg-5">
            <img class="mx-auto d-block mb-0"
                src="https://github.com/Estomihi100103/HitaDo/assets/89466828/8ad3abcd-2890-4f9c-be0d-d34db94e0a5d"
                alt="Your Company" height="80">

            {{-- <a class="navbar-brand d-flex justify-content-center" href="#"
                style="font-weight: bold; font-style: italic;font-size: 24px; ">Bebras Help Desk</a> --}}

            <h2 class="text-center mb-2" style="font-weight: bold; font-style: italic;font-size: 24px;">Register</h2>

            <form action="#" method="POST">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama </label>
                    <input id="name" name="name" type="name" autocomplete="name" required class="form-control">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email </label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="form-control">
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">Phone </label>
                    <input id="phone" name="phone" type="phone" autocomplete="phone" required class="form-control">
                </div>

                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="form-control">
                </div>


                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>

                <button class="btn btn-primary w-100 py-2"
                    type="submit"style="font-weight: bold; font-style: italic;font-size: 24px;">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/auth/login" class="text-decoration-none">Login
                    now</a> </small>

        </div>
    </div>
@endsection
