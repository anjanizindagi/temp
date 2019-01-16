 <script type="text/javascript">
   var base_url = '<?php echo base_url(); ?>';
</script> 
<div class="cover_pic">
      <div class="div">
      <div class="dp" id="profile_pic">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Edit</button>
        
      </div>
     <label id="user_name"><a href="profile.html" id="user_name_color"><?php echo "<tr>".$loggedname."</tr>" ?></a></label>
      <!-- Static navbar -->
      <nav class="navbar navbar-default" id="nav-2">
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="li"><a href="<?php echo base_url(); ?>template/timeline?>"><i class="fa fa-heartbeat" id="icn"></i></a></li>
              <li class="li"><a href="<?php echo base_url(); ?>template/userinfo?>"><i class="fa fa-user" id="icn"></i></a></li>
              <li class="li"><a href="<?php echo base_url(); ?>login?>"><i class="fa fa-cog?>" id="icn"></i></a></a></li>
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
             <?php if ($userposts) { 
              foreach ($userposts as $key => $pvalue) {  ?>
              <div class="post" id="image_div_id_<?php echo $key; ?>">
                  <div class="poto"></div>
                  <label id="person">
                    <?php echo "<tr>".$loggedname."</tr>" ?>
                  </label><br>
                  <label id="date">17 Aug at 05:26 pm</label>
                  <form method="post" action="<?php echo base_url(); ?>timeline/delete_img/<?php echo $key; ?>">
                    <input type="hidden" name="del_id" value="<?php echo $pvalue['image_id']; ?> ">
                    <button type="post" class="btn btn-danger" id="danger">DELETE</button>
                  </form>
                <div id="area">
                  <label><?php echo $pvalue['image_name']; ?></label><br>
                  <img src="<?php echo base_url().$pvalue['path'].'/'.$pvalue['file_name']; ?>" style="height: 35vh; width: 70%;">
                </div> 
          </div>
           
             <?php }} ?>
              </div> 
          </div> 
        </div>
      </div>
    </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
       
        <div class="modal-body">
           <form id="profile_form">
          <input type="file" name="myfile">
           </form>
        </div>
     
        <div class="modal-footer">

          <button type="button" name="submit" id="submit_profile" class="">Upload</button> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 


        
    <script type="text/javascript" src="<?php echo base_url(); ?>js/timeline.js"></script>  