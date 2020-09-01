@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                  <div class="text-right">
                    <a class="btn btn-warning" href="{{route('home')}}">Return</a>
                  </div>
@if( isset($contact) )
               <div class="panel-heading"><h4 class="text-center">Update Contact</h4></div>
@else
               <div class="panel-heading"><h4 class="text-center">New Contact</h4></div>
@endif

       @if ($errors->any())
          <div class="alert alert-danger">
              <h4>Errors:</h4>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
@if( isset($contact) )
<form class="form" action="{{Route('contacts.update',['id' => $contact[0]->contactId])}}" method="POST">
        {{method_field('PUT')}}
@else
<form class="form" action="{{Route('contacts.store')}}" method="POST">
@endif

        {{csrf_field()}}
  <div class="form-group">
    <label for="field1">First Name</label>
    <input type="text" class="form-control" id="field1" name="firstName" value="{{ old('firstName', $contact[0]->firstName ?? null) }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="field2">Last Name</label>
    <input type="text" class="form-control" id="field2"  name="lastName" value="{{ old('lastName', $contact[0]->lastName ?? null) }}" placeholder="">
  </div>
    <div class="form-group">
    <label for="field3">Email</label>
    <input type="email" class="form-control" id="field3" name="email" value="{{ old('email', $contact[0]->email ?? null) }}" placeholder="email@example.com">
  </div>
    <div class="form-group">
    <label for="field4">Contact Number</label>
    <input type="text" class="form-control" id="field4" name="contactNumber" value="{{ old('contactNumber', $contact[0]->contactNumber ?? null) }}" placeholder="(xxx) xxx-xxxx">
  </div>
@if( isset($contact) )
               <div class="text-center"><button type="submit" class="btn btn-info">Update</button></div>
@else
               <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
@endif
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
