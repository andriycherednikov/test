$(document).ready(function(){
  
});

function change_tag(id)
{
    $("#image_tag_"+id).hide(1000);
    $("#image_tag_change_"+id).show(1000);
}
function change_tag_ajax(id)
{
  var data = $('#image_tag_change_'+id+' :input').serialize();
  $.ajax({
    type: "POST",
    url: $('#change_tag_url').val(),
    data: data,
    success: function(responce){ 
                    var tag =  jQuery.parseJSON(responce);
                    $("#tag_"+id).text(tag.tag);
                    $("#image_tag_"+id).show(1000);
                    $("#image_tag_change_"+id).hide(1000);                
                    
    }
    
  });
}