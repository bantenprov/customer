
@extends('master')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <h1>Add New Customer</h1>
        <hr>
        <div class="card">
          <div class="card-header">
            <strong>Customer</strong>
          </div>
          <div class="card-body">
            <form action="{{route('customer.store')}}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="taskNama" name="nama">
							</div>

              <div class="form-group">
                <label for="user_id">User</label>
                <select id="user_id" name="user_id" class="form-control form-control">
                  <option value="">Please select</option>
                  @foreach ($users as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" class="form-control form-control">
                  <option value="personal">Personal</option>
                  <option value="perusahaan">Perusahaan</option>
                </select>
              </div>

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
