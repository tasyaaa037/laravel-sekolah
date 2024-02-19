@extends('template.master')

@section('title', 'Show Data Cast')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
        @csrf
        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama">Nama Pemeran</label>
                  <input name="nama" type="text" class="form-control" id="nama"  placeholder="Nama Pemeran" value="{{ $cast->nama }}" disabled>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="umur">Umur</label>
                    <input name="umur" type="text" class="form-control" id="umur"  placeholder="Umur" value="{{ $cast->umur }}" disabled>
                  </div>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bio">Biografi Pemeran</label>
                  <textarea name="bio" id="bio" class="form-control" cols="30" rows="5" placeholder="Biografi Pemeran"disabled>{{ $cast->bio }}</textarea>
                </div>
              </div>
            </div>
          </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
            <a href="{{route('cast.index')}}" class="btn btn-info">Back</a>
        </div>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection