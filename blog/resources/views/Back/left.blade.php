<?php
/**
 * Created by 小韩说理
 * User: 韩忠康
 * Date: 2017/9/18
 * Time: 17:35
 */
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{URL::asset('/Back')}}/img/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, {{$user->name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="操作"/>
                <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i> <span>控制台</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>文章</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="article.html"><i class="fa fa-list"></i>文章列表</a></li>
                    <li><a href="article_add.html"><i class="fa fa-edit"></i>文章添加</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i> <span>分类</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="category_list.html"><i class="fa fa-list"></i>分类列表</a></li>
                    <li><a href="category_add.html"><i class="fa fa-edit"></i>分类添加</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tag"></i> <span>标签</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="tag_list.html"><i class="fa fa-list"></i>标签列表</a></li>
                    <li><a href="tag_add.html"><i class="fa fa-edit"></i>标签添加</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>