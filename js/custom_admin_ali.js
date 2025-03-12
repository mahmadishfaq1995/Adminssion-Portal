/*
 |--------------------------------------------------------------------------
 | login_view js
 |--------------------------------------------------------------------------
 |
 */
/*
 |--------------------------------------------------------------------------
 | login_view js
 |--------------------------------------------------------------------------
 |
 */

$(document).ready(function(){
            	
                $("#sign_out").click(function(){
                 $.ajax({
                        url: 'admin/logout',
                        method: 'POST',
                        data: {},
                        async: false,
                        success: function (data) {
                                window.location.replace("Login");
                        }
                });
                });
                 $("#verified").click(function(){
                      var result = {
                                  'cnic': $("#cnic").val(),
                                  'verify_type': $("#verify_type").val()};
                   
                 $.ajax({
                        url: 'verifychallan/verify_chalan',
                        method: 'POST',
                        data: result,
                        async: false,
                        success: function (data) {
							if(data =="done"){
								$("#status").text("Success!");
								$("#info").text("Challan has been verified");
								$("#bannere").show();
								$("#bannerd").hide();
							}else{
								$("#bannere").hide();
								$("#statusd").text("Error!");
								$("#infod").text(data);
								$("#bannerd").show();
							}
                        }
                });
                });
                $("#btn_suc").click(function(){
                    var result = {
                                  'register_id': $("#register_id").val(),
                                  'name': $("#edit_name").val(),
                                  'dob': $("#edit_dob").val(),
                                  'gender': $("#edit_gender").val(),
                                  'cnic': $("#edit_cnic").val(),
                                  'fname': $("#edit_fname").val(),
                                  'fcnic': $("#edit_fcnic").val(),
                                  'gname': $("#edit_gname").val(),
                                  'gcnic': $("#edit_gcnic").val(),
                                  'phoneno': $("#edit_phone").val(),
                                  'mobileno': $("#edit_mobile").val(),
                                  'email': $("#edit_email").val(),
                                  'address': $("#edit_address").val(),
                                  'myear': $("#year_matric").val(),
                                  'mroll': $("#rollno_matric").val(),
                                  'mgrade':$('#grade_matric').val(),
                                  'mtotal': $("#total_matric").val(),
                                  'mmarks': $("#marks_matric").val(),
                                  'mmajor': $("#major_matric").val(),
                                  'mboard': $("#board_matric").val(),
                                  'iyear1': $("#year_inter1").val(),
                                  'iroll1': $("#rollno_inter1").val(),
                                  'itotal1': $("#total_inter1").val(),
                                  'imarks1': $("#marks_inter1").val(),
                                  'igrade1':$('#grade_inter1').val(),
                                  'imajor1': $("#major_inter1").val(),
                                  'iboard1': $("#board_inter1").val(),
                                  'iyear2': $("#year_inter2").val(),
                                  'iroll2': $("#rollno_inter2").val(),
                                  'itotal2': $("#total_inter2").val(),
                                  'imarks2': $("#marks_inter2").val(),
                                  'igrade2':$('#grade_inter2').val(),
                                  'imajor2': $("#major_inter2").val(),
                                  'iboard2': $("#board_inter2").val()
                    };
                  //  console.log(result);
                   $.ajax({
                        url: 'adminforms1/save_edit_froms',
                        method: 'POST',
                        data: result,
                        async: false,
                        success: function (data) {
                            if(data == 'done')
                            {
                                location.reload();
                            }
                            else
                            {
                                alert("Error in Updation....!!!!");
                            }
                        }
                }); 
                });
                   $.ajax({
                        url: 'adminmail/get_messages',
                        method: 'POST',
                        data: {},
                        async: false,
                        success: function (data) {
                          $("#mail_body").html(data);
                        }
                });
                $.ajax({
                        url: 'Notification/update_notification',
                        method: 'POST',
                        data: {},
                        async: false,
                        success: function (data) {
                          $("#notification_body").html(data);
                        }
                });
                $.ajax({
                        url: 'Setting/admin_users',
                        method: 'POST',
                        data: {},
                        async: false,
                        success: function (data) {
                          $("#setting_body").html(data);
                        }
                });
                 $.ajax({
                        url: 'Setting/setting_profile',
                        method: 'POST',
                        data: {},
                        async: false,
                        success: function (data) {
                          $("#setting_profile").html(data);
                        }
                });
                $("#btn_notice_submit").click(function(){
                     var result = {
                                  'notice_id': $("#notice_idd").val(),
                                  'notice_desc': $("#notice_desc").val(),
                                  'notice_note': $("#notice_note").val(),
                                  'notice_link': $("#notice_link").val(),
                                  'notice_type': $("#notice_type").val(),
                                  'added_on': $("#notice_added").val(),
                                  'added_by': $("#notice_date").val()
                              };
                     $.ajax({
                            url: 'Notification/save_edit_notice',
                            method: 'POST',
                            data: result,
                            async: false,
                            success: function (data) {
                                location.reload();
                            }
                        });
                });
                
	var panels = $('.vote-results');
    var panelsButton = $('.dropdown-results');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('Hide Results');
            }
            else
            {
                currentButton.html('View Results');
            }
        })
    });	                                                                                                                                                 ;
                
});

