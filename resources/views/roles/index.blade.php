@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Roles List</h4>
              <div>
                @can('edit_role')
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('roles.create') }}">
                  <span>Create Role</span>
                </a>
                @endcan
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('users.index') }}">
                  <span>View Users</span>
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
                    <span class="me-2"># of Permissions</span>
                  </th>
                    <th class="py-4 px-6" width="10%">
                      <span class="me-2">Actions</span>
                    </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-5 px-6"> Administrator </td>
                  <td class="py-5 px-6"> All </td>
                    <td class="py-5 px-6"> 
                      <span class="badge bg-secondary">You can't edit Administrator Role</span>
                    </td>
                </tr>
                @foreach ($roles as $r)
                  <tr>
                    <td class="py-5 px-6"> {{ $r->name }} </td>
                    <td class="py-5 px-6"> {{ count($r->getPermissionNames()) }} </td>
                    <td class="py-5 px-6"> 
                      @can('edit roles')
                        <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('roles.edit',$r->id) }}">
                          <span>Edit</span>
                        </a>
                      @endcan
                      <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('roles.show',$r->id) }}">
                        <span>View Permissions</span>
                      </a>
                    </td>
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
