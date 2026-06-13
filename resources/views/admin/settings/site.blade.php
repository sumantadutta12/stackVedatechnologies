@extends('admin.layouts.auth')

@section('title', 'Site Settings')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Site Settings</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.settings.site.store') }}" method="POST">
                    @csrf

                    <div class="row mb-4">
                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Site name: <span>*</span></label>
                                <input type="text" class="form-control" id="site_name" name="site_name" value="{{ @$setting->site_name }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email: <span>*</span></label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ @$setting->email }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email 2: </label>
                                <input type="email" class="form-control" id="email_2" name="email_2" value="{{ @$setting->email_2 }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email 3:</label>
                                <input type="email" class="form-control" id="email_3" name="email_3" value="{{ @$setting->email_3 }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Mobile: <span>*</span></label>
                                <input type="text" class="form-control" id="mobile" name="mobile" value="{{ @$setting->mobile }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Mobile 2: </label>
                                <input type="text" class="form-control" id="mobile_2" name="mobile_2" value="{{ @$setting->mobile_2 }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Mobile 3: </label>
                                <input type="text" class="form-control" id="mobile_3" name="mobile_3" value="{{ @$setting->mobile_3 }}" placeholder=""/>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Address: </label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ @$setting->location }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Facebook URL: </label>
                                <input type="url" class="form-control" id="facebook_url" name="facebook_url" value="{{ @$setting->facebook_url }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Twitter URL: </label>
                                <input type="url" class="form-control" id="x_url" name="x_url" value="{{ @$setting->x_url }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Instagram URL: </label>
                                <input type="url" class="form-control" id="instagram_url" name="instagram_url" value="{{ @$setting->instagram_url }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Linkedin URL: </label>
                                <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ @$setting->linkdin_url }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Youtube URL: </label>
                                <input type="url" class="form-control" id="youtube_url" name="youtube_url" value="{{ @$setting->youtube_url }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Description: </label>
                                <input type="text" class="form-control" id="short_description" name="short_description" value="{{ @$setting->short_description }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Google Map Embed URL: </label>
                                <input type="url" class="form-control" id="map_link" name="map_link" value="{{ @$setting->map_link }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Office Time: </label>
                                <input type="text" class="form-control" id="office_time" name="office_time" value="{{ @$setting->office_time }}" placeholder="" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
