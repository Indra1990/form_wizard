<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
</head>
<style>
   
    body{ 
            margin-top:40px; 
        }
    
        .stepwizard-step p {
            margin-top: 10px;
        }
    
        .stepwizard-row {
            display: table-row;
        }
    
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
    
        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }
    
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
    
        }
    
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
    
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
</style>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box-body form-horizontal">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a  type="button" class="btn btn-primary btn-circle" disabled id="btn1">1</a>
                                <p>Step 1</p>
                            </div>
                            <div class="stepwizard-step">
                                <a type="button" class="btn btn-default btn-circle" disabled id="btn2">2</a>
                                <p>Step 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="first_name" placeholder="first name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="last_name" placeholder="last name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" id="email" placeholder="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" id="password" placeholder="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="re_password" id="re_password" placeholder="confirm password" class="form-control" required>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <div class="checkbox"><label><input type="checkbox" id="term" >Term & Condition</label></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <button class="btn btn-primary  btn-sm pull-right btn1" onclick="next1()" disabled type="button" >Next</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2" >
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <form >
                                    <div id="header_address">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea name="address_1" class="form-control" id="address_1" cols="30" rows="5"></textarea>  
                                            </div>
                                            <div class="col-sm-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <small><button  type="button" class="btn btn-xs btn-primary" id="add_address">+ Other Address</button></small>
                                            <input type="hidden" id="count_index" value="2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Date Of Birth</label>
                                        <div class="col-sm-10 ">
                                            <input type="text" class="form-control datepicker" onchange="checkAge()">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-10 ">
                                            <div class="radio">
                                            <label><input type="radio" name="gender" class="gender" value="m" onchange="checkAge()">Male</label>
                                            </div>
                                            <div class="radio">
                                            <label><input type="radio" name="gender" value="f" class="gender" onchange="checkAge()">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Type</label>
                                        <div class="col-sm-10 ">
                                            <select name="type" id="type" class="form-control select2" onchange="checkAge()">
                                                <option value="0"> -- select type membership --</option>
                                                <option value="s"> Silver</option>
                                                <option value="g"> Gold</option>
                                                <option value="p"> Platinum</option>
                                                <option value="b"> Black</option>
                                                <option value="v"> VIP</option>
                                                <option value="w"> WIP</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Fee & Vat</label>
                                        <div class="col-sm-5 ">
                                            <small>Fee</small>
                                            <input type="number" class="form-control" id="fee" readonly value="0" >
                                        </div>
                                        <div class="col-sm-5 ">
                                            <small>Vat</small>                                         
                                            <input type="number" class="form-control" id="vat" readonly value="0">

                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm pull-left" id="back" type="button">Back</button>
                                    <button class="btn btn-primary btn-sm pull-right"  onclick="save_all()" type="button" >Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
<script>
    function emailValid(email){
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
    }

    function next1(){
        var password = $('#password').val();
        var confirm_password = $('#re_password').val();
        var email = $('#email').val();
        var first_name =$('#first_name').val();
        var last_name = $('#last_name').val();


        if (first_name == '') {
			alert('Please fill field first name')
			return false;
        }
        
        if ( last_name == '') {
			alert('Please fill field last name')
			return false;
        }

        if(password !== confirm_password){
            alert("Passwords do not match.");
            return false;
        }

        if(emailValid(email)){
        }else{
            alert('email not valid');
            return false;
        }  

        var checked = false;
		if($('#term').is(":checked")){
			checked = $('#term').val()
		}
        
        $('#step-1').hide()
		$('#step-2').show()
		$('#btn2').removeClass('btn-default');
		$('#btn2').addClass('btn-primary');

        var account = { 
			first : first_name,
			last : last_name,
            email : email,
            password :password,
            checked : checked
        }
        return account;
    }   

    function checkAge(){
        var today  = new Date();
        var month = today.getMonth()+1;
        var birthday =  new Date($('.datepicker').val());
        var age = today.getFullYear() - birthday.getFullYear();
        var m = today.getMonth() - birthday.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthday.getDate())) {
        }else{
            if($('#type').val() == 's'){
                $('#fee').val(100000)
                if($("input[name='gender']:checked").val() == 'f' && age >= 17){
                    $('#vat').val(0);
                }else{
                    var silverVat = 100000 / 10;
                    $('#vat').val(silverVat);
                }
            }else if($('#type').val() == 'g'){
                $('#fee').val(200000)
                if($("input[name='gender']:checked").val() == 'f' && age >= 20){
                    $('#vat').val(0);
                }else{
                    var silverVat = 200000 / 10;
                    $('#vat').val(silverVat);
                }
            }else if($('#type').val() == 'p'){  
                $('#fee').val(300000);
                if( ($("input[name='gender']:checked").val() == 'f' && age >= 22) || ($("input[name='gender']:checked").val() == 'm' && age >= 22)){
                    $('#vat').val(0);
                }else{
                    var silverVat = 300000 / 10;
                    $('#vat').val(silverVat);
                }
            }else if($('#type').val() == 'b'){
                $('#fee').val(500000);
                var silverVat = 500000 / 10;
                $('#vat').val(silverVat);
            }else if($('#type').val() == 'v'){
                $('#fee').val(1000000);
                var silverVat = 1000000 / 10;
                $('#vat').val(silverVat);
            }else if($('#type').val() == 'w'){
                $('#fee').val(2000000);
                var silverVat = 2000000 / 10;
                $('#vat').val(silverVat);
            }

        }
    }
    

    {{--  function next2(){
        for(var nu= ){

        }
    }
      --}}

    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            changeMonth: true,
            changeYear: true,
        });

        $('.select2').select2();


        $('#term').click(function(){
            if($(this).is(":checked")) {
                $('.btn1').attr('disabled', false);
            }else{
                $('.btn1').attr('disabled', true);
            }
        });

		$('#step-2').hide()

		$('#back').on('click',function(){
			$('#step-1').show()
			$('#step-2').hide()
			$('#btn2').removeClass('btn-primary');
			$('#btn2').addClass('btn-default');
        })
      
        //add address other 
        $('#add_address').on('click',function(){
            var count = $('#count_index').val();
            $('#count_index').val(parseInt(count)+1);
            
            $('#header_address').append('<div class="form-group" id="address_form_'+count+'">'
                    +'<label  class="col-sm-2 control-label">'
                    +'</label>'
                    +'<div class="col-sm-9">'
                    +'<textarea name="address_'+count+'" class="form-control" id="address_'+count+'" cols="30" rows="5"></textarea>'
                    +'</div>'
                    +'<div class="col-sm-1">'
                        +'<a onclick="delete_address_row('+count+')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>'
                    +'</div>'
                +'</div>'
            )
        })         
    });
    
    //remove address other
    function delete_address_row(id){
        $('#address_form_'+id).remove()
    }
</script>