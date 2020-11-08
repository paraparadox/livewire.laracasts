@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mb-2 bg-dark text-light">
                <div class="card-header">{{ __('Examples') }}</div>

                @if (session('status'))
                    <div class="card-body pb-1">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
            </div>

            <livewire:contact-form />
        </div>
    </div>
</div>
@endsection
