@extends('admin.layouts.auth')

@section('title', 'Enquiry Details')

@section('content')
<div class="col-xl-8 col-lg-10 col-md-12 col-12 mx-auto">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <h4>Enquiry Details</h4>
        </div>
        <div class="widget-content widget-content-area">
            @include('admin.includes.alert-message')

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $enquiry->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $enquiry->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $enquiry->phone }}</td>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <td>{{ $enquiry->service->title ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class="badge badge-{{ config('const.enquiries.' . $enquiry->status . '.color') }}">
                                    {{ config('const.enquiries.' . $enquiry->status . '.text') }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>
                                {{ $enquiry->message }}
                            </td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ formatDateTime($enquiry->created_at) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <form action="{{ route('admin.enquiries.updateStatus', $enquiry->id) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="status">Update Status</label>
                    <select name="status" id="status" class="form-control" required>
                       @foreach (config('const.enquiries') as $key => $option)
                            <option value="{{ $key }}" @selected($enquiry->status === $key)>
                                {{ $option['text'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Update Status</button>
                <a href="{{ route('admin.enquiries.index') }}" class="btn btn-secondary mt-2">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
