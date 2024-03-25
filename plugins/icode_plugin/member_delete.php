<?php
//echo "member delete";
function member_delete(){
    echo "member delete";
    if(isset($_GET['id'])){
        global $wpdb;
        $table_name=$wpdb->prefix.'member_list';
        $i=$_GET['id'];
        $wpdb->delete(
            $table_name,
            array('id'=>$i)
        );
        echo "deleted";
    }
    echo get_site_url() .'/wp-admin/admin.php?page=member_List';
}


function apply_for_funding_delete(){
    echo "Member applied to funding delete";
    if(isset($_GET['id'])){
        global $wpdb;
        $table_name=$wpdb->prefix.'apply_for_funding';
        $i=$_GET['id'];
        $wpdb->delete(
            $table_name,
            array('id'=>$i)
        );
        echo "deleted";
    }
    echo get_site_url() .'/wp-admin/admin.php?page=apply_for_funding_list';
}
?>