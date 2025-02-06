@include('header')

<div id="what-we-do">
    <div class="container">
        <div class="row">
            <img src="{{url('/img')}}/TEMA 2025.jpg">
            <div class="col-md-6" style="display: none">
                <div class="left-text">
                    <h4>New offers just arrived,<br>Get it now and take profit.</h4>
                    <p>Gochujang pitchfork post-ironic hammock kombucha fanny pack cronut. Raw denim chicharrones semiotics af truffaut pinterest. Distillery letterpress authentic adaptogen. Meditation schlitz humblebrag photo booth celiac cliche chartreuse.<br><br>Pinterest 90's wolf celiac dreamcatcher listicle deep v semiotics. Intelligentsia literally meggings trust fund put a bird on it. Shoreditch crucifix artisan pug shaman twee. Health goth bicycle rights retro iPhone.</p>
                    <ul>
                        <li>
                            <div class="white-button">
                                <a href="{{route('article_single')}}" class="scroll-link" data-id="portfolio">Read More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="right-image">
                    <img src="img/what-we-do-right-image.png" alt="">
                </div>
            </div> -->
        </div>
    </div>
</div>

<div id="hanging" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item first-service">
                    <h4>SMILE</h4>
                    <p>Berikan senyuman kepada orang lain sebagai bentuk kasih kita kepada mereka.</p>
                    <div class="black-button">
                        <a href="{{route('3s')}}">Read More</a>
                    </div>
                </div>

            </div>
             <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item second-service">
                    <h4>SPREAD THE LOVE</h4>
                    <p>Bagikan kasihmu kepada banyak orang melalui perbuatan baik yang bisa kita lakukan bagi orang lain.</p>
                    <div class="black-button">
                        <a href="{{route('3s')}}">Read More</a>
                    </div>
                </div>
            </div>
             <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item third-service">
                    <h4>SHALOM</h4>
                    <p>Ucapkan salam damai sejahtera bagi banyak orang yang akan menjadi berkat bagi kehidupan mereka.</p>
                    <div class="black-button">
                        <a href="{{route('3s')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pastor-message" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>PASTOR MESSAGE</h3>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12" style="text-align: center;">
                    <iframe width="711.2" height="400" src="https://www.youtube.com/embed/eozC2-IpV1Y?si=UkizHBprKvxirkUr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <!-- <ul>
                        <li>
                            <div class="black-button">
                                <a href="{{route('article_single')}}">Read More</a>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>



<div id="about" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>ONLINE SERVICES</h3>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="slider">
                        <div class="logos">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item first-service fab">
                                    <!-- <div class="icon"></div> -->
                                    <iframe src="https://www.youtube.com/embed/videoseries?si=5r4GYJaYty67wm1W&amp;list=PLjnNJteNNTmwrs4IeHsjljVITs8MX7a7O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <h4>Ibadah Raya Online</h4>
                                    <div class="black-button">
                                        <a href="{{route('online_services')}}">Find Out More</a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item second-service fab">
                                    <iframe src="https://www.youtube.com/embed/videoseries?si=yO584dPWmE8HCjsX&amp;list=PLjnNJteNNTmzOkRrIhgEJn3yxi0ZA4bES" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <!-- <div class="icon"></div> -->
                                    <h4>Healing Worship Online</h4>
                                    <div class="black-button">
                                        <a href="{{route('online_services')}}">Find Out More</a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item third-service fab">
                                    <iframe src="https://www.youtube.com/embed/videoseries?si=G11c9x-bJlA4f8aJ&amp;list=PLbeerQLV3Lb5yPkgBovLyJE-X99m96SdH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <!-- <div class="icon"></div> -->
                                    <h4>Legacy Youth Service</h4>
                                    <div class="black-button">
                                        <a href="{{route('online_services')}}">Find Out More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item third-service fab">
                                    <iframe src="https://www.youtube.com/embed/videoseries?si=G11c9x-bJlA4f8aJ&amp;list=UULFFd98LIkLX8mGJWGJp1KW6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                    <!-- <div class="icon"></div> -->
                                    <h4>Kids GBI Sukawarna</h4>
                                    <div class="black-button">
                                        <a href="{{route('online_services')}}">Find Out More</a>
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

<div id="blog" class="page-section">
    <div class="container">
        <div class="row">
            <div class="embedsocial-hashtag" data-ref="419df1f7122fb3f7cb4b0e8031885d51c96e74d2"> <a class="feed-powered-by-es feed-powered-by-es-feed-img" href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Instagram widget"> <img src="https://embedsocial.com/cdn/images/embedsocial-icon.png" alt="EmbedSocial"> Instagram widget </a> </div> <script> (function(d, s, id) { var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js); }(document, "script", "EmbedSocialHashtagScript")); </script>
        </div>
    </div>
</div>

