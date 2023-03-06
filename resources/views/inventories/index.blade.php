@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Inventory List</h4>
              <div>
                @can('edit suppliers')
                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('products.create') }}">
                  <span>Add Inventory</span>
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
                    <span class="me-2 mb-n1">Product Name</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2 mb-n1">Current Stock</span>
                  </th>
                  <th class="py-4 px-6">
                    <span class="me-2">Reorder Level</span>
                  </th>
                    <th class="py-4 px-6" width="20%">
                      <span class="me-2">Actions</span>
                    </th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($inventories as $inventory)
                    <tr>
                        <td class="py-5 px-6"> {{ $inventory->product->name ?? '' }} </td>
                        <td class="py-5 px-6"> {{ $inventory->current_quantity ?? '' }} </td>
                        <td class="py-5 px-6"> {{ $inventory->reorder_level ?? '' }} </td>
                        <td>
                            <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="{{ route('inventories.edit',$inventory->id) }}">
                            <span>Add Quantity
                            </span>
                            </a>
                            <a class="btn btn-sm btn-primary d-inline-flex align-items-center stock-history"  
                                    data-toggle="modal" data-target="#stock_history" 
                                    data-source="{{ route('inventories.edit',$inventory->id) }}" 
                                    data-url="{{ route('inventories.edit',$inventory->id) }}"
                                    href="#">
                                    <span class="icofont icofont-history"></span>
                                 View History
                                  
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

@section('scripts')
  <script type="text/javascript">
    
   
   
  <sctipt>
@endsection
