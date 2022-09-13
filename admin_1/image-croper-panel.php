<?php include "includes/header.php"; ?>
<?php include "includes/menu-right.php"; ?> 

		<div class="panel-content">
			<div class="row">
				<div class="col-md-12">
					<div class="profile-sec">
						<div class="profile-banner-sec">
							<ul>
								<li>
									<input accept="image/*" type="file" name="file-1[]" id="file-1" class="new-img inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1"><i class="fa fa-picture-o"></i><span>Choose a file</span></label>
								</li>
								<li><a href="edit-profile.php" title=""><i class="fa fa-pencil"></i> Edit Profile</a></li>
							</ul>
							<img src="images/resource/banner.jpg" alt="" />
						</div>
						<div class="user-bar">
							<div class="user-thumb">
								<img src="images/resource/admin.jpg" alt="" />
							</div>
							<a title="" class="purple-skin"><i class="fa fa-heart-o"></i> Follow</a>
							<ul>
								<li>
									1,245
									<span>Followers</span>
								</li>
								<li>
									535
									<span>Projects</span>
								</li>
								<li>
									994
									<span>Following</span>
								</li>							
							</ul>
							<div class="notif">
								<span><img src="images/icon-bell.png" alt=""><i>3</i></span>
								<div class="noti-lst">
									<div class="noti-tp">
										<span>Notifications</span>
									</div>
									<div class="noti-bd">
										<ul>
											<li class="rd-noti"><a href="#" title=""><strong>Alexander</strong></a> Liked <a href="#" title="">Zebra Styling Of Activity Feed Items</a> with <a href="#" title="">Css3 I BP Triks.</a> <span>15 Min Ago</span> <i>Read</i></li>
											<li class="unrd-noti"><a href="#" title=""><strong>BuddyPress</strong> Using Dropbox To Host Your On WordPress Theme! BP-Tricks</a> <span>30 Min Ago</span> <i>Unread</i></li>
											<li class="unrd-noti"><a href="#" title=""><strong>BP-Tricks:</strong> Sharing BuddyPress Knowledge made eassy!</a> <span>12 Hours Ago</span> <i>Unread</i></li>
											<li class="unrd-noti"><a href="#" title=""><strong>Alexander</strong></a> Liked <a href="#" title="">Zebra Styling Of Activity Feed Items</a> with <a href="#" title="">Css3 I BP Triks.</a> <span>19 Hours Ago</span> <i>Unread</i></li>
										</ul>
									</div>
									<div class="noti-bt">
										<a href="#" title="">View All Notification</a>
									</div>
								</div>
							</div>
                            <div class="notif">
								<span><img src="images/icon-envelop.png" alt=""><i>3</i></span>
								<div class="noti-lst">
									<div class="noti-tp">
										<span>Notifications</span>
									</div>
									<div class="noti-bd">
										<ul>
											<li class="rd-noti"><a href="#" title=""><strong>Alexander</strong></a> Liked <a href="#" title="">Zebra Styling Of Activity Feed Items</a> with <a href="#" title="">Css3 I BP Triks.</a> <span>15 Min Ago</span> <i>Read</i></li>
											<li class="unrd-noti"><a href="#" title=""><strong>BuddyPress</strong> Using Dropbox To Host Your On WordPress Theme! BP-Tricks</a> <span>30 Min Ago</span> <i>Unread</i></li>
											<li class="unrd-noti"><a href="#" title=""><strong>BP-Tricks:</strong> Sharing BuddyPress Knowledge made eassy!</a> <span>12 Hours Ago</span> <i>Unread</i></li>
											<li class="unrd-noti"><a href="#" title=""><strong>Alexander</strong></a> Liked <a href="#" title="">Zebra Styling Of Activity Feed Items</a> with <a href="#" title="">Css3 I BP Triks.</a> <span>19 Hours Ago</span> <i>Unread</i></li>
										</ul>
									</div>
									<div class="noti-bt">
										<a href="#" title="">View All Notification</a>
									</div>
								</div>
							</div>
							<div class="social-btns">
								<ul>
									<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="profile-all">
							<div class="row">
								<div class="col-md-8">
									<div class="widget">
										<div class="add-content-form">
											<textarea placeholder=""></textarea>
											<div class="add-content">
												<ul>
													<li><a href="#" title=""><i class="fa fa-location-arrow"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-microphone"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-picture-o"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-cloud-upload"></i></a></li>
												</ul>
												<button type="submit" class="purple-skin">POST</button>
											</div>
										</div>
									</div>
									<div class="widget no-color">
										<div class="activity-feed">
											<ul class="fltrs-lst">
												<li class="selected"><a href="#" title="" data-filter="*">All Feeds</a></li>
												<li><a href="#" title="" data-filter=".fb-pst"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" title="" data-filter=".tw-pst"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" title="" data-filter=".fr-pst"><i class="fa fa-foursquare"></i></a></li>
												<li><a href="#" title="" data-filter=".glp-pst"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" title="" data-filter=".in-pst"><i class="fa fa-instagram"></i></a></li>
											</ul>
											<div class="widget-title">
												<h3>All Activity Feeds</h3>
												<span>Your last activity is posted 4 hours ago</span>
											</div>
											<ul class="activity-timeline masonry">
												<li class="fb-pst flt-itm">
													<span class="user-device"><i class="fa fa-facebook"></i></span>
													<div class="user-activity">
														<div class="who-post-this">
															<span><img src="images/resource/user.jpg" alt="" /></span>
															<div class="who-post-detail">
																<h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
																<span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span>
																<a href="#" title="" class="lnk">https://themeforest.net/item/electric-admin-panel-dashboard-angular-js-template/14879635</a>
																<div class="pst-shr-inf">
																	<i>2 minutes ago</i>
																	<div class="slct-whr-pst">
																		<span><i class="fa fa-lock"></i> Only Me</span>
																		<ul>
																			<li><i class="fa fa-lock"></i> Only Me</li>
																			<li><i class="fa fa-globe"></i> Public</li>
																			<li><i class="fa fa-users"></i> Friends</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<div class="post-content">
															<div class="pst-frmt">
																<a href="#" title=""><img src="images/resource/pst-big-img1.jpg" alt="" /></a>
																<div class="pst-inf">
																	<h2><a href="#" title="">Electric - Admin Panel Dashboard Angular JS Templete</a></h2>
																	<p>Exhibiting a cool and engaging layout, Electric Admin is an extraordinarily complete Angular JS template for an easier and more...</p>
																	<span>themeforest.net</span>
																</div>
															</div>
															<div class="cmnts-liks">
																<a href="#" title="" class="viw-prv-cmt">View Previous Comments</a>
																<a href="#" title="" class="lks">25 Likes</a>
																<a href="#" title="" class="cmts">30 Coments</a>
															</div>
														</div>
														<div class="comment-form">
															<ul class="comments-thread">
																<li>
																	<div class="comment">
																		<img class="comment-thumb" src="images/resource/comment1.jpg" alt="" />
																		<div class="comment-detail">
																			<h2><a href="#" title="">Alexander</a></h2>
																			<p>Exhibiting a cool and engaging layout.</p>
																			<ul class="cmnt-meta">
																				<li><a href="#" title="">Like</a></li>
																				<li><a href="#" title="">Reply</a></li>
																				<li class="cmt-tm">15 Min Ago</li>
																			</ul>
																			<div class="cmt-opt">
																				<i class="fa fa-angle-down"></i>
																				<ul>
																					<li><a href="#" title="">Delete</a></li>
																					<li><a href="#" title="">Edit</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="comment">
																		<img class="comment-thumb" src="images/resource/comment2.jpg" alt="" />
																		<div class="comment-detail">
																			<h2><a href="#" title="">Micheal Doe</a></h2>
																			<p>Exhibiting a cool and engaging layout.</p>
																			<ul class="cmnt-meta">
																				<li><a href="#" title="">Like</a></li>
																				<li><a href="#" title="">Reply</a></li>
																				<li class="cmt-tm">10 Min Ago</li>
																			</ul>
																			<div class="cmt-opt">
																				<i class="fa fa-angle-down"></i>
																				<ul>
																					<li><a href="#" title="">Delete</a></li>
																					<li><a href="#" title="">Edit</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																	<ul class="sub-comment">
																		<li>
																			<div class="comment">
																				<img class="comment-thumb" src="images/resource/comment3.jpg" alt="" />
																				<div class="comment-detail">
																					<h2><a href="#" title="">Edwards Hill</a></h2>
																					<p>Exhibiting a cool and engaging layout.</p>
																					<ul class="cmnt-meta">
																						<li><a href="#" title="">Like</a></li>
																						<li><a href="#" title="">Reply</a></li>
																						<li class="cmt-tm">15 Min Ago</li>
																					</ul>
																					<div class="cmt-opt">
																						<i class="fa fa-angle-down"></i>
																						<ul>
																							<li><a href="#" title="">Delete</a></li>
																							<li><a href="#" title="">Edit</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</li>
																<li>
																	<div class="comment">
																		<img class="comment-thumb" src="images/resource/comment4.jpg" alt="" />
																		<div class="comment-detail">
																			<h2><a href="#" title="">Robinson Baker</a></h2>
																			<p>Exhibiting a cool and engaging layout.</p>
																			<ul class="cmnt-meta">
																				<li><a href="#" title="">Like</a></li>
																				<li><a href="#" title="">Reply</a></li>
																				<li class="cmt-tm">10 Min Ago</li>
																			</ul>
																			<div class="cmt-opt">
																				<i class="fa fa-angle-down"></i>
																				<ul>
																					<li><a href="#" title="">Delete</a></li>
																					<li><a href="#" title="">Edit</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="comment">
																		<img class="comment-thumb" src="images/resource/comment5.jpg" alt="" />
																		<div class="comment-detail">
																			<h2><a href="#" title="">Lopez Perez</a></h2>
																			<p>Exhibiting a cool and engaging layout.</p>
																			<ul class="cmnt-meta">
																				<li><a href="#" title="">Like</a></li>
																				<li><a href="#" title="">Reply</a></li>
																				<li class="cmt-tm">10 Min Ago</li>
																			</ul>
																			<div class="cmt-opt">
																				<i class="fa fa-angle-down"></i>
																				<ul>
																					<li><a href="#" title="">Delete</a></li>
																					<li><a href="#" title="">Edit</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
															<form>
																<textarea placeholder="Add Commemts"></textarea>	
															</form>
															<span><i class="fa fa-thumbs-o-up"></i> Like</span>
															<span><i class="fa fa-comment-o"></i> Comments</span>
															<a href="#" title="" class="purple-skin">Send</a>
															<ul class="pst-rt">
																<li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-meh-face-emoticon"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-frown"></i></a></li>
															</ul>
														</div>
													</div>
												</li>
												<li class="tw-pst flt-itm">
													<span class="user-device"><i class="fa fa-twitter"></i></span>
													<div class="user-activity">
														<div class="who-post-this">
															<span><img src="images/resource/user.jpg" alt="" /></span>
															<div class="who-post-detail">
																<h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
																<span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span>
																<a href="#" title="" class="lnk">https://themeforest.net/item/electric-admin-panel-dashboard-angular-js-template/14879635</a>
																<a href="#" title="" class="lnk">https://themeforest.net/item/kraft-simple-portfolio-wordpress-theme/17515270</a>
																<a href="#" title="" class="lnk">https://themeforest.net/item/picstock-ultra-advanced-stock-media-php-template/14312683</a>
																<div class="pst-shr-inf">
																	<i>2 minutes ago</i>
																	<div class="slct-whr-pst">
																		<span><i class="fa fa-lock"></i> Only Me</span>
																		<ul>
																			<li><i class="fa fa-lock"></i> Only Me</li>
																			<li><i class="fa fa-globe"></i> Public</li>
																			<li><i class="fa fa-users"></i> Friends</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<div class="post-content">
															<div class="pst-carousel">
																<div class="pst-frmt">
																	<a href="#" title=""><img src="images/resource/pst-md-img1.jpg" alt="" /></a>
																	<div class="pst-inf">
																		<h2><a href="#" title="">Electric - Admin Panel Dashboard Angular JS Templete</a></h2>
																		<span>themeforest.net</span>
																	</div>
																</div>
																<div class="pst-frmt">
																	<a href="#" title=""><img src="images/resource/pst-md-img2.jpg" alt="" /></a>
																	<div class="pst-inf">
																		<h2><a href="#" title="">Kraft - Simple Prtfolio WordPress Theme</a></h2>
																		<span>themeforest.net</span>
																	</div>
																</div>
																<div class="pst-frmt">
																	<a href="#" title=""><img src="images/resource/pst-md-img3.jpg" alt="" /></a>
																	<div class="pst-inf">
																		<h2><a href="#" title="">PicStock- Ultra Advanced Stock Media php Template</a></h2>
																		<span>themeforest.net</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="comment-form">
															<form>
																<textarea placeholder="Add Commemts"></textarea>	
															</form>
															<span><i class="fa fa-thumbs-o-up"></i> Like</span>
															<span><i class="fa fa-comment-o"></i> Comments</span>
															<a href="#" title="" class="purple-skin">Send</a>
															<ul class="pst-rt">
																<li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-meh-face-emoticon"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-frown"></i></a></li>
															</ul>
														</div>
													</div>
												</li>
												<li class="tw-pst flt-itm">
													<span class="user-device"><i class="fa fa-twitter"></i></span>
													<div class="user-activity">
														<div class="who-post-this">
															<span><img src="images/resource/user.jpg" alt="" /></span>
															<div class="who-post-detail">
																<h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
																<span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span>
																<p>Exhibiting a cool and engaging layout, Electric Admin is an extraordinarily complete Angular JS template for an easier and more comprehensive backend & frontend management of a single or multiple projects. Its all-purpose framework is replete with active and energetic features, including 4+ dashboard styles...</p>
																<a href="#" title="" class="lnk">Read More</a>
																<ul class="hsh-tgs">
																	<li><a href="#" title=""># Facebook</a>,</li>
																	<li><a href="#" title=""># Health</a>,</li>
																	<li><a href="#" title=""># Beauty</a></li>
																</ul>
																<div class="pst-shr-inf">
																	<i>2 minutes ago</i>
																	<div class="slct-whr-pst">
																		<span><i class="fa fa-lock"></i> Only Me</span>
																		<ul>
																			<li><i class="fa fa-lock"></i> Only Me</li>
																			<li><i class="fa fa-globe"></i> Public</li>
																			<li><i class="fa fa-users"></i> Friends</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<div class="post-content no-pd">
															
														</div>
														<div class="comment-form">
															<form>
																<textarea placeholder="Add Commemts"></textarea>	
															</form>
															<span><i class="fa fa-thumbs-o-up"></i> Like</span>
															<span><i class="fa fa-comment-o"></i> Comments</span>
															<a href="#" title="" class="purple-skin">Send</a>
															<ul class="pst-rt">
																<li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-meh-face-emoticon"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-frown"></i></a></li>
															</ul>
														</div>
													</div>
												</li>
												<li class="fb-pst flt-itm">
													<span class="user-device"><i class="fa fa-facebook"></i></span>
													<div class="user-activity">
														<div class="who-post-this">
															<span><img src="images/resource/user.jpg" alt="" /></span>
															<div class="who-post-detail">
																<h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
																<span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span>
																<div class="pst-shr-inf">
																	<i>2 minutes ago</i>
																	<div class="slct-whr-pst">
																		<span><i class="fa fa-lock"></i> Only Me</span>
																		<ul>
																			<li><i class="fa fa-lock"></i> Only Me</li>
																			<li><i class="fa fa-globe"></i> Public</li>
																			<li><i class="fa fa-users"></i> Friends</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<div class="post-content">
															<div class="pst-img">
																<a href="#" title=""><img src="images/resource/pst-big-img2.jpg" alt=""></a>
															</div>
														</div>
														<div class="comment-form">
															<form>
																<textarea placeholder="Add Commemts"></textarea>	
															</form>
															<span><i class="fa fa-thumbs-o-up"></i> Like</span>
															<span><i class="fa fa-comment-o"></i> Comments</span>
															<a href="#" title="" class="purple-skin">Send</a>
															<ul class="pst-rt">
																<li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-meh-face-emoticon"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-frown"></i></a></li>
															</ul>
														</div>
													</div>
												</li>
												<li class="fr-pst flt-itm">
													<span class="user-device"><i class="fa fa-foursquare"></i></span>
													<div class="user-activity">
														<div class="who-post-this">
															<span><img src="images/resource/user.jpg" alt="" /></span>
															<div class="who-post-detail">
																<h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
																<span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span>
																<div class="pst-shr-inf">
																	<i>2 minutes ago</i>
																	<div class="slct-whr-pst">
																		<span><i class="fa fa-lock"></i> Only Me</span>
																		<ul>
																			<li><i class="fa fa-lock"></i> Only Me</li>
																			<li><i class="fa fa-globe"></i> Public</li>
																			<li><i class="fa fa-users"></i> Friends</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<div class="post-content">
															<div class="mrg15">
																<div class="row">
																	<div class="col-md-12">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-big-img2.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-md-img4.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-md-img5.jpg" alt=""></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="comment-form">
															<form>
																<textarea placeholder="Add Commemts"></textarea>	
															</form>
															<span><i class="fa fa-thumbs-o-up"></i> Like</span>
															<span><i class="fa fa-comment-o"></i> Comments</span>
															<a href="#" title="" class="purple-skin">Send</a>
															<ul class="pst-rt">
																<li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-meh-face-emoticon"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-frown"></i></a></li>
															</ul>
														</div>
													</div>
												</li>
												<li class="glp-pst flt-itm">
													<span class="user-device"><i class="fa fa-google-plus"></i></span>
													<div class="user-activity">
														<div class="who-post-this">
															<span><img src="images/resource/user.jpg" alt="" /></span>
															<div class="who-post-detail">
																<h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
																<span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span>
																<div class="pst-shr-inf">
																	<i>2 minutes ago</i>
																	<div class="slct-whr-pst">
																		<span><i class="fa fa-lock"></i> Only Me</span>
																		<ul>
																			<li><i class="fa fa-lock"></i> Only Me</li>
																			<li><i class="fa fa-globe"></i> Public</li>
																			<li><i class="fa fa-users"></i> Friends</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<div class="post-content">
															<div class="mrg15">
																<div class="row">
																	<div class="col-md-12">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-big-img2.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-sm-img1.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-sm-img2.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-sm-img3.jpg" alt=""></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="comment-form">
															<form>
																<textarea placeholder="Add Commemts"></textarea>	
															</form>
															<span><i class="fa fa-thumbs-o-up"></i> Like</span>
															<span><i class="fa fa-comment-o"></i> Comments</span>
															<a href="#" title="" class="purple-skin">Send</a>
															<ul class="pst-rt">
																<li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-meh-face-emoticon"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-frown"></i></a></li>
															</ul>
														</div>
													</div>
												</li>
												<li class="tw-pst flt-itm">
													<span class="user-device"><i class="fa fa-facebook"></i></span>
													<div class="user-activity">
														<div class="who-post-this">
															<span><img src="images/resource/user.jpg" alt="" /></span>
															<div class="who-post-detail">
																<h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
																<span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span>
																<p>Exhibiting a cool and <a href="#" title="">Engaging</a> layout, Electric Admin is an extraordinarily complete Angular JS template for an easier and more <a href="#" title="">Comprehensive</a> backend & frontend management of a single or multiple projects. Its all-purpose framework is replete with active and <a href="#" title="">Energetic</a> features, including 4+ dashboard styles...</p>
																<a href="#" title="" class="lnk">Read More</a>
																<ul class="hsh-tgs">
																	<li><a href="#" title=""># Facebook</a>,</li>
																	<li><a href="#" title=""># Health</a>,</li>
																	<li><a href="#" title=""># Beauty</a></li>
																</ul>
																<div class="pst-shr-inf">
																	<i>2 minutes ago</i>
																	<div class="slct-whr-pst">
																		<span><i class="fa fa-lock"></i> Only Me</span>
																		<ul>
																			<li><i class="fa fa-lock"></i> Only Me</li>
																			<li><i class="fa fa-globe"></i> Public</li>
																			<li><i class="fa fa-users"></i> Friends</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<div class="post-content">
															<div class="mrg15">
																<div class="row">
																	<div class="col-md-12">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-big-img2.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-sm-img1.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="pst-img">
																			<a href="#" title=""><img src="images/resource/pst-sm-img2.jpg" alt=""></a>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="pst-img mor-imgs">
																			<a href="#" title="" class="mor-cnt">4+</a>
																			<a href="#" title=""><img src="images/resource/pst-sm-img3.jpg" alt=""></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="comment-form">
															<form>
																<textarea placeholder="Add Commemts"></textarea>	
															</form>
															<span><i class="fa fa-thumbs-o-up"></i> Like</span>
															<span><i class="fa fa-comment-o"></i> Comments</span>
															<a href="#" title="" class="purple-skin">Send</a>
															<ul class="pst-rt">
																<li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-meh-face-emoticon"></i></a></li>
																<li><a href="#" title=""><i class="flaticon-frown"></i></a></li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</div><!-- Activity Feed -->
									</div>
									<div data-sidebar-bottom="sidebar2"></div>
								</div>
								<div class="col-md-4">
									<div data-sidebar-dummy="sidebar2"></div>
									<div class="sidebar" id="sidebar2">
										<div class="widget">
											<div class="our-clients-sec">
												<div class="widget-title">
													<h3>My Friends List</h3>
													<span>You have 522 Freinds</span>
												</div>
												<div id="searchDir"></div>
												<ul id="people-list" class="client-list">
													<li>
														<span class="user-status online red-skin">J</span>
														<div class="client-info">
															<h3><a href="#" title="">Jamed line</a></h3>
															<p>creative designer</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
													<li>
														<span class="user-status offline purple-skin">H</span>
														<div class="client-info">
															<h3><a href="#" title="">Hurisa joe</a></h3>
															<p>marketing</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
													<li>
														<span class="user-status away pink-skin">K</span>
														<div class="client-info">
															<h3><a href="#" title="">Komail set</a></h3>
															<p>supervisor</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
													<li>
														<span class="user-status away sky-skin">B</span>
														<div class="client-info">
															<h3><a href="#" title="">Bason Durel</a></h3>
															<p>web developer</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
													<li>
														<span class="user-status offline red-skin">D</span>
														<div class="client-info">
															<h3><a href="#" title="">Danzil Dare</a></h3>
															<p>software engineer</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
													<li>
														<span class="user-status online purple-skin">Z</span>
														<div class="client-info">
															<h3><a href="#" title="">Zubain Dui</a></h3>
															<p>road master</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
													<li>
														<span class="user-status online pink-skin">L</span>
														<div class="client-info">
															<h3><a href="#" title="">Lara Croft</a></h3>
															<p>content writer</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
													<li>
														<span class="user-status offline sky-skin">B</span>
														<div class="client-info">
															<h3><a href="#" title="">Bisman Dazy</a></h3>
															<p>blogger</p>
															<a href="#" title=""><i class="fa fa-comment-o"></i></a>
														</div>
													</li>
												</ul>
											</div><!-- Our Clients Sec -->
										</div><!-- Widget -->
									</div>
								</div>
							</div>
						</div>
					</div><!-- Profile Sec -->
				</div>
			</div>
		</div><!-- Panel Content -->

		<?php include "includes/footer.php"; ?>
	</div><!-- Panel Layout -->

	<div class="popup-wrp2 img-crp-pp">
		<div class="popup-innr" style="max-width: 685px;">
			<div class="scrl">
				<div class="img-crp">
					<h3>Creat Your Size</h3>
					<div class="imageBox">
						<div class="thumbBox"></div>
						<div class="spinner" style="display: none">Loading...</div>
					</div>
					<div class="action crp-btm">					
						<a href="#" title="" class="skp-crpng">Skip Croping</a>
						<input type="file" id="file" style="float:left; width: 250px">
						<input type="button" id="btnCrop" value="Done">
						<input type="button" id="btnZoomOut" value="-">
						<input type="button" id="btnZoomIn" value="+">
					</div>
					<div class="cropped">

					</div>
				</div><!-- Image Croper Panel -->
			</div>
		</div>
	</div>

	<!-- Vendor: Javascripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popperjs-bootstrap.js"></script>

	<!-- Our Website Javascripts -->
	<script src="js/apps.js"></script>
	<script src="js/isotope-int.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
	
	</script>
</body>
</php>
