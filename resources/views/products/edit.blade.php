@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Update Product</h4>
              <div>
                <button type="submit" class="btn btn-sm btn-primary d-inline-flex align-items-center" form="form">
                  <span>Update Record</span>
                </button>
                <a class="btn btn-sm btn-secondary d-inline-flex align-items-center" href="{{ route('products.index') }}">
                  <span>Cancel</span>
                </a>
              </div>
            </div>
          </div>
          <form action="{{ route('products.update',$product->id) }}" method="POST" id="form">
            @csrf
            @method('PATCH')
            <div class="px-6 pt-6 border-bottom border-secondary-light">
                <div class="px-6 pt-6 border-bottom border-secondary-light">
                    <label class="text-sm font-medium mb-2" for="name">Category:</label>
                    <div class="mb-4">
                        <select class="col-2 form-control mb-3" required name="category_id">
                            <option disabled selected value>-- Select Category --</option>
                            @foreach(\App\Models\Category::all() as $i => $b)
                                <option value="{{ $b->id }}" {{ $b->id  == $product->category_id ? 'selected' : ''}} >{{ $b->name }}</option>
                            @endforeach
                        </select>   
                    </div>
                    <label class="text-sm font-medium mb-2" for="name">Supplier:</label>
                    <div class="mb-4">
                        <select class="col-2 form-control mb-3" required name="supplier_id">
                            <option disabled selected value>-- Select Supplier --</option>
                            @foreach(\App\Models\Supplier::all() as $i => $b)
                                <option value="{{ $b->id }}" {{ $b->id  == $product->supplier_id ? 'selected' : ''}}>{{ $b->name }}</option>
                            @endforeach
                        </select>   
                    </div>
                    <label class="text-sm font-medium mb-2" for="name">Name:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="name" value="{{$product->name}}" required>
                    </div>
    
                    <label class="text-sm font-medium mb-2" for="description">Brand:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="brand" value="{{$product->brand}}" required>
                    </div>
                    <label class="text-sm font-medium mb-2" for="name">Primary Unit:</label>
                    <div class="mb-4">
                        <select class="col-2 form-control mb-3" required name="primary_unit">
                            <option disabled selected value>-- Select Primary Unit --</option>
                            <option value="pcs" {{ 'pcs'  == $product->primary_unit ? 'selected' : ''}}>pc/s</option>
                            <option value="boxes" {{ 'boxes'  == $product->primary_unit ? 'selected' : ''}}>box/es</option>
                            <option value="liters" {{ 'liters'  == $product->primary_unit ? 'selected' : ''}}>liter/s</option>
                        </select>   
                    </div>
    
                    <label class="text-sm font-medium mb-2" for="name">Purchase price:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="purchase_price" value="{{$product->purchase_price}}" required>
                    </div>
    
                    <label class="text-sm font-medium mb-2" for="description">Selling Price:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="selling_price" value="{{$product->selling_price}}" required>
                    </div>
    
                    <label class="text-sm font-medium mb-2" for="description">Barcode:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="barcode" value="{{$product->bardcode}}">
                    </div>
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
