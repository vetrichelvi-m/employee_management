@extends('layouts.default')
@section('title', 'Empowering Simplicity')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Masters</header>
                </div>
                <div class="card-body ">
                    {{-- <div class="mdl-tabs__tab-bar">
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/admin_users"
                        class="mdl-tabs__tab tabs_three is-active">Admin Users</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/banks"
                        class="mdl-tabs__tab tabs_three">Banks</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/deductions"
                        class="mdl-tabs__tab tabs_three">Deductions</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/DocumentTypes"
                        class="mdl-tabs__tab tabs_three">Document Types</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/earnings"
                        class="mdl-tabs__tab tabs_three">Earnings</a>
                </div>
                <div class="mdl-tabs__tab-bar">
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/employee_departments"
                        class="mdl-tabs__tab tabs_three">Employee Departments</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/employee_designations"
                        class="mdl-tabs__tab tabs_three">Employee Designations</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/employee_types"
                        class="mdl-tabs__tab tabs_three">Employee Types</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/roles"
                        class="mdl-tabs__tab tabs_three">Roles</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/status_types"
                        class="mdl-tabs__tab tabs_three">Status Types</a>
                    <a href="<?php echo $this->Url->build('/', true); ?>admin/statuses"
                        class="mdl-tabs__tab tabs_three">Statuses</a>
                </div> --}}
                    <div class="mdl-tabs__panel is-active p-t-20">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-head">
                                    <header>Add Admin User</header>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('profile.store') }}" class = "form-horizontal",
                                        autocomplete = "off" enctype="multipart/form-data" id = "FormID">
                                        @csrf

                                        <div class="col-md-10 offset-1">
                                            <div class="form-body row">
                                                <div class="col-md-6">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">Role <span
                                                                    class="required"> *
                                                                </span></label>
                                                            <div class="col-md-6">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input class="form-control" name="role_id"
                                                                        templates="inputContainer" label ="false"
                                                                        type="text" empty = "Select Role"required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">Name <span
                                                                    class="required"> *
                                                                </span></label>
                                                            <div class="col-md-6">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input class="form-control" name="name"
                                                                        templates="inputContainer" label ="false"
                                                                        type="text" placeholder = "Select name"
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">Password <span
                                                                    class="required">
                                                                    * </span></label>
                                                            <div class="col-md-6">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="password" name="password"
                                                                        class="form-control" templates="inputContainer"
                                                                        label ="false" minlength="2" maxlength="10"
                                                                        placeholder = "Enter password" required />

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">Email <span
                                                                    class="required">*
                                                                </span></label>
                                                            <div class="col-md-6">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="email" name="email"
                                                                        class="form-control" templates="inputContainer"
                                                                        label ="false" placeholder = "Enter email" required
                                                                        onblur = 'uniquefieldvalidation("email",this.value)',
                                                                        data-required=1 />
                                                                    <span class="alert-dismissable alert-danger email">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">Mobile Number <span
                                                                    class="required"> *
                                                                </span></label>
                                                            <div class="col-md-6">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="type" name="mobile_no"
                                                                        class="form-control" templates="inputContainer"
                                                                        label ="false" placeholder = "Enter phone" required
                                                                        onblur = 'uniquefieldvalidation("email",this.value)',
                                                                        data-required=1 />

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">Address <span
                                                                    class="required">
                                                                    * </span></label>
                                                            <div class="col-md-6">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>

                                                                    <textarea name="address" id="address" class="form-control" placeholder="Enter address" style="resize: none;"
                                                                        required></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="padding-top:10px;margin-bottom:-20px;">
                                                    <div class="offset-md-5 col-md-10">
                                                        <button type="submit"
                                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn btn-primary m-r-20">Submit</button>
                                                        <button type="button"
                                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn btn-default"
                                                            onclick="javascript:history.back()">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function uniquefieldvalidation(paramfield, paramvalue) {

            $.ajax({
                async: true,
                dataType: "html",
                type: "get",
                url: "<?php //echo $this->Url->build('/', true)
                ?>admin/AdminUsers/uniquefieldvalidation/" +
                    paramfield +
                    "/" +
                    paramvalue + "/",
                success: function(data, textStatus) {
                    if (data != "Success") {

                        $('span.' + paramfield).html(data);
                        alert(data);
                        $('#' + paramfield).val('');
                        return false;


                    } else {
                        alert(paramfield);
                        $('span.' + paramfield).html('');
                    }

                }
            });
        }

        function validate_mobile_number(mobile) {
            var pattern = /^\d{10}$/;

            $("#UserMobileNo").parent().removeClass('state-error');
            $("#UserMobileNo").parent().parent().find("em").remove();
            if ((mobile < 7000000000) || (mobile > 9999999999) || (mobile.length < 10) || (!pattern
                    .test(mobile))) {
                $("#UserMobileNo").parent().removeClass("state-success").addClass('state-error');
                $("#UserMobileNo").parent().parent().append(
                    '<em for="#UserMobileNo" class="invalid">Enter valid mobile number</em>'
                );
                return false;
            } else {
                console.log('valid');
                $("#UserMobileNo").parent().removeClass('state-error').addClass("state-success");
                $("#UserMobileNo").parent().parent().find("em").remove();
                return true;
            }
        }

        // $("#FormID").validate({
        //     rules: {
        //         'role_id': {
        //             required: true
        //         },
        //         'name': {
        //             required: true
        //         },
        //         'password': {
        //             required: true
        //         },
        //         'username': {
        //             required: true
        //         },

        //         'email': {
        //             required: true
        //         },
        //         'mobile_no': {
        //             required: true
        //         },
        //         'address': {
        //             required: true
        //         }
        //     },

        //     messages: {
        //         'role_id': {
        //             required: "Select Role"
        //         },
        //         'name': {
        //             required: "Enter Name"
        //         },
        //         'password': {
        //             required: "Enter Password"
        //         },
        //         'username': {
        //             required: "Enter Username"
        //         },
        //         'email': {
        //             required: "Enter Email"
        //         },
        //         'mobile_no': {
        //             required: "Enter Mobile Number"
        //         },
        //         'address': {
        //             required: "Enter Address"
        //         }
        //     },
        //     submitHandler: function(form) {
        //         form.submit();
        //         $(".btn").prop('disabled', true);
        //     }
        // });
    </script>
@stop
