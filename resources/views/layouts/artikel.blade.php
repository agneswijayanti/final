@extends('layouts/master')

@section('content')
<div class="card-body">
              <div class="table-responsive">
              <form method="GET" action="/artikel/create">
      
       

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
    </form>
                
                  @foreach($artikel as $s)
                  <hr >
                  <div class="row">
  <div class="col-9">
  <h3>Judul :{{$s->judul}}</h3>  
  <br>
  <h3>Isi :{{$s->isi}}</h3>         
  <br>
  <h3>Slug :{{$s->slug}}</h3>                <td></td>
  <br>
<?php 
    $tag = $s->tag;
    $tag1 = explode(",",strtolower($tag));

    for($i=0;$i<count($tag1);$i++){?>
<button class="btn btn-success">{{$tag1[$i]}}</button>
  <?php  }

?>
                     
                      <br>
                      
  </div> 
  <div class="col-3">
  <form method="POST" action="/artikel/{{$s->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Delete">
        </div>
    </form>

    <form method="GET" action="/artikel/{{$s->id}}/edit/">
      
       

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit">
        </div>
    </form>
  </div> 
</div>
<hr >             
                     

                    @endforeach
                    
              </div>
            </div>
@endsection


@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
