<!-- resources/views/livewire/opportunities.blade.php -->

@extends('layouts.app')

@section('title', 'Opportunities')

@section('content')
<div>
    <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
        <div>
            <label for="perPage">Items per page:</label>
            <select wire:model="perPage" id="perPage">
                @foreach($options as $option)
                    <option value="{{ $option }}">{{ $option }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="search">Search:</label>
            <input type="text" id="search" wire:model="search" placeholder="Search items..." />
        </div>
    </div>

    <table border="1" style="width: 100%; text-align: left;">
        <thead>
            <tr>
                <th>
                    <button wire:click="sortBy('name')">
                        Name
                        @if ($sortField === 'name')
                            @if ($sortDirection === 'asc') ↑ @else ↓ @endif
                        @endif
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="1">No items found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $items->links() }}
</div>
@endsection
