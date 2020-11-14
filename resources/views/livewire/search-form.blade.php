{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div class="card mb-2 bg-dark text-light mt-2">
    <div class="card-header">
        <h3>{{ __('Search Form') }}</h3>
        <div class="form-group mb-0 mt-2">
            <input wire:model.dbounce.300ms="search" class="form-control">
        </div>
    </div>
    @if (strlen($search) > 2)
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-dark mb-0">
                    <tbody>
                    @forelse($searchResults as $result)
                        <tr onclick="window.open('{{ $result['trackViewUrl'] ?? '#' }}', '_blank');" style="cursor: pointer;">
                            <td class="align-middle">
                                <img src="{{ $result['artworkUrl60'] ?? '' }}" alt="album art" class="w-10">
                            </td>
                            <td class="align-middle">
                                <div class="font-weight-bold">{{ $result['trackName'] ?? $result['collectionName'] }}</div>
                                <div>{{ $result['artistName'] ?? '' }}</div>
                            </td>
                            <td class="align-middle">
                                <div class="font-weight-bold">{{ $result['primaryGenreName'] ?? '' }}</div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="2">There are no results for "{{ $search }}"</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
