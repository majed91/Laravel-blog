@extends('layouts.default')
@section('body')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-8 ">
             <div class="card">
                 <div class="card-header">
                     Control Panel
                 </div>
                        <div class="card-body">
                           @if(session('status'))
                           <div class="alert alert-success" role="alert"></div>
                           @endif
                            <div class="card-title">you are logged</div>
                            <a class="btn btn-primary" href="{{URL('/admin/create')}}"> new article</a>
                        </div>

             </div>
        </div>
        <div class="col-8 ">
             <table class="table">
                 <tr>
                     <th>id</th>
                     <th>العنوان</th>
                     <th>تاريخ المدونة</th>
                     <th>تعديل</th>
                 </tr>
                 @foreach($articles as $article)
                 <tr>
                     <td>{{$article->id}}</td>
                     <td>{{$article->title}}</td>
                     <td>{{$article->created_at}}</td>
                     <td><a class="btn btn-danger" href="{{url('/admin/edit/'.$article->id)}}"</td>
                 </tr>
                 @endforeach
             </table>
        </div>
    </div>

</div>
@endsection