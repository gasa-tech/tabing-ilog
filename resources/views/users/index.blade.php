@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Users List</h4>
              <div>
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('users.create') }}">
                  <span>Create User</span>
                </a>
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('roles.index') }}">
                  <span>View Roles</span>
                </a>
              </div>
            </div>
          </div>
          <div class="pt-4 table-responsive">
            <table class="table mb-0 table-borderless table-striped small">
              <thead>
                <tr>
                  <th class="py-4 px-6">
                    <span class="me-2 mb-n1">Name</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2">Email</span>
                  </th>
                  <th class="py-4 px-6" width="10%">
                    <span class="me-2">Action</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-5 px-6"> Admin </td>
                  <td class="py-5 px-6"> 
                    <span class="badge bg-secondary">Email Hidden</span>  
                  </td>
                  <td class="py-5 px-6"> 
                    <span class="badge bg-secondary">You can't edit Administrator User</span>
                  </td>
                </tr>
                @foreach ($users as $u)
                  <tr>
                    <td class="py-5 px-6"> {{ $u->name ?? '' }} </td>
                    <td class="py-5 px-6"> {{ $u->email ?? '' }} </td>
                    @can('edit users')
                      <td class="py-5 px-6"> 
                        <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('users.edit',$u->id) }}">
                          <span>Edit</span>
                        </a>
                      </td>
                    @endcan
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

@endsection
