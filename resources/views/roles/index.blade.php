@extends('layouts.admin')

@section('data')
<div>
  <h1>Danh sách Quyền</h1>
</div>
<br>
<a href="{{ route('roles.create') }}" class="btn btn-success">Thêm Mới Quyền</a>
<br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($roles as $key=>$r)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $r->id }}</td>
        <td>{{ $r->name }}</td>
        <td>{{ $r->description }}</td>
        <td> <a href="{{ route('roles.edit',[$r->id]) }}" class="btn btn-primary">Cập Nhật</a>  
          <form 
              action="{{ route('roles.destroy', [$r->id]) }}"
              method="POST"
          >@csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Xóa</button>
          </form>
          
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection

