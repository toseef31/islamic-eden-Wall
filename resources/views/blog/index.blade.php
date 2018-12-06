@extends('master')
@section('css')
    <style>
        .posts .blog-post{
            border-bottom: 1px solid #eee8d5;
            margin-bottom: 30px;
        }
        .posts .blog-post:last-child{
            border-bottom: none;
        }
    </style>
@stop
@section('breadcrumb')
    @include('partials.breadcrumb')
@stop
@section('content')
    <div class="{{ isset($theme['theme']['value'])?$theme['theme']['value']:'ls' }} section_padding_top_40 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3  class="title-featured text-center" style="    margin-bottom: 38px;     margin-top: 38px;"> <i class="fa fa-chevron-left"></i> <span ></span> <span>Latest Blog Posts</span> <i class="fa fa-chevron-right"></i></h3>
                    <hr>
                </div>
                <div class="row gallery-firstrow2">
                    <div class="col-md-12 posts">
                    @foreach($posts as $post)
                         <div class="col-md-3">
                             
                                        <div class="gridview-pic2">
                                            <img   src="{{ asset('assets/images/blog/'.$post->images_data) }}" alt="{{ $post->meta_title }}" style="width: 100%;">
                                        </div>
                                        
                                   
                                <div class="blog-post card-dscrpt">
                                   
                                     
                                    {{$post->meta_title}}
                                     {!!  $post->post  !!}
                                    <div class="pager">
                                        <a href="{{ action('BlogController@showPost',$post->id) }}" class="next btn-more" style="color: white !important;">Read More</a>
                                    </div>
                                </div>
                         </div>
                    @endforeach
                        {{--<div class="post format-standart">
                            <figure class="post__img">
                                <a href="blog-single-right.html">
                                    <img src="{{ asset('assets/images/blog/img_blog-01.jpg') }}" alt="">
                                </a>
                            </figure>
                            <article class="post__content">
                                <div class="post__meta">
                                    <p class="post__meta-date">23.03.2016</p>
                                    <span>by</span>
                                    <a href="#" class="post__meta-autor">Admin</a>
                                    <a href="#" class="post__meta-tags">Eco Food</a>
                                </div>
                                <h3 class="post__title">
                                    <a href="blog-single-right.html">Standart post format</a>
                                </h3>
                                <p>Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere
                                    blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                            </article>
                        </div>--}}
                    </div>
                </div>
                <div class="col-sm-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@stop