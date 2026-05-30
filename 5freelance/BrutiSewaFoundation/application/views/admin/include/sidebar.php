<?php
$currentURL = current_url();
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$menu = include('nav-bar.php');

$user = $this->db->get_where('tbl_admin',[
    'id'=>$this->session->userdata("id")
])->row();

$access = json_decode($user->access,true);

if($user->type == 1)
{
   $main = array_column($menu,'id');
   $inner = [];
   foreach($menu as $m)
   {
        if(!empty($m['sub'])){
            $inner[$m['id']] = array_column($m['sub'],'id'); 
        }else{
            $inner[$m['id']] = [];
        }
    }
}else{
    $main  = isset($access['main_access']) ? $access['main_access'] : [];
    $inner = isset($access['inner_access']) ? $access['inner_access'] : [];
}

?>
<sidebar id="sidebar" class="app-sidebar">
   <div data-scrollbar="true" data-height="100%">
      <ul class="nav">
         <li class="nav-profile">
            <div class="profile-img11">
               <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="<?=website_name ?>" style="width: 100%;height: 118px;">
            </div>
           
         </li>
         
         
         <li class="nav-divider"></li>
         <li class="nav-header">Admin Panel</li>

         <li class="<?php if($currentURL==base_url('admin/dashboard')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin/dashboard');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-gradient-purple text-white"></i></span>
               <span class="nav-text">Dashboard </span>
            </a>
         </li>


         <?php
         foreach($menu as $m){

             if(in_array($m['id'],$main))
             {
                 if(empty($m['sub'])){
                     $active = ($currentURL==base_url($m['url'])) ? 'active' : '';
                     echo '<li class="'.$active.'">
                             <a href="'.base_url($m['url']).'">
                             <span class="nav-icon"><i class="'.$m['icon'].'"></i></span>
                             <span class="nav-text">'.$m['title'].'</span>
                             </a>
                           </li>';
                 }
                 else
                 {
                     echo '<li class="has-sub">
                             <a href="#">
                             <span class="nav-icon"><i class="'.$m['icon'].'"></i></span>
                             <span class="nav-text">'.$m['title'].'</span>
                             <span class="nav-caret"><b class="caret"></b></span>
                             </a>
                          <ul class="nav-submenu">';

                     foreach($m['sub'] as $sub){
                         if(in_array($sub['id'], $inner[$m['id']])){ 

                             $active = ($currentURL==base_url($sub['url'])) ? 'active' : '';

                             echo '<li class="'.$active.'">
                                     <a href="'.base_url($sub['url']).'">
                                     <span class="nav-text">'.$sub['title'].'</span>
                                     </a>
                                   </li>';
                         }
                     }
                     echo '</ul></li>';
                 }
             }
         }

         ?>

         

      
         
       
         <li class="nav-divider"></li>
         <li class="">
            <a href="<?php echo base_url('admin/logout');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-gradient-purple text-white"></i></span>
               <span class="nav-text">Logout </span>
            </a>
         </li>
         <li class="nav-copyright">&copy; <?=date('Y'); ?> <?=website_name ?>.<br> All Right Reserved</li>
      </ul>
   </div>
</sidebar>