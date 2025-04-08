<div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="nav-wrapper">
      <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f920325-5f920323" class="nav-content">

      <!-- left nav  -->

        <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f920326-5f920323" class="left-nav">
          <a href="index.html" aria-current="page" class="brand w-nav-brand w--current"><img src="images/vr-global.png" loading="lazy" width="48" sizes="113px" alt="" srcset="images/vr-global-p-500.png 500w, images/vr-global-p-800.png 800w, images/vr-global-p-1080.png 1080w, images/vr-global.png 1250w" class="image-2"></a>
          <nav role="navigation" class="nav-menu w-nav-menu">
            <div class="nav-menu-links">
              @foreach ($menus as $menu)
              
              @if($menu->subMenus->count() > 0)
                <div data-hover="false" data-delay="600" data-w-id="9eeafe36-a9e0-0ee4-ffe0-1dac5f92032e" class="dropdown w-dropdown">
                  <div class="dropdown-toggle w-dropdown-toggle">
                    <div class="nav-link">
                      <div>{{$menu->name}}</div>
                      <div data-is-ix2-target="1" class="dropdown-lottie" data-w-id="9eeafe36-a9e0-0ee4-ffe0-1dac5f920333" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62ebbe86fb26b63d79fe4757/62ebbe87fb26b65146fe47bc_Menu-dropdown.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="2" data-duration="0" data-ix2-initial-state="50"></div>
                    </div>
                  </div>
                  <nav class="dropdown-list w-dropdown-list">
                    <div class="dropdown-corner"></div>
                    <div class="dropdown-menu-wrapper">
                      <div class="dropdown-menu">
                        @foreach ($menu->subMenus as $submenu)
                        <a href="atpl-a.html" class="dropdown-link bottom w-inline-block">
                          <div>{{ $submenu->name }}</div>
                        </a>
                        @endforeach
                        
                      </div>
                    </div>
                  </nav>
                </div>
                @else
                <a href="about-us.html" class="nav-link w-inline-block">
                  <div>{{ $menu->name }}</div>
                </a>
                @endif
              
              @endforeach
              
             
              
            </div>
          </nav>
          <div class="navigation-cover left"></div>
        </div>

        <!-- right nav  -->
         
        <div class="right-nav">
          <div class="navigation-cover right"></div>
          <div class="navigation-social">
            <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f920367-5f920323" class="subtitle-2">Follow</div>
            <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f920369-5f920323" class="social-icon-wrapper">
              <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f92036a-5f920323" class="social-icon"></div>
              <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f92036b-5f920323" class="social-icon"></div>
              <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f92036c-5f920323" class="social-icon"></div>
            </div>
          </div>
          <a href="contact-us.html" id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f92036d-5f920323" class="nav-button w-inline-block">
            <div class="text-block-3">Contact Us</div>
            <div class="button-top-line">
              <div class="button-fill navigation"></div>
            </div>
            <div class="button-right-line">
              <div class="vertical-button-fill navigation"></div>
            </div>
            <div class="button-bottom-line">
              <div class="button-fill navigation"></div>
            </div>
            <div class="button-left-line">
              <div class="vertical-button-fill navigation"></div>
            </div>
          </a>
          <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f920378-5f920323" class="menu-button w-nav-button">
            <div class="menu-icon-wrapper"><img src="images/menu-324x242x.svg" loading="lazy" alt="" class="menu-icon"></div>
          </div>
        </div>
      </div>
      <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f92037b-5f920323" class="navigation-cover left"></div>
      <div id="w-node-_9eeafe36-a9e0-0ee4-ffe0-1dac5f92037c-5f920323" class="navigation-cover right"></div>
    </div>
  </div>