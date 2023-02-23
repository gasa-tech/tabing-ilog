@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
                <h4 class="mb-0">{{ $role->name }} Role - Permissions List:</h4>
                <div>
                    <a class="btn btn-sm btn-secondary d-inline-flex align-items-center" href="{{ route('roles.index') }}">
                        <span>Go Back</span>
                    </a>
                </div>
            </div>
            <div class="mb-4">
                <ol>
                    @foreach ($role->getPermissionNames() as $perm)
                        <li class="ml-2"> {{ $perm }} </li>
                    @endforeach
                </ol>
            </div>

        </div>
      </div>
    </section>
  </div>
</section>

@endsection
