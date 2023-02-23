@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Create User</h4>
              <div>
                <button type="submit" class="btn btn-sm btn-primary d-inline-flex align-items-center" form="form">
                  <span>Update Record</span>
                </button>
                <a class="btn btn-sm btn-secondary d-inline-flex align-items-center" href="{{ route('users.index') }}">
                  <span>Cancel</span>
                </a>
              </div>
            </div>
          </div>
          <form action="{{ route('users.update',$user->id) }}" method="POST" id="form">
            @csrf
            @method('PATCH')
            <div class="px-6 pt-6 border-bottom border-secondary-light">
                <label class="text-sm font-medium mb-2" for="name">Name:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="name" required value="{{ $user->name ?? '' }}">
                </div>
                <label class="text-sm font-medium mb-2" for="name">Email:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="email" name="email" required value="{{ $user->email ?? '' }}">
                </div>
                <label class="text-sm font-medium mb-2" for="name">Password:</label>
                <span class="badge bg-secondary">Updating the name will also update the PASSWORD</span>
                <br>
                <label class="text-sm font-medium mb-2" for="">Roles:</label>
                @foreach ($roles as $i => $role)
                    <div class="mb-1">
                        <input type="checkbox" name="roles[]" value="{{ $role->name }}" {{ $user->getRoleNames()->contains($role->name) ? 'checked' : ''}}>
                        <span class="ml-2">{{ $role->name }}</span>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-sm btn-primary d-inline-flex align-items-center mt-5 mb-5">
                    <span>Update Record</span>
                </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</section>

@endsection
