@extends('admin.layouts.auth')

@section('title', 'List of SEO')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">

            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>List of SEO Pages</h4>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.seos.index') }}" method="GET">
                    <div class="row">

                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <label>Keyword</label>
                                <input type="text" name="keyword" class="form-control" value="{{ request()->keyword }}" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block m-t-30">
                                Filter
                            </button>
                        </div>

                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-4">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page</th>
                                <th>Meta Title</th>
                                <th>Status</th>
                                <th>Last Modified</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($seos as $key => $seo)

                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{ $seo->page }}</td>

                                    <td>{{ $seo->title }}</td>

                                    <td class="text-center">
                                        @if ($seo->status == '1')
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td>
                                        {{ date('d-m-Y', strtotime($seo->updated_at)) }}
                                    </td>

                                    <td class="text-center">
                                        <ul class="table-controls">

                                            <li>
                                                <a href="{{ route('admin.seos.edit', ['seo' => $seo->id]) }}" title="Edit">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit text-primary">

                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                        </path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                        </path>
                                                    </svg>

                                                </a>
                                            </li>

                                            <li>
                                                <form action="{{ route('admin.seos.destroy', ['seo' => $seo->id]) }}"
                                                    method="POST" class="d-inline-block">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn-delete"
                                                        onclick="return confirm('Are you sure want to delete this SEO?');">

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
                                    <td colspan="6" class="text-center">
                                        No SEO data found
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                    {{ $seos->appends(request()->except('seo'))->render() }}

                </div>
            </div>
        </div>
    </div>
@endsection
