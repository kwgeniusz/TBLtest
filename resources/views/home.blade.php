@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                  <div class="text-right">
                    <a class="btn btn-primary" href="{{route('contacts.create')}}">New Contact</a>
                  </div>


   <div class="row">
      <div class="col-xs-12 text-center">
      <form class="form-inline" action="{{Route('home')}}" method="GET">

         <div class="form-group">
           <label for="filteredOut"></label>
           <input type="text" class="form-control" name="filteredOut" id="filteredOut" placeholder="Write data..." autocomplete="off">
         </div>

          <button type="submit" class="btn btn-info" > Search
           </button>
        </form>
      </div>
    </div>

<div class="panel-heading"><h4 class="text-center">Contacts List</h4></div>
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>

@php $acum=0 @endphp
@foreach($contacts as $contact)
    <tr>
      <th scope="row">{{++$acum}}</th>
      <td>{{$contact->firstName}}</td>
      <td>{{$contact->lastName}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->contactNumber}}</td>
      <td>       
        <a href="{{route('contacts.edit', ['id' => $contact->contactId])}}" class="btn btn-warning btn-sm">
                        EDIT
          </a> 
             <a href="#" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('delete-form'+{{$contact->contactId}}).submit();">
                                            DELETE 
                 </a>
              <form id="delete-form{{$contact->contactId}}" action="{{route('contacts.destroy', ['id' => $contact->contactId])}}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                 </form>
          </td>
    </tr>
@endforeach

  </tbody>
</table>
</div>
            <div class="text-center">
                {{$contacts->render()}}
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
