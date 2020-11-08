@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mb-2 bg-dark text-light">
                <div class="card-header">{{ __('Examples') }}</div>

                @if (session('status'))
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
            </div>

            <div class="card bg-dark text-light">
                <div class="card-header pb-1">
                    <h3>Contact Form</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4>Get in touch</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col">
                            <form action="/contact" method="POST">
                                <div class="form-group mb-1">
                                    <label for="name">Name</label>
                                    <input class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group mb-1">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="email">
                                </div>
                                <div class="form-group mb-1">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" id="phone" name="phone" type="number">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                </div>
                                <div class="form-group mb-1 text-right">
                                    <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
