@extends('layouts.default')
@section('body')
@include('include.message')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-8 ">
             <div class="card">
                 <div class="card-header">
                     Add Article
                 </div>
                        <div class="card-body">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea',
        menubar: false,
        language: 'ar'
      });
    </script>

                           <form enctype="multipart/form-data" class="form-horizontal" action="/admin/store" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control " name="title" placeholder="العنوان" />
                                </div>
                                <div class="form-group">
                                    <textarea id="mytextarea" name="body" class="form-control" placeholder="النص هنا"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <input type="file" class="form-control " name="thumbnail" accept="image/*" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">submit</button>
                                    </div>
                           </form>
                        </div>

             </div>
        </div>

    </div>

</div>
@endsection
