<?php
/* super Admin */
$menu = [
    
    // ["id"=>0,"title"=>"Create Role","url"=>"admin_con/role/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],

    // ["id"=>1,"title"=>"Assign Role","url"=>"admin_con/tbl_admin/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],

    // ["id"=>2,"title"=>"Site Settings","url"=>"admin_con/site_setting/edit/1","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],

    // ["id"=>3,"title"=>"Slider","url"=>"admin_con/slider/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],

    // ["id"=>4,"title"=>"Testimonials","url"=>"admin_con/testimonials/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],

    ["id"=>4,"title"=>"Survey Projects","url"=>"admin_con/survey_projects/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],
    ["id"=>4,"title"=>"Survey Response","url"=>"admin_con/survey_responses/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],

    // ["id"=>5,"title"=>"Contact Us","url"=>"admin_con/contact/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]],
    
    
    // ["id"=>6,"title"=>"SEO","url"=>"#","icon"=>"fa fa-cog bg-gradient-orange text-white","sub"=>[
    //     ["id"=>3,"title"=>"Home","url"=>"admin_con/meta_tags/edit/24"],
    //     ["id"=>3,"title"=>"About Us","url"=>"admin_con/meta_tags/edit/26"],
    //     ["id"=>3,"title"=>"Services","url"=>"admin_con/meta_tags/edit/28"],
    //     ["id"=>3,"title"=>"Products","url"=>"admin_con/meta_tags/edit/34"],
    //     ["id"=>3,"title"=>"Blogs","url"=>"admin_con/meta_tags/edit/35"],
    //     ["id"=>3,"title"=>"Appointment","url"=>"admin_con/meta_tags/edit/36"],
    //     ["id"=>3,"title"=>"Contact Us","url"=>"admin_con/meta_tags/edit/37"]
    // ]],

    // ["id"=>7,"title"=>"Company Profile","url"=>"#","icon"=>"fa fa-cog bg-gradient-orange text-white","sub"=>[
    //     ["id"=>3,"title"=>"About Us","url"=>"admin_con/content/edit/1"],
    //     ["id"=>3,"title"=>"Privacy Policy","url"=>"admin_con/content/edit/2"],
    //     ["id"=>3,"title"=>"Terms & Conditions","url"=>"admin_con/content/edit/3"]
    // ]],
];


/*sub admin*/
if ($this->session->userdata('type') == 2) 
{
    $menu[] = ["id"=>11,"title"=>"My Orders","url"=>"admin_con/user_orders/listing","icon"=>"fa fa-cog bg-black text-white","sub"=>[]];
}

return $menu;








