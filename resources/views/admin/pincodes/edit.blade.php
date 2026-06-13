@extends('admin.layouts.auth')

@section('title', 'Edit - ' . $pincode->pincode)

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit - {{ $pincode->pincode }}</h4>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.pincodes.update', ['pincode' => $pincode->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Pincode<span>*</span></label>
                                <input type="text" class="form-control" id="pincode" name="pincode" value="{{ $pincode->pincode }}" placeholder="" autocomplete="off" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control" required="">
                                    <option value="1" {{ $pincode->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $pincode->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.pincodes.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
