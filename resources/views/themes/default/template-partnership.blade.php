@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('brief', $data->post_excerpt)
@section('thumbnail', $data->page_thumbnail)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <div style="height: 77px; background: var(--bg-black);"></div>
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-text-center">
                <h1 class="uk-text-bolder  uk-margin-bottom  uk-text-center " style="color: #D62A34;" uk-scrollspy="cls: uk-animation-slide-left-small;   delay: 600; repeat: false;">
                    {{$data->post_title}}
                </h1>
                @if($data->page_banner)
                    <div class="uk-media-350 uk-border-rounded" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small;   delay: 700; repeat: false;">
                        <a href="{{ asset('uploads/banners/'. $data->page_banner) }}"> 
                            <img src="{{ asset('uploads/banners/'. $data->page_banner) }}" alt="{{$data->post_title}}" class="uk-effect-1"> 
                        </a>
                    </div>
                    <small><i class="uk-text-bold">{{$data->banner_caption}}</i></small>
                @endif
            </div>
            @if ($data_child->count() > 0)
                @if($data_child[0])
                    <div class="uk-child-width-1-2@m uk-grid uk-margin-large-top uk-margin-large-bottom uk-flex uk-flex-middle uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <div class="uk-margin-bottom">
                            {!!$data_child[0]->post_excerpt!!}
                        </div>
                        <div class="uk-text-center">
                            <div class="uk-media-300 uk-border-rounded uk-img-effect" uk-lightbox>
                                <a href="{{ asset('uploads/medium/'. $data_child[0]->page_thumbnail) }}"> 
                                    
                                <img src="{{ asset('uploads/medium/'. $data_child[0]->page_thumbnail) }}" alt="{{$data_child[0]->post_title}}" class="uk-effect-1"> </a>
                            </div>
                             <small><i class="uk-text-bold">{{$data_child[0]->thumbnail_caption}}</i></small>
                        </div>
                    </div>
                @endif
                @if($data_child[1])
                    <div class="uk-child-width-1-2@m uk-grid uk-margin-large-top uk-margin-large-bottom uk-flex uk-flex-middle uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <div class="uk-text-center">
                            <div class="uk-media-350 uk-border-rounded" uk-lightbox>
                                <a href="{{ asset('uploads/medium/'. $data_child[1]->page_thumbnail) }}">
                                    <img src="{{ asset('uploads/medium/'. $data_child[1]->page_thumbnail) }}" alt="{{$data_child[1]->post_title}}" class="uk-effect-1">
                                </a>
                            </div>
                             <small><i class="uk-text-bold">{{$data_child[1]->thumbnail_caption}}</i></small>
                        </div>
                        <div class="uk-margin-top" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                         {!!$data_child[1]->post_excerpt!!}
                         </div>
                    </div>
                @endif
                @if($data_child[2])
                    <div class="uk-text-center">
                        <div class="uk-media-400 uk-border-rounded uk-img-effect uk-text-center" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                            <a href="{{ asset('uploads/medium/'. $data_child[2]->page_thumbnail) }}"> 
                                <img src="{{ asset('uploads/medium/'. $data_child[2]->page_thumbnail) }}" alt="{{$data_child[2]->post_title}}" class="uk-effect-1"> 
                            </a>
                        </div>
                         <small><i class="uk-text-bold">{{$data_child[2]->thumbnail_caption}}</i></small>
                    </div>
                     <div class="uk-margin-top" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        {!!$data_child[2]->post_excerpt!!}
                      </div>
                @endif
                @if($data_child[3])
                    <div class="uk-child-width-1-2@m uk-grid uk-margin-large-top uk-margin-large-bottom uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <div>
                            {!!$data_child[3]->post_excerpt!!}
                        </div>
                        <div class="uk-text-center">
                            <div class="uk-media-350 uk-border-rounded" uk-lightbox>
                                <a href="{{ asset('uploads/medium/'. $data_child[3]->page_thumbnail) }}">
                                    <img src="{{ asset('uploads/medium/'. $data_child[3]->page_thumbnail) }}" alt="{{$data_child[3]->post_title}}" class="uk-effect-1">
                                </a>
                            </div>
                             <small><i class="uk-text-bold">{{$data_child[3]->thumbnail_caption}}</i></small>
                        </div>
                    </div>
                @endif
                @if($data_child[4])
                    <div uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        {!!$data_child[4]->post_excerpt!!}
                    </div>
                    <div class="uk-text-center">
                        <div class="uk-media-350 uk-border-rounded uk-img-effect uk-text-center" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                            <a href="{{ asset('uploads/medium/'. $data_child[4]->page_thumbnail) }}"> 
                                <img src="{{ asset('uploads/medium/'. $data_child[4]->page_thumbnail) }}" alt="{{$data_child[4]->post_title}}" class="uk-effect-1"> 
                            </a>
                        </div>
                        <small><i class="uk-text-bold">{{$data_child[4]->thumbnail_caption}}</i></small>
                    </div>
                @endif
                @if($data_child[5])
                    <div class="uk-margin-large-top uk-margin-large-bottom uk-img-effect" uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                        <h1 class="uk-h2 theme-font-medium-bold " style="color: #D62A34;">{{$data_child[5]->post_title}}</h1>
                        {!!$data_child[5]->post_excerpt!!}
                    </div>
                    <div class="uk-text-center">
                        <div class="uk-media-350 uk-border-rounded uk-img-effect uk-text-center" uk-lightbox uk-scrollspy="cls: uk-animation-slide-left-small; target:div, p,img;  delay: 100; repeat: false;">
                            <a href="{{ asset('uploads/medium/'. $data_child[5]->page_thumbnail) }}"> 
                                <img src="{{ asset('uploads/medium/'. $data_child[5]->page_thumbnail) }}" alt="{{$data_child[5]->post_title}}" class="uk-effect-1"> 
                            </a>   
                        </div>
                         <small><i class="uk-text-bold">{{$data_child[4]->thumbnail_caption}}</i></small>
                    </div>
                @endif
            @endif
            <div class="uk-margin-large-top uk-flex uk-flex-center">
                <div class="uk-button uk-button-primary title" style="font-size: 20px; cursor: default!important; background: #D62A34;">
                    <style>
                        .title *{
                            margin:0!important;
                        }
                    </style>
                    {!!$data->associated_title!!}
                </div>
            </div>
            <div class="uk-grid uk-grid-collapse uk-flex-center uk-margin-top">
                <p>For more details about the technology, visit:</p>
                <a href="{{$data->external_link}}" class="uk-margin-small-left" ><b style="color: #D62A34;">{{$data->external_link}}</b></a>
                <a href="{{$data->external_link}}" class="uk-margin-small-left"><b style="color: #D62A34;">{{$data->sub_title}}</b></a>
            </div>
            
    
        </div>
    </section>
@endsection