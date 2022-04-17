@extends('layouts.sidebar-admin')
@section('content')


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       لوحة تحكم اتصل بنا
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> تحكم اتصل بنا</a></li>
        <li><a href="#">لوحة </a></li>
        <li class="active">الرئيسية</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">ادارة البيانات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
              <table class="table direction table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>الاسم</th>
                  <th>البريد الالكتروني</th>
                  <th>الموضوع </th>
                  <th>الرسالة</th>
                  
                  <th style="width: 40px">التحكم</th>
                </tr>
               
               <tbody>
                @foreach($contact as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->subject}}</td>
                    <td>{{ $item->message}}</td>
                    
                    
                    
                    <td> 
                    <a href="{{ url('delete-contact/'.$item->id)}}" class="btn btn-danger "> حذف</a>
                </td>
                </tr>
                @endforeach
               </tbody>
               
                
              </table>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->

         
        </div>
       
      </div>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection