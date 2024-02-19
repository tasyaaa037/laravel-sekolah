@extends('template.master');

@section('header', 'Edit Data Genre')
@section('content')
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('genre.update', $genre->id ) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="nama" type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="exampleInputEmail1"  placeholder="Enter Nama Genre"
            value="{{$genre->nama}}">
          </div>
          @error('nama')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <!-- /.card-body -->

        <div class="card-footer">
          <button type="reset" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  </div>

@endsection