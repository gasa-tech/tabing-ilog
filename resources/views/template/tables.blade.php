@extends('layouts.backend')
@section('content')

<section class="py-8 ml-3">
  <div class="container-fluid">
    <div class="bg-white rounded shadow">
      <div class="px-6 pt-6 border-bottom border-secondary-light">
        <div class="d-flex mb-6 align-items-center justify-content-between">
          <h4 class="mb-0"><i class="fa-solid fa-list"></i>  User Management</h4>
          <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="#">
            <span class="text-primary-light me-2">
            <i class="fa-solid fa-plus"></i>
            </span>
            <span>Add</span>
          </a>
        </div>
        <div>
          <a class="link-primary small px-3 pb-2 text-decoration-none d-inline-block text-secondary border-bottom border-2 border-primary" href="#">
            User
          </a>
        </div>
      </div>
      <div class="pt-4 table-responsive">
        <table class="table mb-0 table-borderless table-striped small">
          <thead>
            <tr class="text-secondary">
              <th class="pt-4 pb-3 px-6">ID</th>
              <th class="pt-4 pb-3 px-6">User</th>
              <th class="pt-4 pb-3 px-6">Joined</th>
              <th class="pt-4 pb-3 px-6">Status</th>
              <th class="pt-4 pb-3 px-6">Purchased</th>
              <th class="pt-4 pb-3 px-6">Action</th></tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-5 px-6">1</td>
              <td class="py-3 px-6">
                <div class="d-flex align-items-center">
                  <img class="me-4 img-fluid rounded" src="https://images.unsplash.com/photo-1559893088-c0787ebfc084?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="" style="width: 32px; height: 32px;">
                  <div>
                    <p class="mb-0">John Smith</p>
                    <p class="mb-0 text-secondary">john@shuffle.dev</p>
                  </div>
                </div>
              </td>
              <td class="py-5 px-6">09/04/2021</td>
              <td class="py-5 px-6">
                <span class="badge bg-success">Paid</span>
              </td>
              <td class="py-5 px-6">
                <span class="badge bg-primary-light text-primary">Monthly Subscription</span>
              </td>
              <td class="py-5 px-6">
                <a class="btn p-0 me-2 fs-6 text-primary" href="#">
                  <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a class="btn p-0 me-2 fs-6 text-success" href="#">
                  <i class="fa-regular fa-circle-check"></i>
                </a>
                <a class="btn p-0 fs-6 text-danger" href="#">
                  <i class="fa-solid fa-trash-can"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td class="py-5 px-6">2</td>
              <td class="py-3 px-6">
                <div class="d-flex align-items-center">
                  <img class="me-4 img-fluid rounded" src="https://images.unsplash.com/photo-1559893088-c0787ebfc084?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="" style="width: 32px; height: 32px;">
                  <div>
                    <p class="mb-0">John Smith</p>
                    <p class="mb-0 text-secondary">john@shuffle.dev</p>
                  </div>
                </div>
              </td>
              <td class="py-5 px-6">09/04/2021</td>
              <td class="py-5 px-6">
                <span class="badge bg-success">Paid</span>
              </td>
              <td class="py-5 px-6">
                <span class="badge bg-primary-light text-primary">Monthly Subscription</span>
              </td>
              <td class="py-5 px-6">
                <a class="btn p-0 me-2 fs-6 text-primary" href="#">
                  <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a class="btn p-0 me-2 fs-6 text-success" href="#">
                  <i class="fa-regular fa-circle-check"></i>
                </a>
                <a class="btn p-0 fs-6 text-danger" href="#">
                  <i class="fa-solid fa-trash-can"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection 