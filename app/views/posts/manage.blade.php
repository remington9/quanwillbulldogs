@extends('layouts.master')

@section('content')
    <h1>{{{ Auth::user()->first_name }}}</h1>
    <hr>

    <div ng-controller="ManageController" ng-app="blog">
        <div class="alert alert-success" ng-if="successMsg"> @{{ successMsg }}</div>
        <div class="alert alert-danger" ng-if="errorMsg"> @{{ errorMsg }}</div>
        <div class="col-md-12 well">
            <table class="table-condensed table-striped">
               <tr ng-repeat="post in posts">
                   <td class="col-md-4"><a ng-href="/posts/@{{ post.id }}">@{{ post.title | lowercase}}</a></td>
                   <td class="col-md-4">@{{ post.body | limitTo : 50}}</td>
                   <td class="col-md-2"><button id="edit" ng-click="showModal($index)" class="btn btn-primary btn-lg btn-block">Edit</button><button id="delete" ng-click="deletePost($index)" class="btn btn-danger btn-lg btn-block">Delete</button></td>
               </tr>
            </table>
        </div>

    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form name="editForm" id="target" ng-submit="editPost(editForm)" novalidate>
                        <div class="form-group">
                            <label for="title">Blog Title</label>
                            <input type="text" name="title" id="title" ng-model="currentPost.title" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="body">Blog Body</label>
                            <textarea name="body" id="body" class="form-control" rows="8" ng-model="currentPost.body" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Save changes</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
@stop
@section('script')
    <script src="/js/blog.js"></script>
@stop