@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Adjust Inventory</h4>
              <div>
                <button type="submit" class="btn btn-sm btn-primary d-inline-flex align-items-center" form="form">
                  <span>Update Record</span>
                </button>
                <a class="btn btn-sm btn-secondary d-inline-flex align-items-center" href="{{ route('inventories.index') }}">
                  <span>Cancel</span>
                </a>
              </div>
            </div>
          </div>
          <form action="{{ route('inventories.update',$inventory->id) }}" method="POST" id="form">
            @csrf
            @method('PATCH')
            <div class="px-6 pt-6 border-bottom border-secondary-light">
                <div class="px-6 pt-6 border-bottom border-secondary-light">
                    <label class="text-sm font-medium mb-2" for="name">Product Name:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="" value="{{$inventory->product->name}}" readonly disabled>
                    </div>
                    <label class="text-sm font-medium mb-2" for="name">Reorder Level:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="reorder_level" value="{{$inventory->reorder_level}}" required>
                    </div>
                    <label class="text-sm font-medium mb-2" for="description">Current Stock:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" id="current_stock" name="current_quantity" value="{{$inventory->current_quantity}}" readonly disabled required>
                    </div>

                    <label class="text-sm font-medium mb-2" for="description">Stock to be Added:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" id="new_stock" type="number" name="stock_adjustment" value=""required>
                    </div>

                    {{-- <label class="text-sm font-medium mb-2" for="description">New Stock:</label>
                    <div class="mb-4">
                        <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" id="result" type="" name="stock_adjustment" value="" readonly disabled required>
                    </div> --}}
                    <label class="text-sm font-medium mb-2" for="description">Remarks:</label>
                    <div class="mb-4">
                        <textarea name="remarks" id="" cols="30" rows="10" class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded"></textarea>
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


<script>
   $(document).ready(function() {
  $('#current_quantity, #new_stock').on('input', function() {
    var num1 = parseInt($('#current_quantity').val()) || 0;
    var num2 = parseInt($('#num2').val()) || 0;
    var sum = num1 + num2;
    $('#result').text('The sum is: ' + sum);
  });
});


</script>
@endsection
