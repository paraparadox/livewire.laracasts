{{-- The Master doesn't talk, he acts. --}}
<div class="card mb-2 bg-dark text-light mt-2">

    <div class="card-header">
        <h3>{{ __('Livewire Data Tables') }}</h3>
        <div class="form-group mb-0 mt-2">
            <div class="row">
                <div class="col">
                    <input wire:model="search" class="form-control">
                </div>
                <div class="col-auto">
                    <div class="form-check">
                        <input wire:model="active" class="form-check-input" type="checkbox" id="activeness_checkbox">
                        <label class="form-check-label" for="activeness_checkbox">
                            Active
                        </label>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-dark mb-0">
                <thead>
                    <tr>
                        <th>
                            <button wire:click="sortBy('name')" class="btn btn-dark">
                                @if ($sortField == 'name')
                                    @if ($sortAsc)
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                    @else
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                        </svg>
                                    @endif
                                @endif
                                Name
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('email')" class="btn btn-dark">
                                @if ($sortField == 'email')
                                    @if ($sortAsc)
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                    @else
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                        </svg>
                                    @endif
                                @endif
                                Email
                            </button>
                        </th>
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
                            @if($user->active)
                                <span class="text-success">
                                    Active
                                </span>
                            @else
                                <span class="text-danger">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="align-middle">
                            Edit
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="4">
                            There are no
                            @if($active)
                                active
                            @else
                                inactive
                            @endif
                            users like "{{ $search }}"
                        </td>
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
