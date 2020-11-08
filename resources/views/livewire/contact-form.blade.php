{{-- The Master doesn't talk, he acts. --}}
<div class="card bg-dark text-light">
    <div class="card-header pb-1">
        <h3>Contact Form</h3>
    </div>
    <div class="card-body">
        @if ($successMessage)
            <div class="alert alert-success" role="alert">
                <div class="row">
                    <div class="col">
                        {{ $successMessage }}
                    </div>
                    <div class="col-auto">
                        <button wire:click="$set('successMessage', null)" type="button" class="close">
                            <span>&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg">
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
            <div class="col-lg">
                <form wire:submit.prevent="submitForm" action="/contact" method="POST">
                    @csrf
                    <div class="form-group mb-1">
                        <label for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                               wire:model="name" name="name" value="{{ old('name') }}">
                        @error('name')
                        <span class="bg-dark text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email"
                               wire:model="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="bg-dark text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="phone">Phone</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                               wire:model="phone" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="bg-dark text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                wire:model="message" name="message" rows="4">{{ old('message') }}</textarea>
                        @error('message')
                        <span class="bg-dark text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-1 text-right">
                        <button class="btn btn-primary" type="submit" id="submit">
                            <span wire:loading wire:target="submitForm" class="spinner-border spinner-border-sm"></span>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