<div id="blog" class="page-section" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>Articles</h3>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="blog-item b1">
                    <div class="thumb">
                        <img src="img/blog_01.jpg" alt="">
                        <div class="text-content">
                            <h4>Delicious Food Served</h4>
                            <span>Posted: <em>George</em>  /  Date: <em>11 Aug 2017</em>  /  Category: <em>Design</em></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="blog-entries">
                        <div class="thumb">
                            <h4>Lorem Upsum</h4>
                            <div class="text-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique nisi at eleifend porta. Nulla velit quam, gravida non est vitae, auctor tincidunt metus. Etiam nec mollis est. Mauris in diam hendrerit, laoreet metus sed, malesuada lectus. Cras commodo aliquam lacus, ac vestibulum nulla bibendum nec. Donec mattis porta est id ornare. Quisque a neque ac neque ullamcorper malesuada. Proin ullamcorper sem sit amet dui tincidunt, consectetur vulputate eros pretium. Donec mattis nulla et orci pulvinar aliquam. Ut scelerisque, nisl lacinia elementum porttitor, libero ex luctus diam, sit amet hendrerit ipsum ex ut nulla. Ut eu feugiat massa. Nam sed tincidunt felis, et lacinia nisl.</p>

                                <!-- <div class="black-button"> -->
                                <a href="{{route('article_single')}}">Read More</a>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="blog-entries">
                        <div class="thumb">
                            <h4>Lorem Ipsum</h4>
                            <div class="text-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique nisi at eleifend porta. Nulla velit quam, gravida non est vitae, auctor tincidunt metus. Etiam nec mollis est. Mauris in diam hendrerit, laoreet metus sed, malesuada lectus. Cras commodo aliquam lacus, ac vestibulum nulla bibendum nec. Donec mattis porta est id ornare. Quisque a neque ac neque ullamcorper malesuada. Proin ullamcorper sem sit amet dui tincidunt, consectetur vulputate eros pretium. Donec mattis nulla et orci pulvinar aliquam. Ut scelerisque, nisl lacinia elementum porttitor, libero ex luctus diam, sit amet hendrerit ipsum ex ut nulla. Ut eu feugiat massa. Nam sed tincidunt felis, et lacinia nisl.</p>

                                <!-- <div class="black-button"> -->
                                <a href="{{route('article_single')}}">Read More</a>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="blog-entries">
                        <div class="thumb">
                            <h4>Lorem Ipsum</h4>
                            <div class="text-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique nisi at eleifend porta. Nulla velit quam, gravida non est vitae, auctor tincidunt metus. Etiam nec mollis est. Mauris in diam hendrerit, laoreet metus sed, malesuada lectus. Cras commodo aliquam lacus, ac vestibulum nulla bibendum nec. Donec mattis porta est id ornare. Quisque a neque ac neque ullamcorper malesuada. Proin ullamcorper sem sit amet dui tincidunt, consectetur vulputate eros pretium. Donec mattis nulla et orci pulvinar aliquam. Ut scelerisque, nisl lacinia elementum porttitor, libero ex luctus diam, sit amet hendrerit ipsum ex ut nulla. Ut eu feugiat massa. Nam sed tincidunt felis, et lacinia nisl.</p>

                                <!-- <div class="black-button"> -->
                                <a href="{{route('article_single')}}">Read More</a>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pop">
                  <span>✖</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis neque lacinia, porta nulla in, pellentesque ante. Vivamus in luctus mauris, non pharetra nibh. Morbi porttitor nisl sit amet velit pellentesque consequat. Etiam blandit libero turpis, id vehicula leo posuere a. In vel massa sollicitudin, tincidunt massa et, tincidunt ex.<br><br>Duis volutpat condimentum mollis. Sed eleifend libero ut viverra mattis. Suspendisse consectetur diam dolor, ut efficitur sem finibus vel. Vivamus tristique lacus sed dapibus varius. Fusce pharetra, quam quis congue pretium, ante dui imperdiet ipsum, eget lobortis leo leo sed diam.</p>
                </div>
                <div class="pop2">
                  <span>✖</span>
                  <p>Praesent purus leo, aliquet et efficitur id, pulvinar scelerisque enim. Maecenas a arcu sagittis, ornare ante ut, suscipit lectus. Donec dolor ipsum, laoreet nec metus non, tempus elementum massa. Donec non elit rhoncus, vestibulum enim sed, rutrum arcu. Vestibulum et purus ac diam condimentum volutpat sed ac est. Phasellus interdum tortor sem. Quisque sit amet condimentum sem. Phasellus luctus, felis sit amet pulvinar luctus, lectus dui mattis tellus, et placerat nunc ante at lacus.<br><br>Vivamus vestibulum, nisi sed placerat accumsan, felis felis venenatis tortor, vel condimentum arcu neque vel mauris. Donec a magna gravida, egestas libero non, molestie massa. Integer ut dolor eget magna congue gravida ut at arcu. Vivamus maximus neque quis luctus tempus. Vestibulum consequat a justo id feugiat. </p>
                </div>
                <div class="pop3">
                  <span>✖</span>
                  <p>Nullam rhoncus, orci et iaculis sodales, quam lectus suscipit augue, ut auctor massa dolor id metus. Nulla porta ut diam sodales dignissim. Ut sit amet augue vel justo laoreet dignissim. Maecenas vitae sollicitudin eros. In commodo placerat cursus. Quisque malesuada, nisl ac lacinia commodo, justo eros maximus ex, quis cursus odio erat at neque. Sed tincidunt eu dolor eget posuere.<br><br>Curabitur sit amet elit sit amet ligula eleifend aliquam quis eget quam. Mauris id mi nec justo venenatis tincidunt at ac massa. Sed et volutpat nunc. Quisque at urna quam. Duis sit amet neque eget quam iaculis iaculis. Quisque maximus porta elementum. Nam ac mattis erat, quis accumsan odio.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')