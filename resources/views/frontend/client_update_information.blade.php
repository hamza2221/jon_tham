
@extends('layouts.frontend_layout')
@section('title','My Account | - Webqom Technologies')
@section('page_header','My Account')
@section('content')

<div class="clearfix"></div>


<!-- end page title -->

<div class="clearfix"></div>
<div class="clearfix margin_bottom5"></div>

 <div class="one_full stcode_title9">
    	<h1 class="caps"><strong>Update Account Details</strong>    	</h1>
    </div>

<div class="clearfix"></div>


<div class="content_fullwidth">

    <div class="container">
    
    	<div class="one_fourth_less">
        
        	<h4 id="scroll_here">Client Area</h4>
             <ul class="list-group">
            	<li class="list-group-item"><h5 class="white">Quick Links</h5></li>
                <li class="list-group-item"><a href="{{url('/dashboard')}}"><i class="fa fa-caret-right"></i> Dashboard</a></li>
                <li class="list-group-item alt"><h5>Products/Services</h5></li>
                <li class="list-group-item"><a href="services_my_services.html"><i class="fa fa-caret-right"></i> My Services Listing</a></li>
                
                <li class="list-group-item alt"><h5>Orders</h5></li>
                <li class="list-group-item"><a href="order_history_list.html"><i class="fa fa-caret-right"></i> My Order History</a></li>
                
                <li class="list-group-item alt"><h5>Domains</h5></li>
                <li class="list-group-item"><a href="domain_my_domains.html"><i class="fa fa-caret-right"></i> My Domains</a></li>
                <li class="list-group-item"><a href="domain_domain_renewal.html"><i class="fa fa-caret-right"></i> Renew Domains</a></li>
                <li class="list-group-item"><a href="domain_register_new_login.html"><i class="fa fa-caret-right"></i> Register a New Domain</a></li>
                <li class="list-group-item"><a href="domain_transfer_login.html"><i class="fa fa-caret-right"></i> Transfer Domains to Us</a></li>
                <li class="list-group-item"><a href="domain_search_login.html"><i class="fa fa-caret-right"></i> Domain Search</a></li>
                
                <li class="list-group-item alt"><h5>Billing</h5></li>
                <li class="list-group-item"><a href="billing_my_invoices.html"><i class="fa fa-caret-right"></i> My Invoices</a></li>
                <li class="list-group-item"><a href="billing_my_quotes.html"><i class="fa fa-caret-right"></i> My Quotes</a></li>
                <li class="list-group-item"><a href="billing_mass_payment.html"><i class="fa fa-caret-right"></i> Make Payment / Mass Payment</a></li>
                <li class="list-group-item alt"><h5>Support</h5></li>
                <li class="list-group-item"><a href="support_my_support_tickets.html"><i class="fa fa-caret-right"></i> My Support Tickets</a></li>
                <li class="list-group-item"><a href="support_open_new_ticket.html"><i class="fa fa-caret-right"></i> Open New Ticket</a></li>
                
                <li class="list-group-item alt"><h5>My Account</h5></li>
                <li class="list-group-item"><a href="account_edit.html"><i class="fa fa-caret-right"></i> Edit Account Details</a></li>
                <li class="list-group-item"><a href="account_edit.html#tab-2"><i class="fa fa-caret-right"></i> Change Password</a></li>
  
             </ul>
        
        </div><!-- end one fourth less -->

    	<div class="three_fourth_less last">
                  
           <ul class="tabs clearfix">
            <li class="animate" data-anim-type="fadeInUp" data-anim-delay="100"><a href="#tab-1" target="_self"><i class="fa icon-pencil"></i>My Details</a></li>
            <li class="animate" data-anim-type="fadeInUp" data-anim-delay="200"><a href="#tab-2" target="_self"><i class="fa icon-lock"></i>Change Password</a></li>
            <!--<li class="animate" data-anim-type="fadeInUp" data-anim-delay="400"><a href="#tab-4" target="_self"><i class="fa icon-envelope-open"></i>Email History</a></li>-->
           </ul>

        <div class="tabs-content" >
        
            <div id="tab-1" class="tabs-panel">
             
                <h3>My Details</h3>
                
                <div  class="one_third_less">
                    <h4>Account Type:</h4>
                    <div class="text-16px light sitecolor">{{$user->account_type}}</div>
                    
                </div>
                
                <div class="one_third_less">
                	<h4>Client ID:</h4>
                    <div class="text-16px light sitecolor">{{$user->client->client_id}}</div>
                </div>
                
                
                <div class="clearfix"></div>
                
                
                note to programmer: if client select to be a "business account" then the company field is mandatory. For individual account company field is optional.
                <div class="clearfix"></div>
          	 	<div class="divider_line7"></div>
           		<div class="clearfix"></div>
    
                <div class="cforms alileft">
                <div style="display:none" id="msg_success" class="alert alert-success alert-dismissable">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                    <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                    <p>Account information updated successfully</p>
                </div>
 
                    <div id="form_status"></div>
                    <form  type="POST" id="frm_update_info" ">
                                                
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <!-- business account / business partner account start -->
                        <div class="one_half_less">
                        
                        	<label><b>First Name</b> <em>*</em></label>
                            <input type="text" name="first_name" id="firstname" value="{{$user->first_name}}">
                            <div id="err_fname" class="red"></div>
                            <label><b>Last Name</b> <em>*</em></label>
                            <input type="text" name="last_name" id="lastname" value="{{$user->last_name}}">
                            <div id="err_lname" class="red"></div>
                            <label><b>Company</b> <em>(* Mandatory for Business Account)</em></label>
                            <input type="text" name="company" id="company" value="{{$user->company}}">   
                            <div id="err_company" class="red"></div>
                            <label><b>Email Address</b> <em>*</em></label>
                            <input type="text" name="email" id="name" placeholder="mail@yourdomain.com" value="{{$user->email}}">
                            <div id="err_email" class="red"></div>
                            <label><b>Phone</b> <em>*</em></label>
                            <input type="text" name="phone_number" id="phone" value="{{$user->phone_number}}">
                            <div id="err_phone" class="red"></div>
                            <label><b>Mobile Phone</b> <em>*</em></label>
                            <input type="text" name="mobile_phone_number" id="mobile_phone" value="{{$user->mobile_number}}">  
                            <div id="err_mobile" class="red"></div>    
                                 
                        </div><!-- end one half less -->
                        
                        <div class="one_half_less last">
                                           
                            <label><b>Address</b> <em>*</em></label>
                            <input type="text" name="address_1" id="address" value="{{$user->address1}}">
                            <div id="err_address1" class="red"></div>
                            <label><b>Address 2 </b></label>
                            <input type="text" name="address_2" id="{{$user->address2}}"> 
                            <div id="err_address2" class="red"></div>
                            <label><b>Country</b> <em>*</em></label>
                            <select name="country" class="form-control countries" id="country">
                                    <option value=''>-- Please select --</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}" @if($user->country_id==$country->id) selected @endif>{{$country->name}}</option>
                                    @endforeach
                            </select>
                            <div id="err_country" class="red"></div>

                            <label><b>State</b> <em>*</em></label>
                            <select name="state" class="states form-control" id="state">
                                    <option value=''>-- Please select --</option>
                            </select>
                            <div id="err_state" class="red"></div>
                            <label><b>City </b> <em>*</em></label>
                            <select name="city" class="cities form-control" id="city">
                                    <option value=''>-- Please select --</option>
                            </select>
                            <div id="err_city" class="red"></div>

                            <label><b>Postal Code</b> <em>*</em></label>
                            <input type="text" name="postal_code" id="postal_code" value="{{$user->postal_code}}"> 
                            <div id="err_postal_code" class="red"></div>
                            
                        
                        </div><!-- end one half last -->
                         
                        <!-- end business account / business partner account -->
                        
                        <div class="clearfix"></div>
                        <div class="divider_line7"></div>
                        <div class="clearfix"></div>
                        
                        <div class="checkbox">

                            <input class="one" name="news_letter" type="checkbox" @if($user->news_letter==1)checked="checked" @endif> <span class="onelb">Yes! I would like to subscribe to your newsletter.</span>
                            <div class="clearfix"></div>
                        </div>

                        
                        <div class="clearfix"></div>
                        
                    </form>	 
                    
                </div>
                   
                <div class="clearfix"></div>
                <div class="divider_line7"></div>
                <div class="clearfix"></div>
                
           		<div class="alicent">
                	
                    <button type="button" id="submit_frm_update" class="btn btn-danger caps"><i class="fa fa-save"></i> <b>Save Changes</b></button>&nbsp;
                	<a href="#" class="btn btn-primary caps"><i class="fa fa-ban"></i> <b>Cancel</b></a>&nbsp
                </div>
                
                <div class="clearfix margin_top3"></div>

     
            </div><!-- end tab 1 -->
            
            <div id="tab-2" class="tabs-panel">
                         
                <h3>Change Password</h3>
                
                <p class="text-18px dark light">Password must be at least 12 characters. The combination of the password must be alphanumeric with one special character <span class="sitecolor">(eg. ! @ # $ % ^ & * ( ) _ + { } | : < > ? " \ [ ] ' ; / . ~ `)</span></p>
                <div class="clearfix margin_bottom1"></div>
                <div  id="msg_success_cp" style="display:none" class="alert alert-success alert-dismissable">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                    <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                    <p>Account password updated successfully</p>
                </div>
                <div class="cforms alileft">
 
                    <div id="form_status"></div>
                    <form type="POST" id="frm_change_password">
                        {{csrf_field()}}
                    	<div class="one_half_less">
                        	
                            <label><b>Existing Password</b> <em>*</em></label>
                            <input type="password" name="current_password" id="oldpassword"> 
                            <div class="red" id="err_current_password"></div>
                            
                            <label><b>New Password</b> <em>*</em></label>
                            <input type="password" name="password" id="password">
                            <div class="red" id="err_new_password"></div>
                            <label><b>Password Strength</b></label>
                            <div class="pro_bar">
                                <div class="col-md-6">
                                  <div data-hover="tooltip" data-placement="top"  class="progress progress-striped active">
                                    <div id="progress_bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" class=" ">
                                        <span class="sr-only" ></span>
                                        <span class="progress-completed" id="progress_bar_text"></span>
                                    </div>
                                  </div>
                                </div>
                            </div> 
                            <div class="clearfix margin_bottom1"></div>
                            
                            <label><b>Confirm New Password</b> <em>*</em></label>
                            <input type="password" name="password_confirmation" id="cpassword">
                            <div class="red" id="err_confirm_password"></div>
                        </div><!-- end one half less -->
                        <input type="hidden" name="strength" value="strength" id="strength">
                    </form>
                    
                </div><!-- end cforms left -->
                
                
                <div class="clearfix"></div>
          	 	<div class="divider_line7"></div>
           		<div class="clearfix"></div>
           		<div class="alicent">
                	<button id="submit_frm_chnage_pass" class="btn btn-danger caps"><i class="fa fa-save"></i> <b>Save Changes</b></button>&nbsp;
                	<a href="#" class="btn btn-primary caps"><i class="fa fa-ban"></i> <b>Cancel</b></a>&nbsp
                </div>
                
                <div class="clearfix margin_top3"></div>
                            
            </div><!-- end tab 2 -->
            
            
    	</div><!-- end all tabs -->
           
           
       
       
       </div><!-- end section -->
        
        

        
	</div>  
    <!-- end container -->  
    
    
    <div class="clearfix"></div>
    
    
</div><!-- end content full width -->

<div class="clearfix"></div>
@endsection
@section('custom_scripts')
    <script type="text/javascript">
        $(document).on('change', '#country', function(event) {
                    var country_id=$( "#country option:selected" ).val();
                    $("#state").html("<option value=''>-- Please select --</option>");
                    $("#city").html("<option value=''>-- Please select --</option>");
                    $.ajax({
                        url: base_url+'/get_state/'+country_id,
                        type: 'GET',
                        dataType: ' json',
                    })
                    .done(function(response) {
                        for (var i=0; i < response.length; i++) {
                            $("#state").append(
                                $("<option>" , {
                                    text: response[i].name,
                                    value:  response[i].id
                                })
                            )
                        }
                    })
                    .fail(function() {
                    })
                    .always(function() {
                    });
                    
                });
                $(document).on('change', '#state', function(event) {
                    var state_id=$( "#state option:selected" ).val();
                    $("#city").html("<option value=''>-- Please select --</option>");
                    $.ajax({
                        url: base_url+'/get_city/'+state_id,
                        type: 'GET',
                        dataType: ' json',
                    })
                    .done(function(response) {
                        for (var i=0; i < response.length; i++) {
                            $("#city").append(
                                $("<option>" , {
                                    text: response[i].name,
                                    value:  response[i].id
                                })
                            )
                        }
                    })
                    .fail(function() {
                    })
                    .always(function() {
                    });
                    
                });
        function get_state(){
            var country_id=$( "#country option:selected" ).val();
                    $("#state").html("<option value=''>-- Please select --</option>");
                    $("#city").html("<option value=''>-- Please select --</option>");
                    $.ajax({
                        url: base_url+'/get_state/'+country_id,
                        type: 'GET',
                        dataType: ' json',
                    })
                    .done(function(response) {
                        var state_selected="";
                        for (var i=0; i < response.length; i++) {
                            if (response[i].id=='{{$user->state_id}}') {
                                    $("#state").append(
                                        $("<option>" , {
                                            text: response[i].name,
                                            value:  response[i].id,
                                            selected:  ""
                                        })
                                    )
                                }else{
                                        $("#state").append(
                                        $("<option>" , {
                                            text: response[i].name,
                                            value:  response[i].id,
                                        })
                                    )
                                }
                            
                        }
                        var state_id=$( "#state option:selected" ).val();
                        $("#city").html("<option value=''>-- Please select --</option>");
                        $.ajax({
                            url: base_url+'/get_city/'+state_id,
                            type: 'GET',
                            dataType: ' json',
                        })
                        .done(function(response) {
                            var city_selected="";
                            for (var i=0; i < response.length; i++) {
                                if (response[i].id=='{{$user->city_id}}') {
                                    $("#city").append(
                                        $("<option>" , {
                                            text: response[i].name,
                                            value:  response[i].id,
                                            selected:  ""
                                        })
                                    )
                                }else{
                                    $("#city").append(
                                        $("<option>" , {
                                            text: response[i].name,
                                            value:  response[i].id,
                                        })
                                    )
                                }

                                
                            }
                        })
                        .fail(function() {
                        })
                        .always(function() {
                        });
                    })
                    .fail(function() {
                    })
                    .always(function() {
                    });
                    
        }    
        get_state();
        $(document).on('submit','#frm_update_info', function(event) {
            event.preventDefault();
            $.ajax({
                url: base_url+'/clients/update',
                type: 'POST',
                data: $('#frm_update_info').serialize(),
            })
            .done(function(response) {
                $('html, body').animate({
                        scrollTop: $("#scroll_here").offset().top
                    }, 1000);
                $('#msg_success').fadeIn('slow', function() {
                    setTimeout(function() {
                        $('#msg_success').fadeOut('slow');
                    }, 8000);
                });

            })
            .fail(function(response) {
                console.log(response);
                $("#err_fname").html(response.responseJSON.first_name);
                $("#err_lname").html(response.responseJSON.last_name);
                $("#err_company").html(response.responseJSON.company);
                $("#err_phone").html(response.responseJSON.phone_number);
                $("#err_mobile").html(response.responseJSON.mobile_phone_number);
                $("#err_email").html(response.responseJSON.email);
                $("#err_address1").html(response.responseJSON.address1);
                $("#err_address2").html(response.responseJSON.address2);
                $("#err_postal_code").html(response.responseJSON.postal_code);
                $("#err_country").html(response.responseJSON.country);
                $("#err_state").html(response.responseJSON.state);
                $("#err_city").html(response.responseJSON.city);
            })
            .always(function() {
                console.log("complete");
            });
            
        });
        $(document).on('click', '#submit_frm_update', function(event) {
            $("#err_fname").html("");
            $("#err_lname").html("");
            $("#err_company").html("");
            $("#err_email").html("");
            $("#err_mobile").html("");
            $("#err_phone").html("");
            $("#err_address1").html("");
            $("#err_address2").html("");
                $("#err_postal_code").html("");
                $("#err_country").html("");
                $("#err_state").html("");
                $("#err_city").html("");
            $('#frm_update_info').submit();
        }); 
         $(document).on('click', '#submit_frm_chnage_pass', function(event) {
            $('#frm_change_password').submit();
        }); 
        $(document).on('submit', '#frm_change_password', function(event) {
            $('#err_current_password').html("");
            $('#err_new_password').html("");
            $('#err_confirm_password').html("");
            event.preventDefault();
            $.ajax({
              url: base_url+'/change_password',
              type: 'POST',
              data: $('#frm_change_password').serialize(),
            })

            .done(function() {
              $(':input','#frm_change_password')
                 .not(':button, :submit, :reset, :hidden')
                 .val('')
                 .removeAttr('checked')
                 .removeAttr('selected');    
              $('#msg_success_cp').fadeIn('slow', function() {
                  setTimeout(function() {
                    $('#msg_success_cp').fadeOut('slow')
                  }, 5000);
              });
              strenght=0;
                      $('#progress_bar').removeClass();
                       $('#progress_bar').addClass('progress-bar progress-bar-danger');
                       $('#progress_bar').css('width', strenght+"%");
                       $('#progress_bar_text').html( "");
                       $(':input','#frm_change_password')
                 .not(':button, :submit, :reset, :hidden')
                 .val('')
                 .removeAttr('checked')
                 .removeAttr('selected'); 
            })
            .fail(function(response) {
              console.log(response);
              $('#err_current_password').html(response.responseJSON.current_password);
              $('#err_new_password').html(response.responseJSON.password);
              $('#err_confirm_password').html(response.responseJSON.confirm_password);
            })
            .always(function() {
              console.log("complete");
            });
            


          });
        $(document).on('keyup change', '#password', function(event) {
                    var password = $(this).val();
                    console.log("length: "+password);

                    strenght=0;
                    if (password.length==0) {
                       strenght=0;

                       $('#progress_bar').removeClass();
                       $('#progress_bar').addClass('progress-bar progress-bar-danger');
                       $('#progress_bar').css('width', strenght+"%");
                       $('#progress_bar_text').html( strenght+"%");
                      console.log("zero"+strenght);
                    }
                    else if (password.length>0 && password.length<6) {
                       strenght=10;
                       $('#progress_bar').removeClass();
                       $('#progress_bar').addClass('progress-bar progress-bar-danger');
                       $('#progress_bar').css('width', strenght+"%");
                       $('#progress_bar_text').html( strenght+"% Week");
                      console.log("weak"+strenght);
                    }
                    else if (password.length>=6) {
                      strenght=50;
                      $('#progress_bar').removeClass();
                       $('#progress_bar').addClass('progress-bar progress-bar-warning');
                       $('#progress_bar').css('width', strenght+"%");
                       $('#progress_bar_text').html( strenght+"% Moderate");
                      console.log("medium"+strenght);
                      if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)){  
                          strenght=100;
                          $('#strength').val(100);
                          $('#progress_bar').removeClass();
                            $('#progress_bar').addClass('progress-bar progress-bar-success');
                            $('#progress_bar').css('width', strenght+"%");
                            $('#progress_bar_text').html( strenght+"% Strong");
                            console.log("strong"+strenght);
                      }
                    }
                    $('#strength').val(strenght);
                });
    </script>
@endsection