<!DOCTYPE html>
<html class=no-js lang=en-US>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('layout.head')
</head>

<body id=body
    class="home page-template-default page page-id-13 wp-embed-responsive theme-gmag woocommerce-no-js elementor-default elementor-kit-7 elementor-page elementor-page-13">
    <div id=main>
        @include('layout.header')
        <div id=wrapper>
            <div class=content>
                @section('banner')
                    @include('layout.banner')
                @show
                <div data-elementor-type=wp-page data-elementor-id=13 class="elementor elementor-13">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-53e17778 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id=53e17778 data-element_type=section>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-654d3083"
                                data-id=654d3083 data-element_type=column>
                                @yield('content')
                            </div>

                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-16479b42"
                                data-id=16479b42 data-element_type=column>
                                @include('layout.navbar')
                            </div>


                        </div>
                    </section>

                </div>
            </div>
            @include('layout.footer')
            <div class=aside-panel>
                <ul>
                    <li> <a href=category/politics/index.html><i class="far fa-podium"></i><span>Politics</span></a>
                    </li>
                    <li> <a href=category/technology/index.html><i class="far fa-atom"></i><span>Technology</span></a>
                    </li>
                    <li> <a href=category/business/index.html><i class="far fa-user-chart"></i><span>Business</span></a>
                    </li>
                    <li> <a href=category/sports/index.html><i class="far fa-tennis-ball"></i><span>Sports</span></a>
                    </li>
                    <li> <a href=category/science/index.html><i class="far fa-flask"></i><span>Science</span></a></li>
                </ul>
            </div>
            <div class=woocommerce-notices-wrapper></div>
            <div class=main-register-container>
                <div class="reg-overlay close-reg-form"></div>
                <div class=main-register-holder>
                    <div class="main-register-wrap fl-wrap">
                        <div class=main-register_bg>
                            <div class=bg-wrap>
                                <div class="bg par-elem "
                                    data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/1.jpg></div>
                                <div class=overlay></div>
                            </div>
                            <div class=mg_logo><img src=wp-content/themes/gmag/includes/images/logo2.png alt></div>
                        </div>
                        <div class="main-register tabs-act fl-wrap">
                            <ul class=tabs-menu>
                                <li class=current><a href=#tab-1><i class="fal fa-sign-in-alt"></i> Login</a></li>
                                <li><a href=#tab-2><i class="fal fa-user-plus"></i> Register</a></li>
                            </ul>
                            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                            <div id=tabs-container>
                                <div class=tab>
                                    <div id=tab-1 class="tab-content first-tab">
                                        <div class=custom-form>
                                            <form method=post name=registerform>
                                                <label>Email <span>*</span> </label>
                                                <input name=email id=email value type=text onClick=this.select()
                                                    required> <label>Password <span>*</span> </label>
                                                <input name=password id=password type=text onClick=this.select()
                                                    required>
                                                <div class=filter-tags>
                                                    <input id=check-a name=rememberme type=checkbox id=rememberme
                                                        value=forever checked>
                                                    <label for=check-a>Remember me</label>
                                                </div>
                                                <input type=hidden id=woocommerce-login-nonce
                                                    name=woocommerce-login-nonce value=d34ca6f5b6><input type=hidden
                                                    name=_wp_http_referer value=/demo/wp/gmag />
                                                <div class=lost_password>
                                                    <a href=shop/my-account/lost-password/index.html>Lost Your
                                                        Password?</a>
                                                </div>
                                                <div class=clearfix></div>
                                                <button type=submit class="log-submit-btn color-bg"
                                                    name=login><span>Đăng nhập</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class=tab>
                                        <div id=tab-2 class=tab-content>
                                            <div class=custom-form>
                                                {{-- action="{{ route('sign-up') }}" --}}
                                                <form enctype="multipart/form-data">
                                                    @csrf
                                                    <label>UserName <span>*</span> </label>
                                                    <input type=text value="{{ old('name') }}" name=name
                                                        id=reg_username autocomplete=username>
                                                    <span style="color: red">
                                                        @error('name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                    <label>Số điện thoại
                                                        <span>*</span>
                                                    </label>
                                                    <input type=text name=sdt id=reg_email autocomplete=email>

                                                    <label>Email
                                                        <span>*</span>
                                                    </label>
                                                    <input type=text name=email id=reg_email autocomplete=email value>
                                                    <label>Mật khẩu <span>*</span>
                                                    </label>
                                                    <input name=password type=password autocomplete=new-password>
                                                    <label>Avatar</label>
                                                    <input name=avtar type=file>

                                                    <button class="log-submit-btn color-bg btn-sign-up"><span>Đăng
                                                            ký</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layout.script')
</body>

</html>
