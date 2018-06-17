@extends('layouts.app')

@section('title','Contact Us')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <form class="col-12" action="{{asset('contact')}}" method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="face">Facebook</label>
            <input type="text" class="form-control" id="face" name="facebook" placeholder="Facebook link">
          </div>
          <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram link">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
          </div>
          <div class="form-group">
            <label for="phone_city">Instagram</label>
            <input type="text" class="form-control" id="phone_city" name="phone_city" placeholder="Phone in city">
          </div>
          <div class="form-group">
            <label for="maps">Maps link</label>
            <textarea class="form-control" id="maps" name="maps" placeholder="Maps link"></textarea>
          </div>
         @csrf
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>
        {{$cantact}}
    </div>
</div>
@endsection
