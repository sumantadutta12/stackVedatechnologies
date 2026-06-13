@extends('admin.layouts.auth')
@section('title', 'List of Pincodes')
@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>List of Pincodes</h4>
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
                            <th>Pincode</th>
                            <th>Status</th>
                            <th>Last Modified</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($pincodes) > 0)
                            @foreach ($pincodes as $key => $pincode)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pincode->pincode }}</td>
                                    <td>
                                        @if ($pincode->status == '1')
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ formatDateTime($pincode->updated_at) }}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{ route('admin.pincodes.edit', ['pincode' => $pincode->id]) }}"
                                                    data-toggle="tooltip" title="Edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-primary"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('admin.pincodes.destroy', ['pincode' => $pincode->id]) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-delete" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure want to delete pincode : {{ $pincode->pincode }}?');">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"> <circle cx="12" cy="12" r="10"></circle>  <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No pincode found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{ $pincodes->appends(request()->except('page'))->render() }}
            </div>
        </div>
    </div>
</div>
@endsection