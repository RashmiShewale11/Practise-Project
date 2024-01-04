<?php
//Include the database configuration file
include 'dbConfig.php5';

//Fetch all the country data
$query = $db->query("SELECT * FROM states WHERE status = 1 ORDER BY state_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;
?>
<html>
<head>
    <!--

      <!-- Font Awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/js/mdb.min.js"></script>

</head>

<script type="text/javascript">
    $(document).ready(function(){
        $('#state').on('change',function(){
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'state_id='+stateID,
                    success:function(html){
                        $('#dist').html(html);
                        $('#tal').html('<option value="">Select dist first</option>');
                        $('#vil').html('<option value="">Select tal first</option>');
                    }
                });
            }else{
                $('#dist').html('<option value="">Select state first</option>');
                $('#tal').html('<option value="">Select dist first</option>');
            }
        });

        $('#dist').on('change',function(){
            var distID = $(this).val();
            if(distID){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'dist_id='+distID,
                    success:function(html){
                        $('#tal').html(html);
                        $('#vil').html('<option value="">Select tal first</option>');
                    }
                });
            }else{
                $('#tal').html('<option value="">Select state first</option>');
                $('#vil').html('<option value="">Select tal first</option>');
            }
        });

        $('#tal').on('change',function(){
            var talID = $(this).val();
            if(talID){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'tal_id='+talID,
                    success:function(html){
                        $('#vil').html(html);

                    }
                });
            }else{
                $('#vil').html('<option value="">Select tal first</option>');
            }
        });
    });
    </script>
<script>
    $(function () {
        $.validator.setDefaults({
            highlight: function (element) {
                $(element)
                    .closest('.form-group')
                    .addClass('has-error')
            },
            unhighlight: function (element) {
                $(element)
                    .closest('.form-group')
                    .removeClass('has-error')
            }
        });

        $.validate({
            rules:
                {
                    password: "required",
                    birthDate: "required",
                    weight: {
                        required: true,
                        number: true
                    },
                    height: {
                        required: true,
                        number: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
            messages: {
                email: {
                    required: true,
                    email: true
                }
            },
            password: {
                required: " Please enter password"
            },
            birthDate: {
                required: " Please enter birthdate"
            },
            email: {
                required: ' Please enter email',
                email: ' Please enter valid email'
            },
            weight: {
                required: " Please enter your weight",
                number: " Only numbers allowed"
            },
            height: {
                required: " Please enter your height",
                number: " Only numbers allowed"
            },
        }

    });
    });
    $('#materialIndeterminate2').prop('indeterminate', true);
</script>



<style>
    body {
        background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
        background-size: cover;
    }

    *[role="form"] {
        max-width: 800px;
        padding: 15px;
        margin: 0 auto;
        border-radius: 0.3em;
        background-color: #f2f2f2;
    }

    *[role="form"] h2 {
        font-family: 'Open Sans', sans-serif;
        font-size: 40px;
        font-weight: 600;
        color: #000000;
        margin-top: 5%;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 4px;
    }


</style>

<body>
<div class="container">
    <form class="form-horizontal" role="form" action="insert.php5" method="post" enctype="multipart/form-data">
        <h3>Registration</h3>
        <div class="form-group">
            <label for="PHCid" class="col-sm-4 control-label">PHC Id*</label>
            <input class="col-sm-4" type="number" name="PHCid" id="PHCid" placeholder="PHC Id" class="form-control" autofocus >
        </div>

        <div class="form-group">
            <label for="PHCName" class="col-sm-4 control-label">PHC Name*</label>
            <input class="col-sm-7" type="text" name="PHCName" id="PHCName" placeholder="PHC Name" class="form-control" autofocus >
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label>Medical Officer Name*</label>
            </div>
            <label class="col-sm-4 control-label"></label>

            <input type="text" class="col-sm-3 control-label " name="firstname" id="firstname"  placeholder="First Name"
                   class="form-control" autofocus>
            <input type="text" class="col-sm-4 control-label " name="lastname" id="lastname"  placeholder="Last Name"
                   class="form-control" autofocus>
        </div>

        <div class="form-group">
            <label for="phoneno" class="col-sm-4 control-label">Phone Number*</label>
            <input class="col-sm-7"  name="phoneno" id="phoneno" type="tel" placeholder="(format: xxxx-xxx-xxxx)"
                   pattern="^\d{4}-\d{3}-\d{4}$" class="form-control"  autofocus>
        </div>

        <div class="form-group">

            <label class="col-sm-4 control-label">Address </label>
            <input type="text" name="line1" id="line1" class="col-sm-7 mb-2" placeholder="Street Address Line 1" class="form-control"
                   name="line1">
            <label class="col-sm-4 control-label"></label>
            <input type="text" name="line2" id="line2" class="col-sm-7 mb-2" placeholder="Street Address Line 2" class="form-control"
                   name="line2">

            <label class="col-sm-4  control-label"></label>


            <select id="state" name="state" class="col-sm-4 mb-2" >
                <option value="">Select State</option>
                <?php
                if($rowCount > 0){
                    while($row = $query->fetch_assoc()){
                        echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
                    }
                }else{
                    echo '<option value="">Dist not available</option>';
                }
                ?>
            </select>

            <select id="dist" name="dist" class="col-sm-3 mb-2">
                <option value="">Select state first</option>
            </select>

            <label class="col-sm-4 control-label"></label>

            <select id="tal" name="tal" class="col-sm-4">
                <option value="">Select District first</option>
            </select>


            <select id="vil" name="vil" class="col-sm-3">
                <option value="">Select taluka first</option>
            </select>

        </div>

        <div class="form-group">
            <label for="email" class="col-sm-4 control-label">Email* </label>
            <input type="email" class="col-sm-7" name="email" id="email" placeholder="Email" class="form-control" name="email" >
        </div>

        <label class ="col-sm-4 control-label">Facilities Available </label>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Beds :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                        <input name="bed" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                        <input name="bed" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Labs :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="labs" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="labs" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Ambulances :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="Ambulances" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="Ambulances" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Labour Rooms :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="labourrooms" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="labourrooms" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Diagnostic Services :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="Dservices" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="Dservices" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Delivery Rooms :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="deliveryrooms" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="deliveryrooms" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Nutrition :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="nutrition" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="nutrition" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Female Staff :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="femalestaff" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="femalestaff" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Communication Facilities :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="communicationfacilities" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="communicationfacilities" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Notice Board :</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="noticeboard" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="noticeboard" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-sm-6">
                                <label for="input-type">Pharmaceutical:</label>
                                <div id="input-type" class="row">
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="pharmaceutical" id="input-type-Yes" value="Yes" type="radio" />Yes
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="radio-inline">
                                            <input name="pharmaceutical" id="input-type-No" value="No" type="radio" />No
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
    <br>
        <div class="form-group">
                <label for="password" class="col-sm-4 control-label">Password*</label>
                <input type="password" class="col-sm-7" name="Password" id="Password" placeholder="Password" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Confirm Password*</label>
                <input type="password" class="col-sm-7 " id="password" placeholder="Confirm Password" class="form-control" >
        </div>

        <label class="col-sm-4 control-label">Authentication Letter* </label>
        <div class="custom-file col-sm-7 mb-lg-5">

            <input type="file" class= "custom-file-input" name = "anyfile"" id="file" required>
            <label class="custom-file-label">Choose file...</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block" name="sub">Register</button>
    </form> <!-- /form -->
</div> <!-- ./container -->
</body>

</html>


<!--Pending work in above form
1.to check password and confirm password field (showld be match)
2.Check validations
3.insert records for state,district,taluka,village
-->