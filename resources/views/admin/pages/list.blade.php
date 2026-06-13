@extends('admin.layouts.auth')

@section('title', 'List of pages')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>List of pages</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            @include('admin.includes.alert-message')

            <form action="{{ route('admin.pages.index') }}" method="GET">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Search</label>
                            <input type="text" name="keyword" id="keyword" class="form-control" autocomplete="off" value="{{ request()->keyword }}" />
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <button type="submit" class="btn btn-primary btn-lg btn-block m-t-30">Filter</button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Heading</th>
                            <th>Route name</th>
                            <th>Last Modified</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($pages) > 0)
                            @foreach ($pages as $key => $page)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->heading }}</td>
                                    <td>{{ $page->route_name }}</td>
                                    <td>{{ formatDateTime($page->updated_at) }}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" data-toggle="tooltip" title="Show">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-primary"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No page found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{ $pages->appends(request()->except('page'))->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
