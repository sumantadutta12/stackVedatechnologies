@extends('admin.layouts.auth')

@section('title', 'List of Portfolios')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex justify-content-between align-items-center">
                    <h4>List of Portfolios</h4>
                    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary btn-sm">+ Add Portfolio</a>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            @include('admin.includes.alert-message')

            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Media</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Last Modified</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($portfolios as $key => $portfolio)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    @if($portfolio->image)
                                        <img src="{{ asset($portfolio->image) }}" alt="Portfolio Image" width="80" class="rounded">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                    @if($portfolio->video)
                                        <div class="mt-2">
                                            <span class="badge badge-info">Video</span>
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ Str::limit($portfolio->description, 50) }}</td>
                                <td class="text-center">
                                    @if ($portfolio->status == '1')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ $portfolio->order }}</td>
                                <td>{{ date('d-m-Y', strtotime($portfolio->updated_at)) }}</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li>
                                            <a href="{{ route('admin.portfolios.edit', ['portfolio' => $portfolio->id]) }}"
                                                data-toggle="tooltip" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit text-primary">
                                                     <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                     <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.portfolios.destroy', ['portfolio' => $portfolio->id]) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure want to delete this portfolio?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                                <td colspan="8" class="text-center">No portfolios found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $portfolios->appends(request()->except('portfolio'))->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
