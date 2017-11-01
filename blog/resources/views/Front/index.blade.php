<?php

?>
@extends('Front.layout')

@section('container')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 mb-xs-24">
                    <div id="article-container">

                    </div>

                    <div class="text-center">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--end of nine col-->
                <div class="col-md-3 hidden-sm">
                    <div class="widget">
                        <h6 class="title">搜索</h6>
                        <hr>
                        <form>
                            <input class="mb0" type="text" placeholder="关键词" />
                        </form>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">作者</h6>
                        <hr>
                        <p>
                            高兴说理
                        </p>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">分类</h6>
                        <hr>
                        <ul class="link-list">
                            <li>
                                <a href="#">多彩生活</a>
                            </li>
                            <li>
                                <a href="#">Web设计</a>
                            </li>
                            <li>
                                <a href="#">图像库</a>
                            </li>
                            <li>
                                <a href="#">随笔</a>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">最新博文</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="#">互联网+畅想</a>
                                <span class="date">September 23, 2015</span>
                            </li>
                            <li>
                                <a href="#">PHP7极速体验</a>
                                <span class="date">September 19, 2015</span>
                            </li>
                            <li>
                                <a href="#">全栈工程师怎么养成</a>
                                <span class="date">September 07, 2015</span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">最新评论</h6>
                        <hr>
                        <ul class="link-list recent-comments">
                            <li>
                                <a href="#">高大上</a>
                                <span class="date">September 23, 2015</span>
                            </li>
                            <li>
                                <a href="#">我要报名</a>
                                <span class="date">September 19, 2015</span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
                <!--end of sidebar-->
            </div>
            <!--end of container row-->
        </div>
        <!--end of container-->
    </section>
@endsection

@section('appendJs')
    <script>
        $(function() {
            var url = '{{route('articles.index')}}';
            var data = {
                limit: 2,
                page: 2
            };
            $.get(url, data, function(resp) {
                $.each(resp, function(i, article) {
                    var html = '';
                    html += '<div class="post-snippet mb64">';
                    html += '<a href="#">';
                    html += '<img class="mb24" alt="Post Image" src="{{URL::asset('/Front')}}/img/blog-single-4.jpg" />';
                    html += '</a>';
                    html += '<div class="post-title">';
                    html += '<span class="label">2017年4月1日</span>';
                    html += '<a href="#">';
                    html += '<h4 class="inline-block">'+article.subject+'</h4>';
                    html += '</a>';
                    html += '</div>';
                    html += '<ul class="post-meta">';
                    html += '<li>';
                    html += '<i class="ti-user"></i>';
                    html += '<span>作者';
                    html += '<a href="#">高兴说理</a>';
                    html += '</span>';
                    html += '</li>';
                    html += '<li>';
                    html += '<i class="ti-tag"></i>';
                    html += '<span>标签';
                    html += '<a href="#">PHP</a>';
                    html += '<a href="#">互联网</a>';
                    html += '<a href="#">PHP7</a>';
                    html += '</span>';
                    html += '</li>';
                    html += '</ul>';
                    html += '<hr>';
                    html += '<p>';
                    html += article.summary;
                    html += '</p>';
                    html += '<a class="btn btn-sm" href="article.html">详细</a>';
                    html += '</div>';
                    html += '<!--end of post snippet-->';

                    $('#article-container').append(html);
                });
            }, 'json');
        });
    </script>
@endsection
