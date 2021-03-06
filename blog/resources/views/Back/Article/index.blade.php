<?php

?>
@extends('Back.layout')
@section('right')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{trans('article.page-header')}}
                @lang('common.new-mail', ['number'=>32])
                <small>
                    @lang('article.module')
                </small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i> 管理中心
                    </a>
                </li>
                <li><a href="{{route('articleIndex')}}">文章</a></li>
                <li class="active">文章列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                            <a href="{{route('articleCreate')}}" class="btn btn-default pull-right">添加分类</a>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <a href="{{route('articleTrash')}}" class="btn btn-default pull-right">回收站</a>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>标题</th>
                                    <th>分类</th>
                                    <th>更新时间</th>
                                    <th style="width: 20%">操作</th>
                                </tr>
                                @foreach($articles as $article)
                                <tr>
                                    <td>{{$loop->iteration}}.</td>
                                    <td>{{$article->subject}}</td>
                                    <td>{{$article->category->title}}</td>
                                    <td>{{$article->updated_at}}</td>
                                    <td>
                                        <a href="{{route('articleEdit', ['id'=>$article->id])}}" class="btn btn-default" title="编辑"><span class="fa fa-edit"></span> 编辑</a>
                                        <a href="{{route('articleDelete', ['id'=>$article->id])}}" class="btn btn-default" title="删除" onclick="return confirm('是否删除？');"><span class="fa fa-trash-o"></span> 删除</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody></table>
                        </div><!-- /.box-body -->
                        <div class="box-footer clearfix">
                            {{$articles->links()}}
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /.content -->

        <section class="content-footer">
            <div class="text-center">
                &copy;HelloGao，高兴太极
            </div>
        </section><!-- /.content-footer -->

    </aside><!-- /.right-side -->

@endsection

