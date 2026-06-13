@extends('admin.layouts.auth')

@section('title', 'List of Services')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>List of Services</h4>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area">

            @include('admin.includes.alert-message')

            {{-- Search Form --}}
            <form action="{{ route('admin.services.index') }}" method="GET" class="mb-3">
                <div class="form-row">
                    <div class="col-md-4">
                        <input type="text" name="title" value="{{ request('title') }}" class="form-control" placeholder="Search by Service Title">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary ml-2">Reset</a>
                    </div>
                </div>
            </form>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Updated At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $key => $service)
                            <tr>
                                <td>{{ $services->firstItem() + $key }}</td>
                                <td>
                                    @if($service->icon)
                                        <img src="{{ asset($service->icon) }}" width="40" height="40" alt="Icon">
                                    @else
                                        <span class="text-muted">No icon</span>
                                    @endif
                                </td>
                                <td>{{ $service->title }}</td>
                                <td>{{ Str::limit($service->short_description, 60) ?? '—' }}</td>
                                <td>{{ $service->order }}</td>
                                <td>
                                    <span class="badge badge-{{ $service->status ? 'success' : 'danger' }}">
                                        {{ $service->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>{{ formatDateTime($service->updated_at) }}</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li>
                                            <a href="{{ route('admin.services.edit', $service->id) }}" data-toggle="tooltip" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit text-primary">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete {{ $service->title }}?');" data-toggle="tooltip" title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-x-circle text-danger">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                    </svg>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No Services found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Pagination --}}
                {{ $services->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
