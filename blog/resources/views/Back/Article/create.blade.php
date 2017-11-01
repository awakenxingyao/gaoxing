<?php

?>
@extends('Back.layout')

@section('right')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                文章添加
                <small>文章</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i> 管理中心
                    </a>
                </li>
                <li><a href="{{route('articleIndex')}}">文章</a></li>
                <li class="active">文章添加</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <form action="{{route('articleCreate')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="box-header">
                                <h3 class="box-title"></h3>
                                <a href="{{route('articleIndex')}}" class="btn btn-default pull-right">文章列表</a>
                            </div><!-- /.box-header -->

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="input-subject">文章标题</label>
                                    <input type="text" name="subject" value="{{old('subject', '')}}" placeholder="标题" id="input-subject" class="form-control">
                                    @if($errors->has('subject'))
                                        <label for="input-subject" class="text-danger">{{$errors->first('subject')}}</label>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="input-cover">文章封面</label>
                                    <input type="file" name="cover" id="input-cover" >
                                </div>

                                <div class="form-group">
                                    <label for="input-summary">摘要</label>
                                    <textarea name="summary" placeholder="摘要" id="input-summary" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="input-content">内容</label>
                                    <textarea name="content" placeholder="内容" id="input-content" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="input-category_id">所属分类</label>
                                    <select name="category_id" placeholder="内容" id="input-category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))
                                        <label for="input-category_id" class="text-danger">{{$errors->first('category_id')}}</label>
                                    @endif
                                </div>


                            </div><!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <button class="btn btn-success" type="submit" name="status" value="save">保存</button>
                                <button class="btn btn-primary" type="submit" name="status" value="publish">发布</button>
                            </div><!-- /.box-footer -->
                        </form>

                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->

        </section><!-- /.content -->

        <section class="content-footer">
            <div class="text-center">
                &copy;HelloKang，小韩说理
            </div>
        </section><!-- /.content-footer -->

    </aside><!-- /.right-side -->
@endsection
