@extends('admin.layouts.auth')

@section('title', 'Add New Portfolio')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add New Portfolio</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title <span>*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" required />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Image <span>*</span></label>
                                <input type="file" class="form-control" name="image" required />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Video (optional)</label>
                                <input type="file" class="form-control" name="video" accept="video/mp4,video/webm,video/ogg" />
                                <small class="text-muted">Upload MP4, WebM, or OGG. Max 20MB.</small>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Link</label>
                                <input type="url" name="link" id="link" value="{{ old('link') }}"  class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Order</label>
                                <input type="number" class="form-control" name="order" value="{{ old('order', 0) }}" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status <span>*</span></label>
                                <select name="status" class="form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('admin.portfolios.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
