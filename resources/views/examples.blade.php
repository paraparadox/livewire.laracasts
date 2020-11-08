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
                            <p>
                                Eget nullam non nisi est sit amet facilisis magna etiam. Pretium fusce id velit ut. Ac orci
                                phasellus egestas tellus rutrum tellus pellentesque eu. Consequat nisl vel pretium lectus
                                quam id leo in vitae. Tellus id interdum velit laoreet id donec ultrices tincidunt. Enim nec
                                dui nunc mattis enim ut tellus. Justo laoreet sit amet cursus sit amet. Iaculis eu non diam
                                phasellus vestibulum lorem sed.
                            </p>
                        </div>
                        <div class="col">
                            <form action="/contact" method="POST">
                                @csrf
                                <div class="form-group mb-1">
                                    <label for="name">Name</label>
                                    <input class="form-control @error('name') alert-danger @enderror" id="name"
                                        name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="bg-dark text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-1">
                                    <label for="email">Email</label>
                                    <input class="form-control @error('email') alert-danger @enderror" id="email"
                                        name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="bg-dark text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-1">
                                    <label for="phone">Phone</label>
                                    <input class="form-control @error('phone') alert-danger @enderror" id="phone"
                                        name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="bg-dark text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control @error('message') alert-danger @enderror" id="message"
                                        name="message" rows="4">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="bg-dark text-danger">{{ $message }}</span>
                                    @enderror
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
