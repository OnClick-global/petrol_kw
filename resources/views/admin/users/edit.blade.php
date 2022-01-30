@extends('app')
@section('title')
    <div class="d-flex align-items-center flex-wrap mr-2">
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">update</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{url('/users')}}" class="text-muted">users</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
  <div class="row">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">user info</h4>
                  <hr>
                  <form action="{{route('users.update',$data->id)}}" method="post" class='form' >
                      @csrf
                      <div class="form-group m-t-40 row">
                          <label for="example-text-input" class="col-md-2 col-form-label">full name</label>
                          <div class="col-md-10">
                              <input type="text" value="{{$data->name}}" class="form-control" name="name" required >
                          </div>
                      </div>
                      <div class="form-group m-t-40 row">
                          <label for="example-text-input" class="col-md-2 col-form-label">email</label>
                          <div class="col-md-10">
                              <input type="email" value="{{$data->email}}" class="form-control" name="email" required >
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="example-password-input" class="col-md-2 col-form-label">password</label>
                          <div class="col-md-10">
                              <input class="form-control" type="password" name="password"  id="example-password-input">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="example-password-input2" class="col-md-2 col-form-label">password confirmation</label>
                          <div class="col-md-10">
                              <input class="form-control" type="password" name="password_confirmation"  id="example-password-input2">
                          </div>
                      </div>
                      <div class="center">
                          <button type="submit" class="btn btn-info"> update </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection
