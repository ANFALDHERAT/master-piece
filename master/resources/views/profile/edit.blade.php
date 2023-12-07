@extends('pageslayout.master')

 @section('title','')

 <style>
   .container p {
    color: black;
  }

  table{
    color: black
  }
 </style>
 @section('css')

 @endsection



 @section('content')

 @if (Auth::user()->user_type == 'beautyexperts')
  <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
      <div>
          @include('profile.partials.update-Profession-information-form')
      </div>
  </div>
  @else

    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{route('beauty-experts.indexbeauty')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ asset('assets1/images/Capture.PNG')}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3" style="color: black">{{$user->name}}</h5>
              {{-- <x-text :value="old('name', $user->name)" required autofocus autocomplete="name" /> --}}


              {{-- <p class="text-muted mb-1">Full Stack Developer</p> --}}
              {{-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> --}}
              {{-- <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div> --}}
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fa-solid fa-pen-to-square" style="color: #c97eed;"></i>
                  <a class="mb-0" style="color: black" href="" id="update">Update your password</a>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fa-solid fa-trash" style="color: #c97eed;"></i>
                  <p class="mb-0">Delete Account</p>
                </li>
                {{-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li> --}}
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">

             <div class="max-w-xl" id="profile_info">
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="max-w-xl" id="update_pass" style="display: none">
                  @include('profile.partials.update-password-form')
              </div>

          </div>


          <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="table-responsive table-desi">
                        <table class="table all-package table-category" id="editableTable">
                            <thead>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Expert Name</th>
                                    <th>working_hours</th>
                                    <th>availability</th>
                                    <th>price</th>
                                    <th>quantity</th>
                                    <th>User Name</th>
                                    <th>User Email</th>



                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>

                                    <td>{{ $item->nameExpert }}</td>
                                    <td>{{ $item->working_hours }}</td>
                                    <td>{{ $item->availability}}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity}}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->email }}</td>



                                    <td>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    @endif

  @endsection


{{--
<div class="row mt-4">
<div class="col-md-6">
  <div class="card">
      <div class="card-body">
          @include('profile.partials.delete-user-form')
      </div>
  </div>
</div>
</div>
</div>
</div> --}}
