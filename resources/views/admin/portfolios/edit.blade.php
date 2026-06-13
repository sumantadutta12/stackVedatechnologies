@extends('admin.layouts.auth')

@section('title', 'Edit Portfolio')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Edit Portfolio</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            @include('admin.includes.alert-message')

            <form action="{{ route('admin.portfolios.update', ['portfolio' => $portfolio->id]) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Title <span>*</span></label>
                            <input type="text" class="form-control" name="title"
                                   value="{{ old('title', $portfolio->title) }}" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Current Image</label><br>
                            @if($portfolio->image)
                                <img src="{{ asset($portfolio->image) }}" alt="Portfolio Image" width="120" class="mb-2 rounded">
                            @else
                                <p class="text-muted">No Image Uploaded</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>New Image (optional)</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Current Video</label><br>
                            @if($portfolio->video)
                                <video src="{{ asset($portfolio->video) }}" width="180" class="mb-2 rounded" controls muted></video>
                            @else
                                <p class="text-muted">No Video Uploaded</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>New Video (optional)</label>
                            <input type="file" class="form-control" name="video" accept="video/mp4,video/webm,video/ogg">
                            <small class="text-muted">Upload MP4, WebM, or OGG. Max 20MB.</small>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="6">{{ old('description', $portfolio->description) }}</textarea>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Link</label>
                            <input type="url" name="link" id="link" value="{{ old('link', $portfolio->link) }}"  class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" class="form-control" name="order"
                                   value="{{ old('order', $portfolio->order) }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ old('status', $portfolio->status) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $portfolio->status) == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.portfolios.index') }}" class="btn ml-2">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
