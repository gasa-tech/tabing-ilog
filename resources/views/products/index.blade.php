@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Product List</h4>
              <div>
                @can('edit products')
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('products.create') }}">
                  <span>Add Product</span>
                </a>
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('products.import_get') }}">
                    <span>Import Products</span>
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
                    <span class="me-2 mb-n1">Barcode</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2 mb-n1">Brand</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2 mb-n1">Primary Unit</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2 mb-n1">Purchase Price</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2">Selling Price</span>
                  </th>
                    <th class="py-4 px-6" width="20%">
                      <span class="me-2">Actions</span>
                    </th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="py-5 px-6"> {{ $product->name ?? '' }} </td>
                        <td class="py-5 px-6"> {{ $product->barcode ?? '' }} </td>
                        <td class="py-5 px-6"> {{ $product->brand ?? '' }} </td>
                        <td class="py-5 px-6"> {{ $product->primary_unit ?? '' }} </td>
                        <td class="py-5 px-6"> {{ $product->purchase_price ?? '' }} </td>
                        <td class="py-5 px-6"> {{ $product->selling_price ?? '' }} </td>
                        <td class="py-5 px-6"> 
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">@csrf @method('DELETE')</form>
                            <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('products.edit',$product->id) }}">
                            <span>Edit</span>
                            </a>
                            @can('delete products')
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
