{{-- The Master doesn't talk, he acts. --}}
<div class="card mb-2 bg-dark text-light mt-2">

    <div class="card-header">
        <h3>{{ __('Livewire Data Tables') }}</h3>
        <div class="form-group mb-0 mt-2">
            <input {{--wire:model.dbounce.300ms="search"--}} class="form-control">
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-dark mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr {{--onclick="window.open('{{ $result['trackViewUrl'] ?? '#' }}', '_blank');"--}} style="cursor: pointer;">
                        <td class="align-middle">
                            {{ $user->name }}
                        </td>
                        <td class="align-middle">
                            {{ $user->email }}
                        </td>
                        <td class="align-middle">
                            Active
                        </td>
                        <td class="align-middle">
                            Edit
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
{{--                        <td colspan="2">There are no results for "{{ $search }}"</td>--}}
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="float-right">
                {{ $users->links() ?? '' }}
            </div>
        </div>

    </div>

</div>