/*
 |--------------------------------------------------------------------------
 | admission_form_view js
 |--------------------------------------------------------------------------
 |
 */
function Save_result()
{
    alert('li');
}
function more_options(id){
     $.ajax({
        url: 'adminforms1/more_options',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
          //data = '<a class="btn btn-md btn-primary" href="javascript:void(0)" title="Print" onclick="print_person(' +id+ ')"> <span class="fa fa-print"></span> Print Form </a>';
            //data += '<a class="btn btn-md btn-primary" href="javascript:void(0)" title="Print" onclick="print_person(' +id+ ')"> <span class="fa fa-print"></span> Print Form </a>';
            $("#btn_suc").hide();
            $("#m_head").html("<p style='font-weight:bold;'>More Options...</p>");
            $("#m_body").html(data);
            $('#myModal').modal('show');
        }
    });
            
}
function verify_challan(id){
    $.ajax({
        url: 'adminforms1/verify_challan',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
          
        }
    });
}
function marks_insert(id){
    $.ajax({
        url: 'adminforms1/marks_insert',
        method: 'POST',
        data: {'id': id,'marks':$("#test_marks").val()},
        async: false,
        success: function (data) {
          
        }
    });
}
function marks_update(id){
    $.ajax({
        url: 'adminforms1/marks_update',
        method: 'POST',
        data: {'id': id,'marks':$("#test_marks").val()},
        async: false,
        success: function (data) {
          
        }
    });
}
function view_person(id) {
    $.ajax({
        url: 'adminforms1/view_person',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            
            $("#btn_suc").hide();
            $("#m_head").html("<p style='font-weight:bold;'>User Info!!!</p>");
            $("#m_body").html(data);
            $('#myModal').modal('show');
        }
    });
}
function print_person(id)
{
    window.open('fprint/index1/'+id);
}
function edit_notice(id) {
    $.ajax({
        url: 'Notification/edit_notice',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            $("#btn_notice_submit").show();
            $("#m_head").html("<p style='font-weight:bold;'>Notification Info!!!</p>");
            $("#m_body").html(data);
            $('#myModal').modal('show');
        }
    });
}
function edit_admin(id) {
    $.ajax({
        url: 'Setting/edit_admin',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            $("#btn_notice_submit").show();
            $("#m_head").html("<p style='font-weight:bold;'>Edit Admin Info!!!</p>");
            $("#m_body").html(data);
            $("#btn_notice_submit").hide();
            $('#myModal').modal('show');
            
        }
    });
}
function read_mail(id) {
    $.ajax({
        url: 'adminmail/read_mail',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
          //  $("#btn_notice_submit").hide();
          //  $("#m_head").html("<p style='font-weight:bold;'>Email</p>");
         //   $("#m_body").html(data);
          //  $('#myModal').modal('show');
          data = data.split(':');
          $("#email").val(data[0]);
          $("#subject").val(data[1]);
            $('#contact').modal('show');
        }
    });
}
function delete_mail(id) {
    $.ajax({
        url: 'adminmail/delete_mail',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            location.reload();
        }
    });
}
function delete_notice(id) {
    $.ajax({
        url: 'Notification/delete_notice',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            location.reload();
        }
    });
}
function delete_admin(id) {
    $.ajax({
        url: 'Setting/delete_admin',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            location.reload();
        }
    });
}

