@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">Form Fill UP </div>
                    <div class="panel-body">

                            <form class="form-horizontal" method="POST" action="{!! route('form.store') !!}">
                                @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control">
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="email" id="email" name="phone" class="@error('phone') is-invalid @enderror form-control">
                                @error('phone')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Subject</label>
                                <input type="email" id="email" name="subject" class="@error('subject') is-invalid @enderror form-control">
                                @error('subject')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message</label>
                                <textarea name="message" class="@error('message') is-invalid @enderror form-control"></textarea>
                                @error('message')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                        ↻
                                    </button>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

