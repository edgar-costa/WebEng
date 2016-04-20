function getSingleBlog(post_id){
   
  
    var data = {
	'action' : 'wordpress_query_blog',
	'post_type': 'post',
        'id' : post_id,
    };
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
    $.post(ajaxUrl, data, changeHTML(response), 'text');
    alert("ie");
    
    
}


function changeHTML(response){
    alert("ie");
    document.getElementById("parent").innerHTML = response;

}
