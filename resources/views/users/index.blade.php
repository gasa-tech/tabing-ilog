@extends('layouts.backend')
@section('content')
    <section class="py-5">
      <div class="container-fluid mb-4">
        <div class="row">
          <div class="col-md-5">
            @can('edit users')
            <a class="btn btn-primary d-inline-flex align-items-center gt-rounded-10 btn-lg" href="{{ route('users.create') }}">
              <i class="fa-solid fa-plus"></i><span>&nbsp;Create User</span>
            </a>
            @endcan
          </div>
          <div class="col-md-3 gt-input">
            <input type="text" class="input gt-rounded-10 border-0" placeholder="Search Users...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
          <div class="col-sm-1">
              <a class="btn d-inline-flex align-items-center gt-rounded-10 btn-lg bg-white hover:bg-gray-400 text-gray-800 font-semibold shadow">
                <i class="fa-solid fa-arrow-down-wide-short"></i><span>&nbsp;&nbsp;Filter</span>
              </a>
          </div>
          <div class="col-md-2">
            @can('view roles','edit roles')
              <a class="btn btn-primary d-inline-flex align-items-center gt-rounded-10 btn-lg " href="{{ route('roles.index') }}">
                <i class="fa-solid fa-eye"></i><span>&nbsp;&nbsp;View Roles</span>
              </a>
            @endcan
            <a class="btn bg-white gt-rounded-10 btn-lg" style="margin-left:5px;">
              <i class="fa-solid fa-file-export"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid" >
        <div class="bg-white shadow gt-rounded-15">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
            <h4 class="mb-0"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;User Management</h4>
              
            </div>
          </div>
          <div class="pt-4 table-responsive">
            <table class="table mb-0 table-borderless table-striped small">
              <thead>
                <tr>
                  <th class="py-4 px-6">
                    <span class="me-2 mb-n1">ID</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2 mb-n1">Name</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2">Email</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2">Role</span>
                  </th>
                  <th class="py-4 px-6" width="10%">
                    <span class="me-2">Action</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-5 px-6"> 1 </td>
                  <td class="py-5 px-6"> Admin </td>
                  <td class="py-5 px-6"> 
                    <span class="badge bg-secondary">Email Hidden</span>  
                  </td>
                  <td class="py-5 px-6"> 
                    <span class="badge bg-secondary">Super Admin</span>  
                  </td>
                  <td class="py-5 px-6"> 
                    <span class="badge bg-secondary">You can't edit Administrator User</span>
                  </td>
                </tr>
                @foreach ($users as $index => $u)
                  <tr>
                    <td class="py-5 px-6"> {{ $index+2 }} </td>
                    <td class="py-5 px-6"> {{ $u->name ?? '' }} </td>
                    <td class="py-5 px-6"> {{ $u->email ?? '' }} </td>
                    <td class="py-5 px-6">
                       @if($u->roles)
                            @foreach ($u->getRoleNames() as $d)
                              <span class="badge bg-secondary">{{ $d }}</span>  
                            @endforeach
                        @endif
                    </td>
                    @can('edit users')
                      <td class="py-5 px-6">
                        <a class="btn p-0 me-2 fs-6 text-primary" href="{{ route('users.edit',$u->id) }}">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn p-0 me-2 fs-6 text-success" href="#">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="btn p-0 fs-6 text-danger" href="#">
                          <i class="fa-solid fa-trash-can"></i>
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


@endsection
