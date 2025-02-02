<div>
    <style>
        .scroll-top {
            position: fixed;
            right: 20px;
            bottom: 20px;
            cursor: pointer;
            background-color: #22ca46;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        .scroll-top:hover {
            background-color: #555;
        }
    </style>
    <button class="scroll-top"><i class="fas fa-arrow-circle-up"></i></button>
    <footer class="pt-2 pb-2" style="background:#22ca46 url({{ asset('web/assets/images/testimonial1.png') }}) no-repeat bottom fixed;">

        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-inner rounded p-3 px-4 d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0" style="color: #fff">© 2023 - <?= date('Y') ?> İş verən</p>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="@lang('web.facebook')" class="white border-0">
                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="@lang('web.telegram')" class="white border-0">
                                    <i class="fab fa-telegram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="@lang('web.instagram')" class="white border-0">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="@lang('web.linkedin')" class="white border-0">
                                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @include('web.layouts.modal.register',['roles'=>$roles])
    @include('web.layouts.modal.login')
    @yield('web.js')
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/plugin.js') }}"></script>
    <script src="{{ asset('web/assets/js/custom-nav.js') }}"></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'808baa248be903ac',t:'MTY5NTA2MTg3My4zOTUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/8370c0b3/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.querySelector('.scroll-top');

            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    </body>
    </html>

</div>