function add_new_notice()
{
    var res="";
        res += "<table class='table table-bordered'>";
        res +="<tr>";
        res += "<th> Notice Description </th>";
        res += ' <td><input type="text" class="form-control"  id="notice_desc1"></td>';
        res +="</tr>";
        res +="<tr>";
        res += "<th> Notice Note </th>";
        res += ' <td><input type="text" class="form-control" id="notice_note1"></td>';
        res +="</tr>";
        res +="<tr>";
       res += "<th> Select PDF </th>";
       res += ' <td ><input type="file" class="form-control" id="notice_link1"></td>';
        res +="</tr>";
        res +="<tr>";
        res += "<th>  Notice Type </th>";
        res += "<td><select class='form-control' id='notice_type1' style='width:173px;'>";
        res += "<option value='news'> News </option>";
        res += "<option value='event'> Events </option>";
        res += "<option value='notice'> Notice </option>";
        res += "</select></td>";
        res +="</tr>";
        res +="</table>";
        res +="<br><input type='button' class='btn btn-default btn-block' onclick='save_new_notif();' value='Save'>";
        
        $("#btn_notice_submit").hide();
        $("#m_head").html("<p style='font-weight:bold;'> Add New Notification !!!</p>");
            $("#m_body").html(res);
            $('#myModal').modal('show');
}
function add_new_admin()
{
    var res="";
        res += "<table class='table table-bordered'>";
        res +="<tr>";
        res += "<th> Name </th>";
        res += ' <td><input type="text"  id="admin_name"></td>';
        res +="</tr>";
        res +="<tr>";
        res += "<th> Username </th>";
        res += ' <td><input type="text"  id="admin_username"></td>';
        res +="</tr>";
        res +="<tr>";
        res += "<th> Password </th>";
        res += ' <td><input type="text"  id="admin_pass"></td>';
        res +="</tr>";
        res +="<tr>";
       res += "<th> Email </th>";
       res += ' <td ><input type="text"  id="admin_email"></td>';
        res +="</tr>";
        res += "<th> Gender </th>";
       res += "<td><select id='admin_gender' style='width:173px;'>";
        res += "<option value='male'> Male </option>";
        res += "<option value='female'> Female </option>";
        res += "</select></td>";
        res +="</tr>";
        res +="<tr>";
        res += "<th> CNIC </th>";
        res += ' <td ><input type="text"  id="admin_address"></td>';
        res +="</tr>";
        res +="</table>";
        res +="<br><input type='button' class='btn btn-default btn-block' onclick='save_new_admin();' value='Save'>";
        
        $("#btn_notice_submit").hide();
        $("#m_head").html("<p style='font-weight:bold;'> Add New Admin !!!</p>");
            $("#m_body").html(res);
            $('#myModal').modal('show');
}
function save_new_admin()
{
    var result = {
        'admin_name': $("#admin_name").val(),
        'admin_username': $("#admin_username").val(),
        'admin_pass': $("#admin_pass").val(),
        'admin_email': $("#admin_email").val(),
        'admin_address': $("#admin_address").val(),
        'admin_gender': $("#admin_gender").val()
    };
    $.ajax({
        url: 'Setting/save_new_admin',
        method: 'POST',
        data: result,
        async: false,
        success: function (data) {
            location.reload();
        }
    });
}
function enter_result(id)
{
    $.ajax({
        url: 'adminresult/fetch_result',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            $('#m_body').html(data);
            $('#myModal').modal('show');
        }
    });
}
function save_results(id)
{
    var result = {
                'id':id,
                'marks_obtained': $("#marks_obtained").val(),
                'total_marks': $("#total_marks").val(),
                'result_status': $("#result_status").val(),
                'percentage': $("#result_percentage").val()
            };
     $.ajax({
        url: 'adminresult/save_result',
        method: 'POST',
        data: result,
        async: false,
        success: function (data) {
            location.reload();
        }
    });
}
function update_percent(){
      var key = window.event.charCode;
    key = String.fromCharCode(key);
     var obtained = $("#marks_obtained").val() + key;
     
     var total = $("#total_marks").val();
     var percent = (obtained*1.0/total)*100;
    console.log(obtained +'-'+ total +'-'+percent); 
    $('#result_percentage').val(percent);
    
}
function save_edit_admin(id)
{
    var result = {
        'id1':id,
        'admin_name1': $("#admin_name1").val(),
        'admin_username1': $("#admin_username1").val(),
        'admin_pass1': $("#admin_pass1").val(),
        'admin_email1': $("#admin_email1").val(),
        'admin_address1': $("#admin_address1").val()
    };
    $.ajax({
        url: 'Setting/save_edit_admin',
        method: 'POST',
        data: result,
        async: false,
        success: function (data) {
            location.reload();
        }
    });
}
function save_new_notif()
{
    var file_data = $('#notice_link1').prop('files')[0]; 
    var file_name="#";
    console.log(file_data);
    if(file_data)
    {
    file_name = file_data.name;
     var form_data = new FormData();                  
                    form_data.append('file', file_data);           
                    $.ajax({
                              url: 'Notification/store_pdf', // point to server-side PHP script 
                                dataType: 'text',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                                success: function(php_script_response){
                                   // alert(php_script_response); // display response from the PHP script, if any
                                }
                     });
     }
    var result = {
        'notice_desc': $("#notice_desc1").val(),
        'notice_note': $("#notice_note1").val(),
        'notice_link': file_name,
        'notice_type': $("#notice_type1").val()
    };
    $.ajax({
        url: 'Notification/save_new_notif',
        method: 'POST',
        data: result,
        async: false,
        success: function (data) {
            location.reload();
        }
    });
}
function edit_person(id) {
    $.ajax({
        url: 'adminforms1/edit_person',
        method: 'POST',
        data: {'id': id},
        async: false,
        success: function (data) {
            if(data != "Not Entered Acadamic Information yet.......")
               $("#btn_suc").show();
           else
                $("#btn_suc").hide();
        
            $("#m_head").html("<p style='font-weight:bold;'>Edit User Info!!!</p>");
            $("#m_body").html(data);
            $('#myModal').modal('show');
        }
    });
}

