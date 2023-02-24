@extends('layouts.backend')
@section('content')
<section class="py-8">
  <div class="container">
    <section class="py-8">
      <div class="container">
        <div class="bg-white rounded shadow">
          <div class="px-6 pt-6 border-bottom border-secondary-light">
            <div class="d-flex mb-6 align-items-center justify-content-between">
              <h4 class="mb-0">Create Category</h4>
              <div>
                <button type="submit" class="btn btn-sm btn-primary d-inline-flex align-items-center" form="form">
                  <span>Save Record</span>
                </button>
                <a class="btn btn-sm btn-secondary d-inline-flex align-items-center" href="{{ route('categories.index') }}">
                  <span>Cancel</span>
                </a>
              </div>
            </div>
          </div>
          <form action="{{ route('categories.store') }}" method="POST" id="form">
            @csrf 
            <div class="px-6 pt-6 border-bottom border-secondary-light">
                <label class="text-sm font-medium mb-2" for="name">Category Name:</label>
                <div class="mb-4">
                    <input class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded" type="text" name="name" required>
                </div>
                <label class="text-sm font-medium mb-2" for="description">Description:</label>
                <div class="mb-4">
                    <textarea name="description" id="" cols="30" rows="10" class="w-full px-4 py-1 mb-2 text-sm placeholder-gray-500 bg-white border rounded"></textarea>
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
