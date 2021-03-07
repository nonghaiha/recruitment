@extends('Client::layout.app')

@section('title','30Shine News')

@section('bodyID','news')

@section('content')
    <div class="container-recruitment">
        <div class="article_wrap">
            <div class="article_content_wrap">
                <div class="blog-breadcrumb">
                    <ol class="breadcrumb breadcrumb-arrow" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                                href="/blogs/news" target="_self"><span itemprop="name">News</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                    </ol>
                </div>
                <h1 class="line_after_heading section_heading">{{$news['title']}}</h1>
                <div class="article_content">
                    {!! $news['description'] !!}
                </div>
            </div>
        </div>
    </div>
@endsection
