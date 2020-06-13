<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
            <a href="index.html" title=""><img src="{{asset('connect/images/logo.png')}}" alt=""></a>
            </div><!--logo end-->
            <div class="search-bar">
                <form>
                    <input id="search_btn" type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div><!--search-bar end-->
            <nav>
                <ul>
                    <li>
                    <a href="{{url()->to('/')}}" title="">
                            <span><img src="{{asset('connect/images/icon1.png')}}" alt=""></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{url()->to('company')}}" title="">
                            <span><img src="{{asset('connect/images/icon2.png')}}" alt=""></span>
                            Companies
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="{{url()->to('profile/'.session()->get('username'))}}" title="">
                            <span><img src="{{asset('connect/images/icon4.png')}}" alt=""></span>
                            My Profile
                        </a>
                       
                    </li>
                   
                    <li>
                        <a href="#" title="" class="not-box-openm">
                            <span><img src="{{asset('connect/images/icon6.png')}}" alt=""></span>
                            Messages
                        </a>
                        <div class="notification-box msg" id="message">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                <a href="#" title="">Clear all</a>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                      <div class="noty-user-img">
                                          <img src="{{asset('connect/images/resources/ny-img1.png')}}" alt="">
                                      </div>
                                      <div class="notification-info">
                                          <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                          <span>2 min ago</span>
                                      </div><!--notification-info -->
                                  </div>
                                
                                  <div class="view-all-nots">
                                      <a href="messages.html" title="">View All Messsages</a>
                                  </div>
                            </div><!--nott-list end-->
                        </div><!--notification-box end-->
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                        <span><img src="{{asset('connect/images/icon7.png')}}" alt=""></span>
                            Notification
                        </a>
                        <div class="notification-box noti" id="notification">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                <a href="#" title="">Clear all</a>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                      <div class="noty-user-img">
                                          <img src="{{asset('connect/images/resources/ny-img1.png')}}" alt="">
                                      </div>
                                      <div class="notification-info">
                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                          <span>2 min ago</span>
                                      </div><!--notification-info -->
                                  </div>
                                  
                                  <div class="view-all-nots">
                                      <a href="#" title="">View All Notification</a>
                                  </div>
                            </div><!--nott-list end-->
                        </div><!--notification-box end-->
                    </li>
                </ul>
            </nav><!--nav end-->
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div><!--menu-btn end-->
            <div class="user-account">
                <div class="user-info">
                <img src="{{asset('connect/images/resources/users/original/'.session()->get('userimg'))}}" height="30px" width="30px" alt="">
                <a href="#"></a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss" id="users">
                   
                    <h3>Settings</h3>
                    <ul class="us-links">
                        <li><a href="#" title="">Account Setting</a></li>
                        <li><a href="#" title="">Privacy</a></li>
                        <li><a href="#" title="">Faqs</a></li>
                        <li><a href="#" title="">Terms & Conditions</a></li>
                    </ul>
                <h3 class="tc"><a href="{{url()->to('logout')}}" title="">Logout</a></h3>
                </div><!--user-account-settingss end-->
            </div>
        </div><!--header-data end-->
    </div>
</header><!--header end-->	