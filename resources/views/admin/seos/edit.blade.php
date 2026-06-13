@extends('admin.layouts.auth')

@section('title', 'Edit SEO')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">

            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit SEO</h4>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.seos.update', ['seo' => $seo->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Page Identifier<span>*</span></label>
                                <select name="page" id="page" class="form-control" required>
                                    @foreach (config('const.pages') as $page)
                                        <option value="{{ $page['key'] }}" {{ $seo->page == $page['key'] ? 'selected' : '' }}>{{ $page['label'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Meta Title<span>*</span></label>
                                <input type="text" name="title" class="form-control" value="{{ $seo->title }}" required />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Meta Description<span>*</span></label>
                                <textarea name="description" class="form-control" rows="4"
                                    required>{{ $seo->description }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Keywords</label>
                                <textarea name="keywords" class="form-control" rows="2">{{ $seo->keywords }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Canonical URL</label>
                                <input type="text" name="canonical" class="form-control" value="{{ $seo->canonical }}" />
                            </div>
                        </div>

                        <hr>

                        <div class="col-sm-12">
                            <h6>Open Graph</h6>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>OG Title</label>
                                <input type="text" name="og_title" class="form-control" value="{{ $seo->og_title }}" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>OG Description</label>
                                <textarea name="og_description" class="form-control"
                                    rows="3">{{ $seo->og_description }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>OG Image URL</label>
                                <input type="text" name="og_image" class="form-control" value="{{ $seo->og_image }}" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $seo->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $seo->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.seos.index') }}" class="btn ml-2">Back</a>

                </form>

            </div>
        </div>
    </div>
@endsection
