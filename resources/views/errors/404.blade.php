@extends('layout.master')
@section('content')
<section class="hero-section error-section">
    <div class="bg-wrap hero-section_bg">
        <div class=bg
            data-bg=https://webredox.net/demo/wp/gmag/wp-content/themes/gmag/includes/images/bg/6.jpg></div>
    </div>
    <div class=container>
        <div class=error-wrap>
            <h2>404</h2>
            <p>
                We&#039;re sorry, but the Page you were looking for, couldn&#039;t be found.</p>
            <div class=clearfix></div>
            <form action=https://webredox.net/demo/wp/gmag/ class=custom-form>
                <input name=s id=se type=text class=search placeholder=Search.. value=Search..>
                <button class="search-submit color-bg" id=submit_btn2><i class="fa fa-search"></i> </button>
            </form>
            <div class=clearfix></div>
            <p>Or</p>
            <a href=https://webredox.net/demo/wp/gmag/ class="btn color-btn flat-btn"> <span>Back to Home
                    Page</span> <i class="fas fa-caret-right"></i></a>
        </div>
    </div>
</section>
@endsection