@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                @can('agency')
                <a href="{{route('san-pham.create')}}">
                  <button class="card-title btn btn-primary">Thêm</button>
                </a>
                @endcan
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($product as $pro)
                  <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}
                    </td>
                    <td>
                      <?php
                        $img = explode(',',$pro->image);
                      ?>
                      @foreach($catalogs as $catalog1)
                        @if ($pro->id_parent == $catalog1->id )
                            <img class="img-product" src="./upload/{{$img[0]}}"/>
                        @endif
                       
                        
                        
                      @endforeach 
                    
                    </td>
                    <td>{{$pro->price_promotion}}</td>
                    <td>X</td>
                    <td><a href="{{route('san-pham.edit',$pro->id)}}">Chi tiết</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                  {{$product->links()}}

              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection