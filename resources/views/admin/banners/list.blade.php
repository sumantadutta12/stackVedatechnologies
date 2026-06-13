@extends('admin.layouts.auth')

@section('title', 'List of Banners')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>List of Banners</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                {{-- Filter Form --}}
                <form action="{{ route('admin.banners.index') }}" method="GET">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <label>Keyword</label>
                                <input type="text" name="keyword" id="keyword" class="form-control" autocomplete="off"
                                    value="{{ request()->keyword }}" placeholder="Search by title or button text" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">All</option>
                                    <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Primary Button</th>
                                <th>Status</th>
                                <th>Order</th>
                                <th>Last Modified</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banners as $key => $banner)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="text-center">
                                        @if ($banner->image)
                                            <img src="{{ asset($banner->image) }}" alt="Banner" height="50">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $banner->title }}</td>
                                    <td>{{ $banner->primary_btn_text }}</td>
                                    <td class="text-center">
                                        @if ($banner->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $banner->order }}</td>
                                    <td>{{ date('d-m-Y', strtotime($banner->updated_at)) }}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{ route('admin.banners.edit', ['banner' => $banner->id]) }}"
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
                                                    action="{{ route('admin.banners.destroy', ['banner' => $banner->id]) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-delete" data-toggle="tooltip"
                                                        title="Delete"
                                                        onclick="return confirm('Are you sure want to delete the banner?');">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-x-circle text-danger">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="15" y1="9" x2="9"
                                                                y2="15"></line>
                                                            <line x1="9" y1="9" x2="15"
                                                                y2="15"></line>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No banners found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $banners->appends(request()->except('page'))->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