function Names(field) {
    var key = window.event.charCode;
    key = String.fromCharCode(key);
    if ((!key.match(/[a-z]/i) && key!=' ' && !key.match(/[A-Z]/i))){
		var index="#"+field;
	    $(index).show();
		event.returnValue = false;
    }
	else
	{
		var index="#"+field;
	  $(index).hide();	
	}
	
}
function Anything(field)
{
   var index="#"+field;
    $(index).hide(); 
}
function AlphaNumeric(field) {
    var key = window.event.charCode;
    key = String.fromCharCode(key);
    if ((!key.match(/[a-z]/i) && key!='_' && !key.match(/[0-9]/i))){
		var index="#"+field;
	        $(index).show();
		event.returnValue = false;
    }
	else
	{
		var index="#"+field;
	   $(index).hide();	
	}
	
}

function Numeric(field) {
    var key = window.event.charCode;
    key = String.fromCharCode(key);
    if (!key.match(/[0-9]/i)){
		var index="#"+field;
	    $(index).show();
		event.returnValue = false;
    }
	else
	{
		var index="#"+field;
	    $(index).hide();	
	}
	
}
function Names(field) {
    var key = window.event.charCode;
    key = String.fromCharCode(key);
    if ((!key.match(/[a-z]/i) && key!=' ' && !key.match(/[A-Z]/i))){
		var index="#"+field;
	    $(index).show();
		event.returnValue = false;
    }
	else
	{
		var index="#"+field;
	  $(index).hide();	
	}
	
}

function Alpha(field) {
    var key = window.event.charCode;
    key = String.fromCharCode(key);
    if ((!key.match(/[a-z]/i) && !key.match(/[A-Z]/i))){
      var index="#"+field;
	  $(index).show();
	  event.returnValue = false;
    }
	else
	{
		var index="#"+field;
	  $(index).hide();	
	}
	
}
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile_pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img_upload").change(function(){
        readURL(this);
    });