@extends('admin.layouts.auth')

@section('title', 'Edit Service - ' . $service->title)

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-12">
                    <h4>Edit Service: {{ $service->title }}</h4>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area">
            @include('admin.includes.alert-message')

            <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    {{-- Title --}}
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label>Service Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $service->title) }}" class="form-control" required>
                        </div>
                    </div>

                    {{-- Order --}}
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" name="order" value="{{ old('order', $service->order) }}" class="form-control">
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ old('status', $service->status) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $service->status) == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    {{-- Icon --}}
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label>Service Icon</label>
                            <input type="file" name="icon" class="form-control">
                            @if($service->icon)
                                <img src="{{ asset($service->icon) }}" height="40" class="mt-2">
                            @endif
                        </div>
                    </div>

                    {{-- Background Image --}}
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label>Background Image</label>
                            <input type="file" name="background_image" class="form-control">
                            @if($service->background_image)
                                <img src="{{ asset($service->background_image) }}" height="40" class="mt-2">
                            @endif
                        </div>
                    </div>

                    {{-- Description Image --}}
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label>Description Image</label>
                            <input type="file" name="description_image" class="form-control">
                            @if($service->description_image)
                                <img src="{{ asset($service->description_image) }}" height="40" class="mt-2">
                            @endif
                        </div>
                    </div>

                    {{-- Short Description --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" id="short_description" class="form-control" rows="2">{{ old('short_description', $service->short_description) }}</textarea>
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="cms-editor" class="form-control" rows="4" required>{{ old('description', $service->description) }}</textarea>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update Service</button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary ml-2">Back to List</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('cms-editor');
</script>
@endpush
