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
                                <x-sort-icon
                                    field="name"
                                    :sortField="$sortField"
                                    :sortAsc="$sortAsc"
                                />
                                Name
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('email')" class="btn btn-dark">
                                <x-sort-icon
                                    field="email"
                                    :sortField="$sortField"
                                    :sortAsc="$sortAsc"
                                />
                                Email
                            </button>
                        </th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr style="cursor: pointer;">
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
