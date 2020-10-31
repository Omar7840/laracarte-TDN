@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>
                <p class="text-muted" >If you having trouble with this service, please
                    <a href="mailto:mercuryseries@gmail.com" target="_blank" rel="noopener noreferrer">ask for help</a>.
                </p>
            <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                        {!! $errors->first('name', ' <span class"help-block">:message</span>') !!}

                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        {!! $errors->first('email', ' <span class"help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="message" class="control-label">Message</label>
                        <textarea name="message" id="message" cols="30" rows="1  0" class="form-control" >{{ old('message') }}</textarea>
                        {!! $errors->first('message', ' <span class"help-block">:message</span>') !!}
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary btn-block" value="Submit Enquiry &raquo;">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
