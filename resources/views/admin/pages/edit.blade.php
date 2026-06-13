@extends('admin.layouts.auth')

@section('title', 'Edit - ' . $page->title)

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit - {{ $page->title }}</h4>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.pages.update', ['page' => $page->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Title <span>*</span></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}" placeholder="" autocomplete="off" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>URL ({{ url('').'/' }}) </label>
                                <input type="text" class="form-control" id="route_name" name="route_name" value="{{ $page->route_name }}" placeholder="" readonly />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Heading </label>
                                <input type="text" class="form-control" id="heading" name="heading" value="{{ $page->heading }}" placeholder="" autocomplete="off" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Sub heading </label>
                                <input type="text" class="form-control" id="sub_heading" name="sub_heading" value="{{ $page->sub_heading }}" placeholder="" autocomplete="off" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Content 1</label>
                                <textarea class="form-control ckeditor" id="content_1" name="content_1" rows="5" placeholder="" autocomplete="off" >{{ $page->content_1 }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Content 2</label>
                                <textarea class="form-control ckeditor" id="content_2" name="content_2" rows="5" placeholder="" autocomplete="off" >{{ $page->content_2 }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Image</label>
                                <p><span class="badge badge-primary">Format</span> .jpg, .jpeg, .png, .webp <span class="badge badge-primary">Max. upload size</span> 500KB </p>
                                <div id="image-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                                <img src="{{ getImageUrl(@$page->image) }}" alt="{{ @$page->title }}">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input name="image" id="image" type="file" accept=".png, .jpg, .jpeg">
                                            </span>
                                            <a href="javascript:void(0);" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.pages.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('plugins/ckeditor5/build/ckeditor.js') }}" type="application/javascript"></script>
    <script src="{{ asset('admin/js/ckeditor-custom.js') }}" type="application/javascript"></script>
@endpush
