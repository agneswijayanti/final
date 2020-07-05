@extends('layouts/master')

@section('content')
<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Slug</th>
                      <th>Tag</th>
                      <th>id User</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($artikel as $s)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$s->judul}}</td>
                      <td>{{$s->isi}}</td>
                      <td>{{$s->slug}}</td>
                      <td>{{$s->tag}}</td>
                      <td>{{$s->iduser}}</td>
                     
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
              </div>
            </div>
@endsection


