  
<div class="cover_pic">
      <div class="div">
      <div class="dp"></div>
    <label id="user_name"><a href="profile.html" id="user_name_color"><?php echo "<tr>".$loggedname."</tr>" ?></a></label>  
      <!-- Static navbar -->
      <nav class="navbar navbar-default" id="nav-2">
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="li"><a href="profile.html"><i class="fa fa-heartbeat" id="icn"></i></a></li>
              <li class="li"><a href="about.html"><i class="fa fa-user" id="icn"></i></a></li>
              <li class="li"><a href="training.html"><i class="fa fa-group" id="icn"></i></a></li>
              <li class="li"><a href="training.html"><i class="fa fa-image" id="icn"></i></a></li>
              <li class="li"><a href="training.html"><i class="fa fa-cog" id="icn"></i></a></a></li>
            </ul>
          </div><!--/.nav-collapse -->
      </nav>
      <div class="container-fluid">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="row">
            <div class="intro">
              <i class="fa fa-user" id="intro"></i><label id="name">Intro</label><br>
              <table>
                <tr>
                  <td><i class="fa fa-briefcase" id="a"></i></td>
                  <td><label class="a"><?php echo $info['working_profile'] ?></label></td>
                </tr>
                <tr>
                  <td><i class="fa fa-briefcase" id="a"></i></td>
                  <td><label class="a"><?php echo $info['college'] ?></label></td>
                </tr>
                <tr>
                  <td><i class="fa fa-graduation-cap" id="a"></i></td>
                  <td><label class="a"><?php echo $info['highschool'] ?></label></td>
                </tr>
                <tr>
                  <td><i class="fa fa-heart" id="a"></i></td>
                  <td><label class="a">Joined on <?php echo $data['created_date'] ?></label></td>
                </tr>
              </table>
              <center><input type="text" name="links" id="link" placeholder="+ Add instagram, Websites and other links"></center>
            </div>
          </div>
        </div>
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <div class="row">
            <div class="compose">
                <?php echo form_open_multipart(base_url().'newsfeed/upload_file');?>
                  <input type="text" name="file_name" placeholder="what's on your mind?" id="mind">
                  <input type="file" name="myfile" value=""/ id="choose">
                  <button type="submit" class="btn btn-info" id="up">Post</button>
                </form>
            </div>
          </div>
          <div class="row">
             <?php if ($posts) { 
              foreach ($posts as $key => $pvalue) {  ?>
              <div class="post">
                  <div class="poto"></div>
                  <label id="person">
                    <?php echo "<tr>".$pvalue['name']."</tr>" ?>
                  </label><br>
                  <label id="date">
                    <?php echo "<tr>".$pvalue['upload_time']."</tr>" ?>
                  </label>
                <div class="area">
                  <label><?php echo $pvalue['image_name']; ?></label><br>
                  <img src="<?php echo base_url().$pvalue['path'].'/'.$pvalue['file_name']; ?>" style="height: 35vh; width: 80%;">
                </div> 
               <!-- <div id="like-div">
                  <button type="button" id="like-btn" onclick="like_post('<?php echo $pvalue['image_id']; ?>')"><i class="fa fa-thumbs-up" id="like"></i></button>
                  <button id="comment-btn"><i class="fa fa-comments" id="comment"></i></button>
                </div>-->
          </div>
           <div></div>
          
             <?php }} ?>
              </div> 
          </div> 
        </div>
      </div>
    </div>
    </div>
  </div>

  <script type="text/javascript" src="<?php echo base_url(); ?>/js/like.js"></script>
