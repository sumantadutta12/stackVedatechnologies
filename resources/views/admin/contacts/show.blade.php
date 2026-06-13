@extends('admin.layouts.auth')

@section('title', 'View - ' . $contact->name)

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>View - {{ $contact->name }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.contacts.update', ['contact' => $contact->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Name <span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" placeholder="" autocomplete="off" readonly required="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Email <span>*</span></label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $contact->email }}" placeholder="" autocomplete="off" readonly required="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Phone <span>*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->mobile }}" placeholder="" autocomplete="off" readonly required="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Website Url</label>
                                <input type="url" class="form-control" id="website_url" name="website_url" value="{{ $contact->website_url }}" placeholder="" autocomplete="off" readonly />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Message <span>*</span></label>
                                <input type="text" class="form-control" id="message" name="message" value="{{ $contact->message }}" placeholder="" autocomplete="off" readonly required="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Status <span>*</span></label>
                                <select class="form-control" id="status" name="status" required="">
                                    @foreach (config('const.enquiries') as $key => $status)
                                        <option value="{{ $key }}" @if ($contact->status == $key) selected @endif>{{ formatText($key) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.contacts.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
