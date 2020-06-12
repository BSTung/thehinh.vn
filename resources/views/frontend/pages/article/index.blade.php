@extends('layouts.app_master_frontend')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.min.css') }}">
     <style type="text/css">
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }
        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }
        ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
        }
        ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
        }
        
    </style>
@stop
@section('content')
    <div class="container">
        <div class="breadcrumb">
            <ul class="breadcrumb">
              <li><a href="/frameLaravel/thehinh.vn/public/">Trang chủ</a></li>
              <li>Bài viết</li>
            </ul>
        <!--    
            <ul>
                <li>
                    <a href="/" title="Home"><span itemprop="title">Trang chủ</span></a>
                </li>
                <li>
                    <a href="{{ route('get.blog.home')}}" title="Sản phẩm chính hãng">
                        Bài viết
                    </a>
                </li>
            </ul>
        -->
        </div>
        
        <div class="blog-main">
            <div class="left">
                <div class="post-hot">
                    <div class="hot-left">
                        <div class="avatar">
                            <a href="" title="" class="image cover">
                                <img data-src="" class="lazyload" alt="" src="<!-- {{ url('images/banner/dongho.jpg') }} -->">
                            </a>
                        </div>
                        <a href="" title="" class="title">Tiêu đề bài viết</a>
                        <p class="intro-short">
                            Thật là đáng tiếc nếu như bạn quá bận rộn và trót bỏ lỡ bão sale Black Friday nhưng mọi chuyện sẽ không còn quá tệ nếu bạn biết sau Black Friday còn có Cyber Monday nữa.
                        </p>
                    </div>
                    <div class="hot-right">
                        <div class="top">
                            <div class="avatar">
                                <a href="" title="" class="image cover">
                                    <img data-src="" class="lazyload" alt="" src="<!-- {{ url('images/banner/dongho.jpg') }} -->">
                                </a>
                            </div>
                            <a href="" title="" class="title">Tiêu đề bài viết</a>
                        </div>
                        <div class="bot">
                            <a href="" title="" class="">Những sản phẩm được người tiêu dùng ưu thích tại thehinh.vn</a>
                            <a href="" title="" class="">Những dòng sản phẩm chất lượng</a>
                            <a href="" title="" class="">Được lựa chọn nhiều nhất tại thehinh.vn</a>
                            <a href="" title="" class="">Được lựa chọn nhiều nhất tại thehinh.vn</a>
                        </div>
                    </div>
                </div>
                <div class="post-list">
                    @foreach($articles as $article)
                        @include('frontend.pages.article.include._inc_blog_item',['article' => $article])
                    @endforeach
                        <div style="display: block;">
                        {!! $articles->appends([])->links() !!}
                    </div>
                </div>
            </div>
            <div class="right">
                @include('frontend.components.articles_hot_sidebar_top',['articles' => $articlesHotSidebarTop])
                @include('frontend.components.top_product',['products' => $productTopPay])
                @include('frontend.components.hot_article',['articles'  => $articlesHot])
                
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="{{ asset('js/blog.js') }}" type="text/javascript"></script>
@stop