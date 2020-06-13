@extends('layouts.default') @section('main_section')
@if (session()->has('post-msg') && session()->get('post-msg') == 1)
    <script>
        toastr.success('Your image has been posted', 'Success');
    </script> 
@endif

@if (session()->has('propic-msg') && session()->get('propic-msg') == 1)
    <script>
        toastr.success('Your profile has been updated', 'Success');
    </script> 
@endif

<section class="cover-sec">
    <img src="{{asset('connect/images/resources/cover-img.jpg')}}" alt="">
    <div class="add-pic-box">
        
    </div>
</section>
<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="main-left-sidebar">
                            <div class="user_profile">
                                <div class="user-pro-img">
                                    <img src="{{asset('connect/images/resources/users/original/'.$user->profile_image)}}" height="180px" width="180px" alt="">
                                    @if (session()->get('username')==$user->username)                                 
                                    <div class="add-dp" id="">
                                        <a class="post-jb active" href="#" title="">
                                            <label for="file"><i class="fas fa-camera"></i></label>
                                        </a>
                                        {{-- <input type=file class="img-upload-input-bs" editor="#img-upload-panel" target="#image" status="#status" passurl="" pshape="circle" w=300 h=300 size="{150,150}"/> --}}
                                        {{-- <label for="file"><i class="fas fa-camera"></i></label> --}}
                                    </div>
                                    @endif
                                <div class="post-popup job_post" id="profile">
                                    <div class="post-project">
                                        <h3>Update your profile picture</h3>
                                        <div class="post-project-fields">
                                            <form action="/profile/p1" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input id="file-input" type="file" name="profile_image">
                                                    </div>
                                                    <div id="preview"></div>
                                                    <div class="col-lg-12">
                                                        <ul>
                                                            <li><button class="active" type="submit" value="post">Update</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div><!--post-project-fields end-->
                                        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                                    </div><!--post-project end-->
                                </div>
                               
                            </div>
                                <!--user-pro-img end-->
                                <div class="user_pro_status">
                                    <ul class="flw-status">
                                        <li>
                                            <span>Followers</span>
                                            <b id="followers">{{$followers}}</b>
                                        </li>
                                        <li>

                                            <span>Following</span>
                                            <b>{{$following}}</b>
                                        </li>
                                    </ul>
                                </div>
                                
                                <!--user_pro_status end-->
                                <ul class="social_links">
                                    <li style="text-align: center"><a href="#" title="">Gallery</a></li>
                                    <li><a href="#" title=""><i class="fa fa-facebook-square"></i> Http://www.facebook.com/john...</a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i> Http://www.Twitter.com/john...</a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus-square"></i> Http://www.googleplus.com/john...</a></li>
                                    <li><a href="#" title=""><i class="fa fa-behance-square"></i> Http://www.behance.com/john...</a></li>
                                    <li><a href="#" title=""><i class="fa fa-pinterest"></i> Http://www.pinterest.com/john...</a></li>
                                    <li><a href="#" title=""><i class="fa fa-instagram"></i> Http://www.instagram.com/john...</a></li>
                                    <li><a href="#" title=""><i class="fa fa-youtube"></i> Http://www.youtube.com/john...</a></li>
                                </ul>
                            </div>
                            <!--user_profile end-->
                            <!--suggestions end-->
                        </div>
                        <!--main-left-sidebar end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="main-ws-sec">
                            <div class="user-tab-sec rewivew">
                                <h3>{{$user->name}}</h3>
                                <div class="star-descp">
                                    <span>{{$position}}</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                    @if (session()->get('userid')!=$user->id)
                                        @if ($isFollowing)
                                        <button id="follow_btn" class="btn btn-primary" style="background-color: #53d690; border: none;" onclick="follow({{$user->id}},{{session()->get('userid')}})">Unfollow</button>
                                         @else
                                        <button id="follow_btn" class="btn btn-primary" style="background-color: #53d690; border: none;" onclick="follow({{$user->id}},{{session()->get('userid')}})">Follow</button>
                                        @endif
                                    @endif
                                    
                                </div>
                                <!--star-descp end-->
                                {{-- <div class="tab-feed st2 settingjb">
                                    <ul>
                                        <li data-tab="feed-dd" class="active">
                                            <a href="#" title="">
                                                <img src="{{asset('connect/images/ic1.png')}}" alt="">
                                                <span>Feed</span>
                                            </a>
                                        </li>
                                        <li data-tab="info-dd">
                                            <a href="#" title="">
                                                <img src="{{asset('connect/images/ic2.png')}}" alt="">
                                                <span>Info</span>
                                            </a>
                                        </li>
                                        <li data-tab="saved-jobs">
                                            <a href="#" title="">
                                                <img src="{{asset('connect/images/ic4.png')}}" alt="">
                                                <span>Jobs</span>
                                            </a>
                                        </li>
                                        <li data-tab="my-bids">
                                            <a href="#" title="">
                                                <img src="{{asset('connect/images/ic5.png')}}" alt="">
                                                <span>Bids</span>
                                            </a>
                                        </li>
                                        <li data-tab="portfolio-dd">
                                            <a href="#" title="">
                                                <img src="{{asset('connect/images/ic3.png')}}" alt="">
                                                <span>Portfolio</span>
                                            </a>
                                        </li>
                                        <li data-tab="rewivewdata">
                                            <a href="#" title="">
                                                <img src="{{asset('connect/images/review.png')}}" alt="">
                                                <span>Reviews</span>
                                            </a>
                                        </li>
                                        <li data-tab="payment-dd">
                                            <a href="#" title="">
                                                <img src="{{asset('connect/images/ic6.png')}}" alt="">
                                                <span>Payment</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div> --}}
                                <!-- tab-feed end-->
                            </div>

                             <!-- Upload Image Start-->
                            @if (session()->get('userid')==$user->id)
                                <div class="post-topbar">
                                    <div class="user-picy">
                                    <img src="{{asset('connect/images/resources/users/original/'.$user->profile_image)}}" alt="">
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <li><a class="post_project active" href="#upload" title="">Upload an image</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-popup pst-pj" id="upload_test">
                                    <div class="post-project">
                                        <h3>Upload your image</h3>
                                        <div class="post-project-fields">
                                        <form action="{{url()->to('post')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <input type="hidden" name="user_id" value="{{session()->get('userid')}}">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="text" name="caption" placeholder="Your caption here" required>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input type="file" name="post_image" required>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <ul>
                                                            <li><button class="active" type="submit" value="post">Post</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!--post-project-fields end-->
                                        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                                    </div><!--post-project end-->
                                </div> 
                            @endif
                            <!-- Upload Image End-->

                            <!-- Post Start-->
                            @foreach ($posts as $post)
                                @if (session()->get('userid')==$user->id)
                                    <div class="product-feed-tab current" id="feed-dd">
                                        <div class="posts-section">
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img  src="{{asset('connect/images/resources/users/original/'.$user->profile_image)}}" height="30px" width="30px" alt="">
                                                        <div class="usy-name">
                                                            <h3>{{$user->name}}</h3>   <?php $dt = $post->created_at  ?>
                                                            <span><img src="{{asset('connect/images/clock.png')}}" alt="">{{$dt->diffForHumans()}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <input id="post_id" type="hidden" value="{{$post->id}}">
                                                            <li><button id="btn_edit" type="button" class="btn btn-link" style="color: black">Edit post</button></li>
                                                            @if ($post->status == 0)
                                                            <li><button id="{{$post->id}}" type="button" class="btn btn-link" style="color: black" onclick="hide({{$post->id}})">Public</button></li>
                                                           @else
                                                            <li><button id="{{$post->id}}" type="button" class="btn btn-link" style="color: black" onclick="hide({{$post->id}})">Private</button></li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="{{asset('connect/images/icon8.png')}}" alt=""><span>{{$position}}</span></li>
                                                        <li><img src="{{asset('connect/images/icon9.png')}}" alt=""><span>Dreamweaver</span></li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp" >
                                                {{-- work --}}
                                                <span class='zoom' id='ex{{$post->id}}'>
                                                <img src="{{asset('connect/images/resources/users/original/posts/'.$post->image)}}" alt="{{$post->caption}}">
                                                </span>
                                            </div>
                                                <div class="job-status-bar">
                                                    <label for="">{{$post->caption}}</label>
                                                </div>
                                            </div>
                                            <!--post-bar end-->
                                            <!--process-comm end-->
                                        </div>
                                        <!--posts-section end-->
                                    </div>
                                @else
                                @if ($post->status==1)
                                <div class="product-feed-tab current" id="feed-dd">
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{asset('connect/images/resources/users/original/'.$user->profile_image)}}" height="30px" width="30px" alt="">
                                                    <div class="usy-name">
                                                        <h3>{{$user->name}}</h3>

                                                        <span><img  src="{{asset('connect/images/clock.png')}}" alt=""></span>
                                                    </div>
                                                </div>
                                                {{-- <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="{{asset('connect/images/icon8.png')}}" alt=""><span>{{$position}}</span></li>
                                                    <li><img src="{{asset('connect/images/icon9.png')}}" alt=""><span>Dreamweaver</span></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <span class='zoom' id='ex{{$post->id}}'>
                                                    <img src="{{asset('connect/images/resources/users/original/posts/'.$post->image)}}" alt="">
                                                </span>
                                            </div>
                                            <div class="job-status-bar">
                                                <label for="">{{$post->caption}}</label>
                                            </div>
                                        </div>
                                        <!--post-bar end-->
                                        <!--process-comm end-->
                                    </div>
                                    <!--posts-section end-->
                                </div>
                            @endif
                                @endif       
                            @endforeach
                            <!-- Post End-->
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="suggestions full-width">
                            @if (session()->get('username')==$user->username)
                            <div class="sd-title">
                                    <h3>Options</h3>
                                </div>
                                <!--sd-title end-->
                                <div class="suggestions-list">
                                    <div class="suggestion-usd">
                                        <div class="sgt-text">
                                           <a href="#"><h3>Request for a company</h3></a> 
                                        </div>
                                    </div>    
                                </div>
                          
                        
                            @endif
                            <!--suggestions-list end-->
                        </div>
                        <!--widget-portfolio end-->
                    </div>
                    <!--right-sidebar end-->
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

@endsection
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="{{asset('connect/toastr.js')}}"></script>
<script src='{{asset('connect/jquery.zoom.js')}}'></script>	
@foreach ($posts as $post)
<script>
    $(document).ready(function(){
        $('#ex{{$post->id}}').zoom({ on:'click' });
    });
</script>
@endforeach

{{-- <script type="text/javascript" src="{{asset('connect/js/jquery.min.js')}}"></script> --}}
<script type="text/javascript" src="{{asset('connect/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/scrollbar.js')}}"></script>

<script type="text/javascript" src="{{asset('connect/js/script.js')}}"></script>




<script type="text/javascript" src="{{asset('connect/vue.js')}}"></script>

<script>
    $(document).ready(function(){
        var post_id = $('#post_id')
        $("#btn_hide").click(function(){
            $.ajax({
                //type: "POST",
                url: "http://127.0.0.1:8000/api/post/2",
                dataType : "json",
                success: function(data)
                {
                    console.log(data.hide);
                }
            });

        });
    });
</script>

<script>
        window.onload = function(){
        function previewImages() {
            var preview = document.querySelector('#preview');
            if (this.files) {
            [].forEach.call(this.files, readAndPreview);
            }
            function readAndPreview(file) {
    // Make sure `file.name` matches our extensions criteria
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    return alert(file.name + " is not an image");
                } // else... 
            var reader = new FileReader();
            reader.addEventListener("load", function() {
                var image = new Image();
                image.height = 100;
                image.title  = file.name;
                image.src    = this.result;
                preview.appendChild(image);
            });
                reader.readAsDataURL(file);
            }
        }
        document.querySelector('#file-input').addEventListener("change", previewImages);
    }
</script>

<script>
    function hide(id){
        console.log(id);
        $.ajax({
                type: "GET",
                url: "http://127.0.0.1:8000/api/post/"+id,
                dataType : "json",
                success: function(data)
                {
                    if(data.hide == 0){
                        $('#'+id).html('Public');
                    }
                    else{
                        $('#'+id).html('Private');
                    }
                   
                }
            }); 

    } 
</script>

<script>
    function follow(following_id, user_id){
        console.log(following_id, user_id);
        $.ajax({
                type: "GET",
                url: "http://127.0.0.1:8000/api/follow/"+following_id+"/"+user_id,
                dataType : "json",
                success: function(data)
                {

                    console.log('Follower ' + data.followers);
                    if(data.follow == 1){
                        $('#follow_btn').text('Unfollow');
                    }
                    else{
                        $('#follow_btn').html('Follow');
                    }
                    $('#followers').text(''+data.followers); 
                   
                }
            }); 

    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modal.style.display = "none";
    }
</script>



</body>
</html>
