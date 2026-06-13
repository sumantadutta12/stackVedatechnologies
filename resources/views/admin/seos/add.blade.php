@extends('admin.layouts.auth')

@section('title', 'Add SEO')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">

            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12">
                        <h4>Add SEO Meta Data</h4>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.seos.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Page Identifier<span>*</span></label>
                                <select name="page" id="page" class="form-control" required>
                                    @foreach (config('const.pages') as $page)
                                        <option value="{{ $page['key'] }}">{{ $page['label'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Meta Title<span>*</span></label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Meta Description<span>*</span></label>
                                <textarea name="description" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Keywords</label>
                                <textarea name="keywords" class="form-control" rows="2"
                                    placeholder="seo, cleaning service, home repair"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Canonical URL</label>
                                <input type="text" name="canonical" class="form-control">
                            </div>
                        </div>

                        <hr>

                        <div class="col-sm-12">
                            <h6>Open Graph</h6>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>OG Title</label>
                                <input type="text" name="og_title" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>OG Description</label>
                                <textarea name="og_description" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>OG Image URL</label>
                                <input type="text" name="og_image" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-primary">Create</button>
                    <a href="{{ route('admin.seos.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
