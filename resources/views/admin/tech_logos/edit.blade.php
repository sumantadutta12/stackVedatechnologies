@extends('admin.layouts.auth')

@section('title', 'Edit Tech Logo')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Tech Logo</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.tech_logos.update', ['tech_logo' => $techLogo->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Upload Logo</label>
                                <input type="file" class="form-control-file" name="logo" id="logo">
                                @if ($techLogo->logo)
                                    <div class="mt-2">
                                        <img src="{{ asset($techLogo->logo) }}" alt="Current Logo" height="60">
                                    </div>
                                @endif
                                <small class="form-text text-muted">Leave blank to keep the current logo</small>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Order</label>
                                <input type="number" class="form-control" name="order" value="{{ $techLogo->order }}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{ $techLogo->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $techLogo->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.tech_logos.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
