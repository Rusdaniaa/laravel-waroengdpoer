@extends('layouts.main')
@section('title', 'Waroeng Dpoer Apps | Laporan')
@section('content')
<main class="py-5">
    <div class="container">
      <div class="row">
      <table class="table table-striped table-centered mb-0">
    <thead>
        <tr>
            <th>Menu</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="table-user">
                <img src="assets/images/users/avatar-2.png" alt="table-user" class="me-2 rounded-circle" />
                Ayam Bakar
            </td>
            <td>Rp 24.000</td>
            <td>-</td>
            <td class="table-action">
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>
    </tbody>
</table>
      </div>
    </div>
  </main>
@endsection