@extends('layouts.admin')

@section('data')
<h1>Edit Role</h1>
<br>

<form action={{ route('roles.update', [$role->id]) }} method="POST">@csrf
  {{ method_field('PUT') }}
  <div class="mb-3">
    <label class="form-label">Tên Quyền</label>
    <input name="name" type="text" class="form-control" value={{ $role->name }} id="roleName">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
    <textarea name="description" class="form-control" style="height: 100px">
      {{ $role->description }}
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Cập Nhật</button>
</form>
</div>
@endsection