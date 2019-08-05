<div class="col-lg-9 main-chart">
                  
                    <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_heart"></span>
                                <p></p>
                                <h3><?php 
                                  $sql = "SELECT * from tbl_order";
                                  $rs = $this->db->query($sql);
                                  echo $rs->num_rows();
                                 ?>
                                </h3>
                            </div>
                                <p><?php echo $rs->num_rows(); ?> Jumlah Order</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_cloud"></span>
                                <h3>
                                  <?php 
                                  $sql = "SELECT * from tbl_member";
                                  $rs = $this->db->query($sql);
                                  echo $rs->num_rows();
                                 ?>
                                </h3>
                            </div>
                                <p><?php echo $rs->num_rows(); ?> Jumlah Member</p>

                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>
                                  <?php 
                                  $sql = "SELECT * from tbl_cart";
                                  $rs = $this->db->query($sql);
                                  echo $rs->num_rows();
                                 ?>
                                </h3>
                            </div>
                                <p><?php echo $rs->num_rows(); ?> Jumlah Keranjang</p>

                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_news"></span>
                                 <h3>
                                  <?php 
                                  $sql = "SELECT * from tbl_barang";
                                  $rs = $this->db->query($sql);
                                  echo $rs->num_rows();
                                 ?>
                                </h3>
                            </div>
                                <p><?php echo $rs->num_rows(); ?> Jumlah Barang</p>

                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_data"></span>
                                <h3>OK!</h3>
                            </div>
                                <p>Your server is working perfectly. Relax & enjoy.</p>
                        </div>
                    
                    </div><!-- /row mt -->  
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                        <div class="col-md-4 col-sm-4 mb">
                            <div class="white-panel pn donut-chart">
                                <div class="white-header">
                                    <h5>SERVER LOAD</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 goleft">
                                        <p><i class="fa fa-database"></i> 70%</p>
                                    </div>
                                </div>
                                <canvas id="serverstatus01" height="120" width="120"></canvas>
                                <script>
                                    var doughnutData = [
                                            {
                                                value: 70,
                                                color:"#68dff0"
                                            },
                                            {
                                                value : 30,
                                                color : "#fdfdfd"
                                            }
                                        ];
                                        var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                </script>
                            </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        

                        <div class="col-md-4 col-sm-4 mb">
                            <div class="white-panel pn">
                                <div class="white-header">
                                    <h1>TOP PRODUCT</h1>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 goleft">
                                        <p><i class="fa fa-heart"></i> 122</p>
                                    </div>
                                    <div class="col-sm-6 col-xs-6"></div>
                                </div>
                                <div class="centered">
                                        <img src="assets/img/batik.png" width="120">
                                </div>
                            </div>
                        </div><!-- /col-md-4 -->
                        
                        <div class="col-md-4 mb">
                            <!-- WHITE PANEL - TOP USER -->
                            <div class="white-panel pn">
                                <div class="white-header">
                                    <h1>TOP USER</h1>
                                </div>
                                <p><img src="assets/img/ktp_male.png" class="img-circle" width="80"></p>
                                <p><b>Zac Snider</b></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="small mt">MEMBER SINCE</p>
                                        <p>2012</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="small mt">TOTAL SPEND</p>
                                        <p>$ 47,60</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /col-md-4 -->
                        

                    </div><!-- /row -->
                    
                                    
                    <div class="row">
                       
                        
                        
                        <div class="col-md-4 mb">
                            <!-- INSTAGRAM PANEL -->
                              
                        </div><!-- /col-md-4 -->
                        
                        <div class="col-md-4 col-sm-4 mb">
                            <!-- REVENUE PANEL -->
                           
                        </div><!-- /col-md-4 -->
                        
                    </div><!-- /row -->
                    
                    <div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>VISITS</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
                    </div><!-- /row --> 
                    
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                        <h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted></muted><br/>
                               <a href="#"></a> <br/>
                            </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                     
                       <!-- USERS ONLINE SECTION -->
                       
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
