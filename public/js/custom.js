
$('#teamName').keyup(function(){
  if($('#teamName').val() == ""){
    $("#add_team_member").addClass('disabled');
  }
  else{
    $("#add_team_member").removeClass('disabled');
  }
  
});


$(".jury_mem_select_feild").change(function () {
    var maxAllowed = 3;
    var cnt = $(".jury_mem_select_feild:checked").length;
    if (cnt > maxAllowed) 
    {
      $(this).prop('checked', '');
      $('.jury_mem_select_feild:not(:checked)').prop('disabled', true);
      $('#msg_member_sel').fadeIn("slow");
      
    }
    else if(cnt < 3){
      $('.jury_mem_select_feild').prop('disabled', false);
      $('#msg_member_sel').fadeOut("slow");
    }
});


$(".Notification-br").fadeIn().delay(5000).fadeOut();



//ajax request for student request to other student

function req_std(userID){
  $.ajax({
      url: '/req_std_for_group',
      type: 'GET',
      data: { id: userID },
      success: function(response)
      {
        if(response == 'done'){
          $("#std_req_btn-"+userID).addClass("disabled");
          $("#std_req_btn-"+userID).text('Request Sent');
        }
      },
      error: function(response){
        console.log('Error'+response);
        }
  });
}