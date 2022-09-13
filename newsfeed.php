<?php include "include/header-user.php"; ?>
<section>
    <div class="feature-photo">
        <figure><img src="images/resources/timeline-5.jpg" alt=""></figure>
        <!--<div class="add-btn">
				<span>1205 followers</span>
				<a href="#" title="" data-ripple="">Add Friend</a>
			</div>-->
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
                <input type="file" />
            </label>
        </form>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="images/resources/user-avatar.jpg" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input type="file" />
                                </label>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5>Daniel Barthelémy</h5>
                            </li>
                            <!--<li>
									<a class="active" href="#" title="" data-ripple="">NewsFeed</a>
									<a class="" href="timeline-photos.php" title="" data-ripple="">Photos</a>
									<a class="" href="timeline-videos.php" title="" data-ripple="">Videos</a>
									<a class="" href="timeline-friends.php" title="" data-ripple="">Friends</a>
									<a class="" href="timeline-groups.php" title="" data-ripple="">Groups</a>
									<a class="" href="about.php" title="" data-ripple="">about</a>
									<a class="" href="#" title="" data-ripple="">more</a>
								</li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- top area -->
<!--<div class="fixed-sidebar left">
		<div class="menu-left">
			<ul class="left-menu">
				<li><a href="newsfeed.php" title="Newsfeed Page" data-toggle="tooltip" data-placement="right"><i class="ti-magnet"></i></a></li>
				<li><a href="fav-page.php" title="favourit page" data-toggle="tooltip" data-placement="right"><i class="fa fa-star-o"></i></a></li>
				<li><a href="insights.php" title="Account Stats" data-toggle="tooltip" data-placement="right"><i class="ti-stats-up"></i></a></li>
				<li><a href="inbox.php" title="inbox" data-toggle="tooltip" data-placement="right"><i class="ti-import"></i></a></li>
				<li><a href="messages.php" title="Messages" data-toggle="tooltip" data-placement="right"><i class="ti-comment-alt"></i></a></li>
				<li><a href="edit-account-setting.php" title="Setting" data-toggle="tooltip" data-placement="right"><i class="ti-panel"></i></a></li>
				<li><a href="faq.php" title="Faq's" data-toggle="tooltip" data-placement="right"><i class="ti-light-bulb"></i></a></li>
				<li><a href="timeline-friends.php" title="Friends" data-toggle="tooltip" data-placement="right"><i class="ti-themify-favicon"></i></a></li>
				<li><a href="widgets.php" title="Widgets" data-toggle="tooltip" data-placement="right"><i class="ti-eraser"></i></a></li>
				<li><a href="notifications.php" title="Notification" data-toggle="tooltip" data-placement="right"><i class="ti-bookmark-alt"></i></a></li>
			</ul>
		</div>
	</div><!-- left sidebar menu -->
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title"></h4>
                                    <ul class="naves">
                                        <li>
                                            <i class="fa fa-newspaper-o"></i>
                                            <a href="newsfeed.php" title="">News feed</a>
                                        </li>
                                        <li>
                                            <i class="ti-mouse-alt"></i>
                                            <a href="#" title="">Top Leaders</a>
                                        </li>
                                        <li>
                                            <i class="ti-files"></i>
                                            <a href="#" title="">My Badges</a>
                                        </li>
                                        <li>
                                            <i class="ti-user"></i>
                                            <a href="#" title="">Social Network</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-level-up"></i>
                                            <a href="#" title="">My level</a>
                                        </li>
                                        <li>
                                            <i class="ti-video-camera"></i>
                                            <a href="#" title="">videos</a>
                                        </li>
                                        <li>
                                            <i class="ti-comments-smiley"></i>
                                            <a href="#" title="">Messages</a>
                                        </li>
                                        <li>
                                            <i class="ti-bell"></i>
                                            <a href="#" title="">Notifications</a>
                                        </li>
                                        <li>
                                            <i class="ti-share"></i>
                                            <a href="#" title="">People Nearby</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-bar-chart-o"></i>
                                            <a href="#" title="">insights</a>
                                        </li>
                                        <!--<li>
												<i class="ti-power-off"></i>
												<a href="#" title="">Logout</a>
											</li>-->
                                    </ul>
                                </div><!-- Shortcuts -->
                                <div class="widget">
                                    <h4 class="widget-title">Recent Activity Twitter</h4>
                                    <ul class="activitiez">
                                        <li>
                                            <div class="activity-meta">
                                                <i>10 hours Ago</i>
                                                <span><a href="#" title="">Commented on Video posted </a></span>
                                                <h6>by <a href="#">black demon.</a></h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>30 Days Ago</i>
                                                <span><a href="#" title="">Posted your status. “Hello guys, how are
                                                        you?”</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>2 Years Ago</i>
                                                <span><a href="#" title="">Share a video on her timeline.</a></span>
                                                <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- recent activites -->
                                <?php include "include/who-folloinwg.php"; ?>
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta new-pst">
                                <div class="new-postbox">
                                    <figure>
                                        <img src="images/resources/admin2.jpg" alt="">
                                    </figure>
                                    <div class="newpst-input">
                                        <form method="post">
                                            <textarea rows="2" placeholder="write something"></textarea>
                                            <div class="attachments">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-music"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-image"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-video-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <button type="submit">Post</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- add post new box -->
                            <div class="loadMore">
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img src="images/resources/friend-avatar10.jpg" alt="">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="time-line.php" title="">Daniel Barthelémy</a></ins>
                                                <span>published: june,2 2018 19:PM</span>
                                            </div>
                                            <div class="post-meta">
                                                <img src="images/resources/user-post.jpg" alt="">
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip"
                                                                title="Comments">
                                                                <i class="fa fa-comments-o"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                        <li class="social-media">
                                                            <div class="menu">
                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-html5"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-facebook"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-twitter"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-css3"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-instagram"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-dribbble"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="description">

                                                    <p>
                                                        World's most beautiful car in Curabitur <a href="#"
                                                            title="">#test drive booking !</a> the most beatuiful car
                                                        available in america and the saudia arabia, you can book your
                                                        test drive by our official website
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="coment-area">
                                            <ul class="we-comet">
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-1.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.php" title="">Daniel Barthelémy</a>
                                                            </h5>
                                                            <span>1 year ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this car is very
                                                            awesome for the youngster. please vote this car and like our
                                                            post</p>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/comet-2.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.php" title="">alexendre
                                                                            Chevalier</a></h5>
                                                                    <span>1 month ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>yes, really very awesome car i see the features of
                                                                    this car in the official website of <a href="#"
                                                                        title="">#Mercedes-Benz</a> and really impressed
                                                                    :-)</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/comet-3.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.php" title="">Olive
                                                                            Clermont</a></h5>
                                                                    <span>16 days ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>i like lexus cars, lexus cars are most beautiful with
                                                                    the awesome features, but this car is really
                                                                    outstanding than lexus</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-1.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.php" title="">Donald Delasalle</a>
                                                            </h5>
                                                            <span>1 week ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome for the youngster. please vote this video and
                                                            like our channel
                                                            <i class="em em-smiley"></i>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">more comments</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-1.jpg" alt="">
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="post">
                                                            <textarea placeholder="Post your comment"></textarea>
                                                            <div class="add-smiles">
                                                                <span class="em em-expressionless"
                                                                    title="add icon"></span>
                                                            </div>
                                                            <div class="smiles-bunch">
                                                                <i class="em em---1"></i>
                                                                <i class="em em-smiley"></i>
                                                                <i class="em em-anguished"></i>
                                                                <i class="em em-laughing"></i>
                                                                <i class="em em-angry"></i>
                                                                <i class="em em-astonished"></i>
                                                                <i class="em em-blush"></i>
                                                                <i class="em em-disappointed"></i>
                                                                <i class="em em-worried"></i>
                                                                <i class="em em-kissing_heart"></i>
                                                                <i class="em em-rage"></i>
                                                                <i class="em em-stuck_out_tongue"></i>
                                                            </div>
                                                            <button type="submit"></button>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img src="images/resources/nearly1.jpg" alt="">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="time-line.php" title="">Sara Boilait</a></ins>
                                                <span>published: june,2 2018 19:PM</span>
                                            </div>
                                            <div class="post-meta">
                                                <iframe width="" height="285"
                                                    src="https://www.youtube.com/embed/_-StQsHSTz0" frameborder="0"
                                                    allowfullscreen></iframe>
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip"
                                                                title="Comments">
                                                                <i class="fa fa-comments-o"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                        <li class="social-media">
                                                            <div class="menu">
                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-html5"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-facebook"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-twitter"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-css3"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-instagram"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-dribbble"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="description">

                                                    <p>
                                                        Lonely Cat Enjoying in Summer Curabitur <a href="#"
                                                            title="">#mypage</a> ullamcorper ultricies nisi. Nam eget
                                                        dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                                                        rhoncus, sem quam semper libero, sit amet adipiscing sem neque
                                                        sed ipsum. Nam quam nunc,
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="coment-area">
                                            <ul class="we-comet">
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-1.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.php" title="">Jason borne</a></h5>
                                                            <span>1 year ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome for the youngster. please vote this video and
                                                            like our channel</p>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-2.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.php" title="">Sophia</a></h5>
                                                            <span>1 week ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome for the youngster.
                                                            <i class="em em-smiley"></i>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">more comments</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-2.jpg" alt="">
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="post">
                                                            <textarea placeholder="Post your comment"></textarea>
                                                            <div class="add-smiles">
                                                                <span class="em em-expressionless"
                                                                    title="add icon"></span>
                                                            </div>
                                                            <div class="smiles-bunch">
                                                                <i class="em em---1"></i>
                                                                <i class="em em-smiley"></i>
                                                                <i class="em em-anguished"></i>
                                                                <i class="em em-laughing"></i>
                                                                <i class="em em-angry"></i>
                                                                <i class="em em-astonished"></i>
                                                                <i class="em em-blush"></i>
                                                                <i class="em em-disappointed"></i>
                                                                <i class="em em-worried"></i>
                                                                <i class="em em-kissing_heart"></i>
                                                                <i class="em em-rage"></i>
                                                                <i class="em em-stuck_out_tongue"></i>
                                                            </div>
                                                            <button type="submit"></button>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img src="images/resources/nearly6.jpg" alt="">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="time-line.php" title="">Sophia</a></ins>
                                                <span>published: january,5 2018 19:PM</span>
                                            </div>
                                            <div class="post-meta">
                                                <div class="post-map">
                                                    <div class="nearby-map">
                                                        <div id="map-canvas"></div>
                                                    </div>
                                                </div><!-- near by map -->
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip"
                                                                title="Comments">
                                                                <i class="fa fa-comments-o"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                        <li class="social-media">
                                                            <div class="menu">
                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-html5"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-facebook"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-twitter"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-css3"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-instagram"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-dribbble"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="description">

                                                    <p>
                                                        Curabitur Lonely Cat Enjoying in Summer <a href="#"
                                                            title="">#mypage</a> ullamcorper ultricies nisi. Nam eget
                                                        dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                                                        rhoncus, sem quam semper libero, sit amet adipiscing sem neque
                                                        sed ipsum. Nam quam nunc,
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="coment-area">
                                            <ul class="we-comet">
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-1.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.php" title="">Jason borne</a></h5>
                                                            <span>1 year ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome for the youngster. please vote this video and
                                                            like our channel</p>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-2.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.php" title="">Sophia</a></h5>
                                                            <span>1 week ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome for the youngster.
                                                            <i class="em em-smiley"></i>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">more comments</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-2.jpg" alt="">
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="post">
                                                            <textarea placeholder="Post your comment"></textarea>
                                                            <div class="add-smiles">
                                                                <span class="em em-expressionless"
                                                                    title="add icon"></span>
                                                            </div>
                                                            <div class="smiles-bunch">
                                                                <i class="em em---1"></i>
                                                                <i class="em em-smiley"></i>
                                                                <i class="em em-anguished"></i>
                                                                <i class="em em-laughing"></i>
                                                                <i class="em em-angry"></i>
                                                                <i class="em em-astonished"></i>
                                                                <i class="em em-blush"></i>
                                                                <i class="em em-disappointed"></i>
                                                                <i class="em em-worried"></i>
                                                                <i class="em em-kissing_heart"></i>
                                                                <i class="em em-rage"></i>
                                                                <i class="em em-stuck_out_tongue"></i>
                                                            </div>
                                                            <button type="submit"></button>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img alt="" src="images/resources/friend-avatar10.jpg">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a title="" href="time-line.php">Daniel Barthelémy</a></ins>
                                                <span>published: june,2 2018 19:PM</span>
                                            </div>
                                            <div class="description">

                                                <p>
                                                    Curabitur World's most beautiful car in <a title="" href="#">#test
                                                        drive booking !</a> the most beatuiful car available in america
                                                    and the saudia arabia, you can book your test drive by our official
                                                    website
                                                </p>
                                            </div>
                                            <div class="post-meta">
                                                <div class="linked-image align-left">
                                                    <a title="" href="#"><img alt=""
                                                            src="images/resources/page1.jpg"></a>
                                                </div>
                                                <div class="detail">
                                                    <span>Loren ipsum</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    </p>
                                                    <a title="" href="#">www.sample.com</a>
                                                </div>
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip"
                                                                title="Comments">
                                                                <i class="fa fa-comments-o"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                        <li class="social-media">
                                                            <div class="menu">
                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-html5"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-facebook"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-twitter"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-css3"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-instagram"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-dribbble"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Your LinkedIn page </h4>
                                    <div class="your-page">
                                        <figure>
                                            <a href="#" title=""><img src="images/resources/friend-avatar9.jpg"
                                                    alt=""></a>
                                        </figure>
                                        <div class="page-meta">
                                            <a href="#" title="" class="underline">My Linkendin page</a>
                                            <span><i class="ti-comment"></i><a href="#" title="">Messages
                                                    <em>9</em></a></span>
                                            <span><i class="ti-bell"></i><a href="#" title="">Notifications
                                                    <em>2</em></a></span>
                                        </div>
                                        <div class="page-likes">
                                            <ul class="nav nav-tabs likes-btn">
                                                <li class="nav-item"><a class="active" href="#link1"
                                                        data-toggle="tab">likes</a></li>
                                                <li class="nav-item"><a class="" href="#link2"
                                                        data-toggle="tab">views</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active fade show " id="link1">
                                                    <span><i class="ti-heart"></i>884</span>
                                                    <a href="#" title="weekly-likes">35 new likes on Linkedin this
                                                        week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-1.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-2.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="link2">
                                                    <span><i class="ti-eye"></i>440</span>
                                                    <a href="#" title="weekly-likes">440 new views this week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-1.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-2.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- page like widget -->
                                <div class="widget">
                                    <div class="banner medium-opacity bluesh">
                                        <!--<div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
											<div class="baner-top">
												<span><img alt="" src="images/book-icon.png"></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													create your own favourit page.
												</p>
												<span>like them all</span>
												<a data-ripple="" title="" href="#">start now!</a>
											</div>-->
                                    </div>
                                </div>
                                <?php include "include/social_network.php"; ?>
                            </aside>
                        </div><!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "include/footer-index.php"; ?>