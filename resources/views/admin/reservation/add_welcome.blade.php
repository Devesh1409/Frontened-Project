@extends('admin.master')
@section('tittle','Banner | Add Banner')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Banner</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <div class="card">
              <div class="card-header">
                <nav class="navbar navbar-expand-md">
                <h3 class="card-title">Banner</h3>
                 <div class="ml-auto">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aa">Add Banner</button>
                
                </div>
                </nav>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>THOUGHT</th>
                    <th>THOUGHT BY</th>
                    <th>IMAGE</th>
                    <th>ACTION</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach($data as $a)
                    <td>{{$a->id}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->description}}</td>
                    <td>{{$a->thought}}</td>
                    <td>{{$a->thought_by}}</td>
                    <td> <img src="/upload/{{$a->image}}" style="width: 100px;height: 100px;"></td>
                     <td>
                      
                      <a href="{{url('admin/reservation/edit/'.$a->id)}}">Edit</a>
                      <a href="{{url('welcome/delete/'.$a->id)}}">Delete</a>
                    </td>

                    
                  </tr>
                               
                  </tbody>
                  @endforeach 
                </table>
              </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="aa">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ADD BANNER</h5>

                    <button type="button" class="" data-dismiss="modal">
                    <span>&times;</span></button>
        
                </div>
                    <div class="modal-body">
                        <form method="post" action="{{url('reservation/insert')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="card">
                          @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                          </div>
                          @endif
                          <div class="card-body">
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" name="title" required="required" placeholder="ENTER TITLE" class="form-control" >
                            </div>

                            <div class="form-group">
                              <label>Description</label>
                              <input type="text" name="description" required="required" placeholder="ENTER DESCRIPTION" class="form-control" >
                            </div>
                            <div class="form-group">
                              <label>Image</label>
                              <input type="file"  name="image" required="required"  class="form-control">
                            </div>

                             <div class="form-group">
                              <label>Thought</label>
                              <input type="text" name="thought" required="required" placeholder="ENTER THOUGHT" class="form-control" >
                            </div>

                             <div class="form-group">
                              <label>Thought By</label>
                              <input type="text" name="thought_by" required="required"  class="form-control" >
                            </div>



                            <br><br>

                            <input type="submit" name="submit" value="submit" class="btn btn-info">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
 @endsection