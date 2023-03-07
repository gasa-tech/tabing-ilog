@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Create Product</h4>
              <div>
                <button type="submit" class="btn btn-sm btn-primary d-inline-flex align-items-center" form="form">
                  <span>Save Record</span>
                </button>
                <a class="btn btn-sm btn-secondary d-inline-flex align-items-center" href="{{ route('products.index') }}">
                  <span>Cancel</span>
                </a>
              </div>
            </div>
          </div>
          <form action="{{ route('products.store') }}" method="POST" id="form">
            @csrf 
            <div class="px-6 pt-6 border-bottom border-secondary-light">
                <h3>Product</h3>
                <label class="text-sm font-medium mb-2" for="name">Category:</label>
                <div class="mb-4">
                    <select class="col-2 form-control mb-3" required name="category_id">
                        <option disabled selected value>-- Select Category --</option>
                        @foreach(\App\Models\Category::all() as $i => $b)
                            <option value="{{ $b->id }}">{{ $b->name }}</option>
                        @endforeach
                    </select>   
                </div>
                <label class="text-sm font-medium mb-2" for="name">Supplier:</label>
                <div class="mb-4">
                    <select class="col-2 form-control mb-3" required name="supplier_id">
                        <option disabled selected value>-- Select Supplier --</option>
                        @foreach(\App\Models\Supplier::all() as $i => $b)
                            <option value="{{ $b->id }}">{{ $b->name }}</option>
                        @endforeach
                    </select>   
                </div>
                <label class="text-sm font-medium mb-2" for="name">Name:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="name" required>
                </div>

                <label class="text-sm font-medium mb-2" for="description">Brand:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="brand" required>
                </div>
                <label class="text-sm font-medium mb-2" for="name">Primary Unit:</label>
                <div class="mb-4">
                    <select class="col-2 form-control mb-3" required name="primary_unit">
                        <option disabled selected value>-- Select Primary Unit --</option>
                        <option value="pcs">pc/s</option>
                        <option value="boxes">box/es</option>
                        <option value="liters">liter/s</option>
                    </select>   
                </div>

                <label class="text-sm font-medium mb-2" for="name">Purchase price:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="purchase_price" required>
                </div>

                <label class="text-sm font-medium mb-2" for="description">Selling Price:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="selling_price" required>
                </div>

                <label class="text-sm font-medium mb-2" for="description">Barcode:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="barcode">
                </div>
                

                <h3>Inventory</h3>
                <label class="text-sm font-medium mb-2" for="name">Current Quantity:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="current_quantity" required>
                </div>
                <label class="text-sm font-medium mb-2" for="description">Reorder Level:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="reorder_level" required>
                </div>
                <button type="submit" class="btn btn-sm btn-primary d-inline-flex align-items-center mt-5 mb-5">
                    <span>Save Record</span>
                </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</section>
@endsection
