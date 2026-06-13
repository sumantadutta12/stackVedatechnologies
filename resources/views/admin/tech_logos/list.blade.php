@extends('admin.layouts.auth')

@section('title', 'List of Tech Logos')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>List of Tech Logos</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                {{-- Filter Form --}}
                <form action="{{ route('admin.tech_logos.index') }}" method="GET">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">All</option>
                                    <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block m-t-30">Filter</button>
                        </div>
                    </div>
                </form>

                {{-- Table --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Status</th>
                                <th>Order</th>
                                <th>Last Modified</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($techLogos as $key => $techLogo)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="text-center">
                                        @if ($techLogo->logo)
                                            <img src="{{ asset($techLogo->logo) }}" alt="Tech Logo" height="50">
                                        @else
                                            <span class="text-muted">No Logo</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($techLogo->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $techLogo->order }}</td>
                                    <td>{{ date('d-m-Y', strtotime($techLogo->updated_at)) }}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{ route('admin.tech_logos.edit', ['tech_logo' => $techLogo->id]) }}"
                                                    data-toggle="tooltip" title="Edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit text-primary">
                                                        <path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                        </path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1
                                                                 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <form
                                                    action="{{ route('admin.tech_logos.destroy', ['tech_logo' => $techLogo->id]) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-delete" data-toggle="tooltip"
                                                        title="Delete"
                                                        onclick="return confirm('Are you sure want to delete this tech logo?');">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
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
                                    <td colspan="6" class="text-center">No tech logos found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $techLogos->appends(request()->except('page'))->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
