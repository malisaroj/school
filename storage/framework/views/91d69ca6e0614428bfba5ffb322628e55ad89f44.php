<?php $__env->startSection('content'); ?>
                <div id="page-main">
                    <section id="contact">
                        <header><h1>Contact Us</h1></header>
						
							<div align="center">
															</div>
                        <div class="row">
                            <div class="col-md-6" style="min-height: 306px;">
                                <address>
                                    <h3>Dibya Jyoti Secondary School</h3>
                                    <br>
                                    <span>Bungamati, 22 Lalitpur, Nepal</span>
                                    <br>
                                    <abbr title="Telephone">Mobile:</abbr> 01-5173123                                    <br>
                                    <abbr title="Email">Email:</abbr> <a href="mailto:dibyajyoti2048@gmail.com">
										dibyajyoti2048@gmail.com									</a>
                                </address>
                                <div class="icons">
									<a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a>
									<a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a>
									<a target="_blank" href="http://www.google.com/googleplus/"><i class="fa fa-google-plus"></i></a>
									<a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                                </div><!-- /.icons -->
                                <hr>
                                <p>
                                    Welcome to Dibya Jyoti Secondary School. Please provide your message with details below. We will communicate with you as soon as possible.  
                                </p>
                            </div>
                            <div class="col-md-6" style="min-height: 306px;">
                                <div class="map-wrapper">
									
								<div style="overflow:hidden;max-width:100%;width:350px;height:250px;"><div id="gmapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Dibya+Jyoti+English+School,+एकान्तकुना+मार्ग,+Karyabinayak,+Nepal&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemap-html" href="https://www.embed-map.com" id="get-mapdata">https://www.embed-map.com</a><style>#gmapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="contact-form" class="clearfix">
                        <header><h2>Send Us a Message</h2></header>
                        <form method="POST" action="http://www.gaghscsyl.edu.bd/edu/contact/en" enctype="multipart/form-data" id="quote_entry_forms">
                            <div class="row">
                                <div class="col-md-6" style="min-height: 74px;">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="name">Your Name</label>
                                            <input name="name" id="name" required="" type="text">
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-6" style="min-height: 74px;">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="email">Your Email</label>
                                            <input name="email" id="email" required="" type="email">
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="row">
								<div class="col-md-6" style="min-height: 113px;">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="email"> Subject </label>
                                            <input name="subject" id="name" required="" type="text">
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-6 -->
							
                                <div class="col-md-6" style="min-height: 113px;">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" id="message" required=""></textarea>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
																	<div class="row">
										<div class="col-md-6" style="min-height: 64px;">
											<label> Captcha : <span class="req">*</span> </label>
											<input id="captcha" name="captcha" class="form-control" required="required" type="text">
										</div>
										
										<div class="col-md-6" style="min-height: 64px;">
											<span style="margin-top:10px; float:left;">
												<img src="http://www.gaghscsyl.edu.bd/captcha/1543194060.9334.jpg" style="border:0;" alt=" " width="250" height="50">											</span>
										</div>
									</div>
								                            <div class="pull-right separator20">
                                <input class="btn btn-color-primary" id="submit" value="Send a Message" type="submit">
                            </div><!-- /.form-actions -->
                            <div id="form-status"></div>
                        </form><!-- /.footer-form -->
                    </section>
                </div><!-- /#page-main -->
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>