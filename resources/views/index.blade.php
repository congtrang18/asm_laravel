@extends('layout.master')
@section('content')
   
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-6d516621 elementor-widget elementor-widget-gmag-post-tab-cat"
            data-id=6d516621 data-element_type=widget data-widget_type=gmag-post-tab-cat.default>
            <div class=elementor-widget-container>
                <div class=clear></div>
                <div class="fl-wrap content-tabs-wrap tabs-act">
                    <div class=section-title>
                        <h2>Bài viết theo danh mục</h2>
                        
                        <div class="ajax-nav2 tabs-menu">
                            <ul>
                                @foreach ($tags as $item)
                                    <li @if ($item->id == 1) class=current @endif><a
                                            href="#tab-{{ $item->id }}">{{ $item->name }}</a></li>
                                @endforeach
                                                                    
                                {{-- <li><a href=#tab-technology>Technology</a></li>
                                <li><a href=#tab-business>Business</a></li>
                                <li><a href=#tab-sports>Sports</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class=tabs-container>
                        @foreach ($posts as $item)
                            <div class="tab tab-{{ $item->tag->id }}-inner">
                                <div id="tab-{{ $item->tag->id }}"
                                    class="tab-content @if ($item->tag_id === 1) first-tab @endif">
                                    <div class=list-post-wrap>
                                        
                                        <div class="list-post fl-wrap">
                                            <div class=list-post-media>
                                                <a href="{{route('detail',[$item->id,$item->tieu_de])}}">
                                                    <div class=bg-wrap>
                                                        <div class=bg data-bg={{ $item->anh_dai_dien }}>
                                                        </div>
                                                    </div>
                                                </a>
                                                <span class=post-media_title>{{ $item->tieu_de }}</span>
                                            </div>
                                            <div class=list-post-content>
                                                <a class=post-category-marker
                                                    href="{{route('detail',[$item->id,$item->tieu_de])}}">{{ $item->tag->name }}
                                                </a>
                                                <h3><a
                                                        href=heres-the-proof-that-momentum-strategies-work/index.html>{{ $item->tieu_de }}</a>
                                                </h3>
                                                <span class=post-date><i class="far fa-clock"></i>
                                                    {{ date('d-m-Y', strtotime($item->created_at)) }}</span>
                                                    <p>{{ $item->mo_ta_ngan }}</p>
                                                <ul class=post-opt>
                                                    <li><i class="far fa-comments-alt"></i> 3
                                                    </li>
                                                    <li><i class="fal fa-eye"></i> {{ $item->luot_xem }} views
                                                    </li>
                                                </ul>
                                                <div class=author-link><a href=author/webredox/index.html><img
                                                            decoding=async src=wp-content/uploads/2022/06/3.jpg width=36
                                                            height=36 alt="{{$item->user->name}}"
                                                            class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                                        <span>{{$item->user->name}}</span></a></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                </div>
                {{-- <div class=clear></div> --}}
            </div>
        </div>
        
        {{-- <div class="elementor-element elementor-element-17281ecf elementor-widget elementor-widget-gamg-sec-title"
            data-id=17281ecf data-element_type=widget data-widget_type=gamg-sec-title.default>
            <div class=elementor-widget-container>
                <div class="section-title sect_dec text-left">
                    <h2>Top Stories</h2>
                    <h4>Don't miss daily news</h4>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-288d0d72 elementor-widget elementor-widget-gmag-post-grid-one"
            data-id=288d0d72 data-element_type=widget data-widget_type=gmag-post-grid-one.default>
            <div class=elementor-widget-container>
                <div class="grid-post-wrap gallery-items-el row">
                    <div class="more-post-wrap  fl-wrap">
                        <div class="list-post-wrap list-post-wrap_column fl-wrap">
                            <div class="rows fl-wrap">
                                <div id=post-180
                                    class="col-md-6 gallery-item-el post-180 post type-post status-publish format-gallery has-post-thumbnail hentry category-science tag-technology tag-business tag-lifestyle tag-science post_format-post-format-gallery">
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker purp-bg" href=category/science/index.html>Science
                                        </a>
                                        <div class=list-post-media>
                                            <a href=how-to-start-home-renovation/index.html>
                                                <div class=bg-wrap>
                                                    <div class=bg
                                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/16.jpg>
                                                    </div>
                                                </div>
                                            </a>
                                            <span class=post-media_title>© Image Copyrights
                                                Title</span>
                                        </div>
                                        <div class=list-post-content>
                                            <h3><a href=how-to-start-home-renovation/index.html>How
                                                    to start Home renovation.</a></h3>
                                            <span class=post-date><i class="far fa-clock"></i> June 12,
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div id=post-189
                                    class="col-md-6 gallery-item-el post-189 post type-post status-publish format-gallery has-post-thumbnail hentry category-sports tag-sports tag-science tag-business tag-lifestyle post_format-post-format-gallery">
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker purp-bg" href=category/sports/index.html>Sports
                                        </a>
                                        <div class=list-post-media>
                                            <a href=warriors-face-season-defining-clash/index.html>
                                                <div class=bg-wrap>
                                                    <div class=bg
                                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/24.jpg>
                                                    </div>
                                                </div>
                                            </a>
                                            <span class=post-media_title>© Image Copyrights
                                                Title</span>
                                        </div>
                                        <div class=list-post-content>
                                            <h3><a href=warriors-face-season-defining-clash/index.html>Warriors
                                                    face season defining clash</a></h3>
                                            <span class=post-date><i class="far fa-clock"></i> June 12,
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-44b58110 elementor-widget elementor-widget-gmag-post-slider"
            data-id=44b58110 data-element_type=widget data-widget_type=gmag-post-slider.default>
            <div class=elementor-widget-container>
                <div class="single-grid-slider-wrap fl-wrap">
                    <div class=single-grid-slider>
                        <div class=swiper-container>
                            <div class=swiper-wrapper>
                                <div class=swiper-slide>
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                        <div class="grid-post-media gpm_sing">
                                            <div class=bg
                                                data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/31.jpg>
                                            </div>
                                            <div class=author-link><a href=author/webredox/index.html><img
                                                        decoding=async src=wp-content/uploads/2022/06/3.jpg width=36
                                                        height=36 alt="Ann Kowalsky"
                                                        class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                                    <span>By Ann Kowalsky</span></a></div>
                                            <div class=grid-post-media_title>
                                                <a class=post-category-marker
                                                    href=category/technology/index.html>Technology
                                                </a>
                                                <h4><a
                                                        href=videos-show-spacexs-dragon-capsule-as-it-returns-to-earth/index.html>Videos
                                                        show SpaceX&#8217;s Dragon capsule
                                                        as it returns to Earth</a></h4>
                                                <span class=video-date><i class="far fa-clock"></i> June 12,
                                                    2022</span>
                                                <ul class=post-opt>
                                                    <li><i class="far fa-comments-alt"></i>
                                                        3 </li>
                                                    <li><i class="fal fa-eye"></i> 435
                                                        views
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=swiper-slide>
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                        <div class="grid-post-media gpm_sing">
                                            <div class=bg
                                                data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/39.jpg>
                                            </div>
                                            <div class=author-link><a href=author/webredox/index.html><img
                                                        decoding=async src=wp-content/uploads/2022/06/3.jpg width=36
                                                        height=36 alt="Ann Kowalsky"
                                                        class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                                    <span>By Ann Kowalsky</span></a></div>
                                            <div class=grid-post-media_title>
                                                <a class=post-category-marker
                                                    href=category/technology/index.html>Technology
                                                </a>
                                                <h4><a
                                                        href=cape-towns-day-zero-we-are-axing-trees-to-save-water/index.html>Cape
                                                        Town&#8217;s Day Zero: We are axing
                                                        trees to save water</a></h4>
                                                <span class=video-date><i class="far fa-clock"></i> June 12,
                                                    2022</span>
                                                <ul class=post-opt>
                                                    <li><i class="far fa-comments-alt"></i>
                                                        3 </li>
                                                    <li><i class="fal fa-eye"></i> 439
                                                        views
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=swiper-slide>
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                        <div class="grid-post-media gpm_sing">
                                            <div class=bg
                                                data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/33.jpg>
                                            </div>
                                            <div class=author-link><a href=author/admin/index.html><img decoding=async
                                                        src=wp-content/uploads/2022/06/4.jpg width=36 height=36
                                                        alt="Jessie Bond"
                                                        class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                                    <span>By Jessie Bond</span></a></div>
                                            <div class=grid-post-media_title>
                                                <a class=post-category-marker href=category/business/index.html>Business
                                                </a>
                                                <h4><a href=london-stay-most-popular-city-2/index.html>London
                                                        Stay Most Popular City</a></h4>
                                                <span class=video-date><i class="far fa-clock"></i> June 12,
                                                    2022</span>
                                                <ul class=post-opt>
                                                    <li><i class="far fa-comments-alt"></i>
                                                        3 </li>
                                                    <li><i class="fal fa-eye"></i> 396
                                                        views
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sgs-pagination sgs_ver "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-54e78532 elementor-widget elementor-widget-gmag-post-grid-one"
            data-id=54e78532 data-element_type=widget data-widget_type=gmag-post-grid-one.default>
            <div class=elementor-widget-container>
                <div class="grid-post-wrap gallery-items-el row">
                    <div class="more-post-wrap  fl-wrap">
                        <div class="list-post-wrap list-post-wrap_column fl-wrap">
                            <div class="rows fl-wrap">
                                <div id=post-211
                                    class="col-md-6 gallery-item-el post-211 post type-post status-publish format-gallery has-post-thumbnail hentry category-sports tag-science tag-business tag-lifestyle tag-sports post_format-post-format-gallery">
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker purp-bg" href=category/sports/index.html>Sports
                                        </a>
                                        <div class=list-post-media>
                                            <a href=female-hawks-win-10000-funding-boost/index.html>
                                                <div class=bg-wrap>
                                                    <div class=bg
                                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/37.jpg>
                                                    </div>
                                                </div>
                                            </a>
                                            <span class=post-media_title>© Image Copyrights
                                                Title</span>
                                        </div>
                                        <div class=list-post-content>
                                            <h3><a href=female-hawks-win-10000-funding-boost/index.html>Female
                                                    Hawks win $10,000 funding boost</a></h3>
                                            <span class=post-date><i class="far fa-clock"></i> June 12,
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div id=post-217
                                    class="col-md-6 gallery-item-el post-217 post type-post status-publish format-gallery has-post-thumbnail hentry category-technology tag-lifestyle tag-science tag-technology tag-business post_format-post-format-gallery">
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker purp-bg"
                                            href=category/technology/index.html>Technology
                                        </a>
                                        <div class=list-post-media>
                                            <a href=cape-towns-day-zero-we-are-axing-trees-to-save-water/index.html>
                                                <div class=bg-wrap>
                                                    <div class=bg
                                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/39.jpg>
                                                    </div>
                                                </div>
                                            </a>
                                            <span class=post-media_title>© Image Copyrights
                                                Title</span>
                                        </div>
                                        <div class=list-post-content>
                                            <h3><a href=cape-towns-day-zero-we-are-axing-trees-to-save-water/index.html>Cape
                                                    Town&#8217;s Day Zero: We are axing
                                                    trees to save water</a></h3>
                                            <span class=post-date><i class="far fa-clock"></i> June 12,
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div id=post-243
                                    class="col-md-6 gallery-item-el post-243 post type-post status-publish format-gallery has-post-thumbnail hentry category-science tag-technology tag-business tag-lifestyle tag-science post_format-post-format-gallery">
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker purp-bg" href=category/science/index.html>Science
                                        </a>
                                        <div class=list-post-media>
                                            <a
                                                href=high-wind-delays-spacex-crew-homecoming-after-6-months-aloft/index.html>
                                                <div class=bg-wrap>
                                                    <div class=bg
                                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/18-1.jpg>
                                                    </div>
                                                </div>
                                            </a>
                                            <span class=post-media_title>© Image Copyrights
                                                Title</span>
                                        </div>
                                        <div class=list-post-content>
                                            <h3><a
                                                    href=high-wind-delays-spacex-crew-homecoming-after-6-months-aloft/index.html>High
                                                    wind delays SpaceX crew homecoming after
                                                    6 months aloft</a></h3>
                                            <span class=post-date><i class="far fa-clock"></i> June 12,
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div id=post-238
                                    class="col-md-6 gallery-item-el post-238 post type-post status-publish format-gallery has-post-thumbnail hentry category-politics tag-technology tag-business tag-lifestyle tag-science post_format-post-format-gallery">
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker purp-bg"
                                            href=category/politics/index.html>Politics </a>
                                        <div class=list-post-media>
                                            <a
                                                href=what-the-federal-infrastructure-package-means-for-minnesota/index.html>
                                                <div class=bg-wrap>
                                                    <div class=bg
                                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/7-2.jpg>
                                                    </div>
                                                </div>
                                            </a>
                                            <span class=post-media_title>© Image Copyrights
                                                Title</span>
                                        </div>
                                        <div class=list-post-content>
                                            <h3><a
                                                    href=what-the-federal-infrastructure-package-means-for-minnesota/index.html>What
                                                    the federal infrastructure package means
                                                    for Minnesota</a></h3>
                                            <span class=post-date><i class="far fa-clock"></i> June 12,
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-3d23380b elementor-widget elementor-widget-gamg-button"
            data-id=3d23380b data-element_type=widget data-widget_type=gamg-button.default>
            <div class=elementor-widget-container>
                <div class=clear></div>
                <a href=blog/index.html target=_self class="dark-btn fl-wrap float-btn-center gm-simple-url"> Read All
                    News
                </a>
                <div class=clear></div>
            </div>
        </div> --}}
    </div>
@endsection
