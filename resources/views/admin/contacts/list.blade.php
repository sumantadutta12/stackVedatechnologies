@extends('admin.layouts.auth')

@section('title', 'List of Enquiries')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>List of Enquiries</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            @include('admin.includes.alert-message')

            <form action="{{ route('admin.contacts.index') }}" method="GET">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="form-group">
                            <label>Search</label>
                            <input type="text" name="keyword" id="keyword" class="form-control" autocomplete="off" value="{{ request()->keyword }}" />
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Select status</option>
                                @foreach (config('const.enquiries') as $key => $status)
                                    <option value="{{ $key }}" @if($key === request()->status) selected @endif>{{ formatText($key) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block m-t-30">Filter</button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Website Url</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $key => $contact)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->mobile }}</td>
                                <td>{{ @$contact->website_url }}</td>
                                <td>
                                    <span class="badge badge-{{ config('const.enquiries.'.$contact->status.'.color') }}">
                                        {{ formatText($contact->status) }}
                                    </span>
                                </td>
                                <td>{{ formatDateTime($contact->created_at) }}</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li>
                                            <a href="{{ route('admin.contacts.show', ['contact' => $contact->id]) }}" data-toggle="tooltip" title="Show">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-info"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No Data found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $contacts->appends(request()->except('page'))->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
