@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Category List</h4>
              <div>
                @can('edit categories')
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('categories.create') }}">
                  <span>Create Category</span>
                </a>
                @endcan
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
                    <span class="me-2">Description</span>
                  </th>
                    <th class="py-4 px-6" width="20%">
                      <span class="me-2">Actions</span>
                    </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $data)
                  <tr>
                    <td class="py-5 px-6"> {{ $data->name ?? '' }} </td>
                    <td class="py-5 px-6"> {{ $data->description ?? '' }} </td>
                    <td class="py-5 px-6"> 
                        <form action="{{ route('categories.destroy',$data->id) }}" method="POST">@csrf @method('DELETE')</form>
                        <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('categories.edit',$data->id) }}">
                        <span>Edit</span>
                        </a>
                        @can('delete categories')
                        <button class="btn btn-sm btn-danger d-inline-flex align-items-center delete" type="button">
                            <span>Delete</span>
                        </button>
                        @endcan
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
