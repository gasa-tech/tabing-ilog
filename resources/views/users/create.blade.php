@extends('layouts.backend')
@section('content')
    <section class="py-8">
      <div class="container-fluid">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Create User</h4>
            </div>
          </div>
          <form action="{{ route('users.store') }}" method="POST" id="form">
            @csrf 
            <div class="px-6 pt-6 ">
                <div class="gt-input">
                    <label class="text-sm font-medium mb-2" for="name">Name:</label>
                    <div class="mb-4">
                        <input class="input border gt-rounded-10" type="text" name="name" required>
                    </div>
                </div>
                <div class="gt-input">
                  <label class="text-sm font-medium mb-2" for="name">Email:</label>
                  <div class="mb-4">
                   <input class="input border gt-rounded-10" type="email" name="email" required>
                  </div>
                </div>
                <label class="text-sm font-medium mb-2" for="name">Password:</label>
                <span class="badge bg-secondary">Default password is same as Name</span>
                <br>
                <label class="text-sm font-medium mb-2" for="">Roles:</label>
                @foreach ($roles as $i => $role)
                    <div class="mb-1">
                        <input type="checkbox" name="roles[]" value="{{ $role->name }}">
                        <span class="ml-2">{{ $role->name }}</span>
                    </div>
                @endforeach
                <div style="text-align: right!important">
                  <button type="submit" class="btn btn-primary mt-5 mb-5 btn-lg gt-rounded-10">
                      <span>Save Record</span>
                  </button>
                  <a class="btn btn-secondary btn-lg gt-rounded-10" href="{{ route('users.index') }}">
                    <span>Cancel</span>
                  </a>
                </div>
            </div>
          </form>
        </div>
      </div>
    </section>

@endsection
