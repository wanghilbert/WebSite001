@extends('layouts.website')

@section('section')   
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create News</div>
                    <div class="panel-body">
                        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/news/create') }}">
                            {!! csrf_field() !!}
                                                 
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                 <label class="col-md-4 control-label">Title</label>
     
                                 <div class="col-md-6">
                                     <input type="title" class="form-control" name="title">
                                 </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Link</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="link">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Tags</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tags">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Content</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="content">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Pic</label>
                                <input type="file" name="picture" id="picture" /> 
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



