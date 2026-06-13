@extends('admin.layouts.auth')

@section('title', 'Edit Banner')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Banner</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.banners.update', ['banner' => $banner->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title <span>*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $banner->title }}" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4">{{ $banner->description }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                                @if ($banner->image)
                                    <div class="mt-2">
                                        <img src="{{ asset($banner->image) }}" alt="Current Banner" height="80">
                                    </div>
                                @endif
                                <small class="form-text text-muted">Leave blank to keep the current image</small>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Primary Button Text</label>
                                <input type="text" class="form-control" name="primary_btn_text"
                                    value="{{ $banner->primary_btn_text }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Primary Button Link</label>
                                <input type="text" class="form-control" name="primary_btn_link"
                                    value="{{ $banner->primary_btn_link }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Secondary Button Text</label>
                                <input type="text" class="form-control" name="secondary_btn_text"
                                    value="{{ $banner->secondary_btn_text }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Secondary Button Link</label>
                                <input type="text" class="form-control" name="secondary_btn_link"
                                    value="{{ $banner->secondary_btn_link }}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Order</label>
                                <input type="number" class="form-control" name="order" value="{{ $banner->order }}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{ $banner->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $banner->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.banners.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
