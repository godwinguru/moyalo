<!DOCTYPE html><html>

<head><title>Moyalo | Profile Settings</title>
<?php include('header1.php');?>

<div class="all-wrapper with-side-panel solid-bg-all">

        <div class="layout-w">
                <?php include('menu.php');?>

                <div class="content-w">
                        <?php include('top.php')?> 
        
                        <div class="content-i">
                            <div class="content-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <div class="os-tabs-controls">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile">Profile</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bank">Bank Account</a></li>
                                                    </ul>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="profile">
                                                                                                                
                                                       <div class="row">
                                                           <div class="col-lg-2 col-xxl-6">
                                                            
                                                                <div id="profile-container">
                                                                <image id="profileImage" src="http://lorempixel.com/100/100" />
                                                                </div>
                                                                <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                                                                
                                                           </div>
                                                           <div class="col-lg-9 col-xxl-6">
                                                                 <h5 class="form-header">Change Profile photo</h5>
                                                                 <span class="small">Maximum filesize for profile avartar is 20MB (.jpg, .png)</span><br>
                                                                 <span class="small">Click on the image to select your photo</span>
                                                           </div>
                                                       </div>   

                                                       <div class="form-desc"></div>

                                                       <form id="formValidate" method="post" enctype="multipart/form-data">
                                                        <h5 class="form-header">User Profile</h5>
                                                        <div class="form-desc">Kindly complete your profile imformation.</div>
                                                        <div class="form-group">
                                                        <label for=""> Full name</label>
                                                        <input class="form-control" placeholder="Full name" required="required" type="text">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for=""> Category</label>
                                                        <select class="form-control">
                                                        <option value="none">Select category</option>
                                                        <option value="Business with CAC Document">Business with CAC Document</option>
                                                        <option value="Professional & Corporate Employee">Professional & Corporate Employee</option>
                                                        </select>
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="">Email Address</label>
                                                        <input class="form-control" placeholder="Enter email address" required="required" type="text">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="">Phone Number</label>
                                                        <input class="form-control" placeholder="Enter phone number" required="required" type="text">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label for="">Password</label>
                                                                <input class="form-control" placeholder="" required="required" type="password">
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label for="">Confirm password</label>
                                                                <input class="form-control" placeholder="" required="required" type="password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label for="">Address Line 1</label>
                                                                <input class="form-control" placeholder="" required="required" type="text">
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label for="">Address Line 2</label>
                                                                <input class="form-control" placeholder="" required="required" type="text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label for="">City</label>
                                                                <input class="form-control" placeholder="" required="required" type="text">
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label for="">State</label>
                                                                <input class="form-control" placeholder="" required="required" type="text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                <label for="">Country</label>
                                                                
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <fieldset class="form-group">
                                                        <legend><span>Kindly upload the following</span></legend>
                                                        <div class="form-group">
                                                        <label> Valid ID CARD</label>
                                                        <input type="file" name="fileToUpload" >
                                                        </div>
                                                        <div class="form-group">
                                                        <label> Bank Statement</label>
                                                        <input type="file" name="fileToUpload" >
                                                        </div>
                                                        <div class="form-group">
                                                        <label> CAC Document of Business owner</label>
                                                        <input type="file" name="fileToUpload" >
                                                        </div>
                                                        <div class="form-group">
                                                        <label> Copy of Employment Letter</label>
                                                        <input type="file" name="fileToUpload" >
                                                        </div>
                                                        </fieldset>
                                                        <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">I agree and accept to Moyalo Loan Term &amp; conditions</label>
                                                        </div>
                                                        <div class="form-buttons-w">
                                                        <button class="btn btn-primary" type="submit"> Apply Now</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    
                                                    <div class="tab-pane" id="bank">
                                                        
                                                    <form id="formValidate" method="post" enctype="multipart/form-data">
                                                        <h5 class="form-header">Bank Information</h5>
                                                        <div class="form-desc">Kindly complete your banking imformation.</div>
                                                        <div class="form-group">
                                                        <label for=""> Account name</label>
                                                        <input class="form-control" placeholder="Account name" required="required" type="text">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for=""> Bank</label>
                                                        <select class="form-control">
                                                        <option value="none">Select Bank</option>
                                                        <option value="access">Access Bank</option>
                                                        <option value="citibank">Citibank</option>
                                                        <option value="diamond">Diamond Bank</option>
                                                        <option value="ecobank">Ecobank</option>
                                                        <option value="fidelity">Fidelity Bank</option>
                                                        <option value="fcmb">First City Monument Bank (FCMB)</option>
                                                        <option value="fsdh">FSDH Merchant Bank</option>
                                                        <option value="gtb">Guarantee Trust Bank (GTB)</option>
                                                        <option value="heritage">Heritage Bank</option>
                                                        <option value="Keystone">Keystone Bank</option>
                                                        <option value="polaris">Polaris Bank</option>
                                                        <option value="providus">Providus Bank</option>
                                                        <option value="rand">Rand Merchant Bank</option>
                                                        <option value="stanbic">Stanbic IBTC Bank</option>
                                                        <option value="standard">Standard Chartered Bank</option>
                                                        <option value="sterling">Sterling Bank</option>
                                                        <option value="suntrust">Suntrust Bank</option>
                                                        <option value="union">Union Bank</option>
                                                        <option value="uba">United Bank for Africa (UBA)</option>
                                                        <option value="unity">Unity Bank</option>
                                                        <option value="wema">Wema Bank</option>
                                                        <option value="zenith">Zenith Bank</option>
                                                        </select>
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="">Account Number</label>
                                                        <input class="form-control" placeholder="Enter account number" required="required" type="text">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="">BVN</label>
                                                        <input class="form-control" placeholder="Enter BVN" required="required" type="text">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>

                                                        
                                                        <div class="form-buttons-w">
                                                        <button class="btn btn-primary" type="submit"> Save</button>
                                                        </div>
                                                        </form>

                                                    </div>
                                                    <div class="tab-pane" id="tab_conversion"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>
                                        
                                
                        </div>
                </div>
        </div>

  <!--avatar image upload-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <Script>
    $("#profileImage").click(function(e) {
            $("#imageUpload").click();
        });

        function fasterPreview( uploader ) {
            if ( uploader.files && uploader.files[0] ){
                $('#profileImage').attr('src', 
                    window.URL.createObjectURL(uploader.files[0]) );
            }
        }

        $("#imageUpload").change(function(){
            fasterPreview( this );
        });
    </script>   
    
<?php include('footer.php');?>


