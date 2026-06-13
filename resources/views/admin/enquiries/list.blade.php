@extends('admin.layouts.auth')

@section('title', 'Enquiries List')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-12">
                    <h4>Service Enquiries</h4>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area">
            @include('admin.includes.alert-message')

            <form method="GET" class="mb-3">
                <div class="form-group row align-items-end">
                    <div class="col-md-4">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">All</option>
                            @foreach(config('const.enquiries') as $key => $item)
                                <option value="{{ $key }}" {{ request('status') == $key ? 'selected' : '' }}>
                                    {{ $item['text'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Filter</button>
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
                            <th>Phone</th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Enquiry Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($enquiries as $index => $enquiry)
                            <tr>
                                <td>{{ $enquiries->firstItem() + $index }}</td>
                                <td>{{ $enquiry->name }}</td>
                                <td>{{ $enquiry->email }}</td>
                                <td>{{ $enquiry->phone }}</td>
                                <td>{{ $enquiry->service->title ?? '-' }}</td>
                                <td>
                                    <span class="badge badge-{{ config('const.enquiries.' . $enquiry->status . '.color') }}">
                                        {{ config('const.enquiries.' . $enquiry->status . '.text') }}
                                    </span>
                                </td>
                                <td>{{ $enquiry->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.enquiries.show', $enquiry->id) }}" class="btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No enquiries found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                {{ $enquiries->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
