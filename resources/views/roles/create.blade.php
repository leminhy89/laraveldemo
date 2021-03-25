@extends('layouts.admin')

@section('data')
<h1>Create new Role</h1>
<br>

<form action={{ route('roles.store') }} method="POST">@csrf
  <div class="mb-3">
    <label class="form-label">Tên Quyền</label>
    <input name="name" type="text" class="form-control" id="roleName">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
    <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Tạo</button>
</form>
</div>
@endsection

