@extends('admin.layouts.auth')

@section('title', 'Add New FAQ')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add New FAQ</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.faqs.store') }}" method="POST" >
                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Question<span>*</span></label>
                                <input type="text" class="form-control" id="question" name="question" autocomplete="off" value="{{ old('question') }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea class="form-control" name="answer" id="answer" cols="30" rows="10" required="">{{ old('answer') }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status<span>*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('admin.faqs.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
