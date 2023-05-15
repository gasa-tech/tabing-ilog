@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Customers List</h4>
              <div>
                @can('edit customers')
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('customers.create') }}">
                  <span>Add Customer</span>
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
                    <span class="me-2">Address</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2">Landmark</span>
                  </th>
                  <th class="py-4 px-6" width="20%">
                    <span class="me-2">Actions</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($customers as $customer)
                  <tr>
                    <td class="py-5 px-6"> {{ $customer->first_name ?? '' }} {{ $customer->last_name }} </td>
                    <td class="py-5 px-6"> {{ $customer->address ?? '' }} </td>
                    <td class="py-5 px-6"> {{ $customer->landmark ?? '' }} </td>
                    <td class="py-5 px-6"> 
                        <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">@csrf @method('DELETE')</form>
                        <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('customers.edit',$customer->id) }}">
                        <span>Edit</span>
                        </a>
                        @can('delete customers')
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
