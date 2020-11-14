<!DOCTYPE html><html>

<head><title>Moyalo | Instant Exchange</title>
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
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Sell_BTC">Sell BTC</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Gift_card">Gift Card Exchange</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Transaction_history">Transaction History</a></li>
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
                                                    <div class="tab-pane active" id="Sell_BTC">

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="element-wrapper">
                                                                    <h6 class="element-header">Sell Bitcoin</h6>
                                                                    <div class="element-box">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-xl-6">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 b-r">
                                                                                        <div class="el-tablo centered padded">
                                                                                            <div class="label">Copy Moyalo Wallet Address</div>
                                                                                            
                                                                                            <input class="form-control value" type="text" value="23244454ed2332-er4532214" id="myInput">
                                                                                            <div class="label"><button class="btn btn-primary" onclick="myFunction()"><i class="os-icon os-icon-copy"></i></button> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                   
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                            <div class="col-md-6 col-xl-6">
                                                                                <div class="padded">
                                                                                    <div class="el-tablo bigger">
                                                                                        <div class="value">&#8358; 440</div>
                                                                                        <div class="trending trending-up">
                                                                                            <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                                                                                        </div>
                                                                                        <div class="label">Moyalo BTC Rate for the day</div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                        
                                                        <form id="formValidate" method="post" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                        <label for="">How much BTC do you wish to sell</label>
                                                        <input class="form-control" placeholder="Eg: 0.05BTC" required="required" type="text">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>

                                                        <div class="row">
                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label for="">Amount in Dollars</label>
                                                        <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                        
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label for="">Ammount in Naira</label>
                                                        <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                        </div>
                                                        </div>
                                                        </div>

                                                        <fieldset class="form-group">
                                                        <legend><span>NGN Bank Account Details</span></legend>
                                                        <div class="row">
                                                        <div class="col-sm-4">
                                                        <div class="form-group">
                                                        <label for="">Account Name</label>
                                                        <input class="form-control" placeholder="Enter account name" required="required" type="text">
                                                        
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <div class="form-group">
                                                        <label for="">Account Number</label>
                                                        <input class="form-control" placeholder="Enter account number" required="required" type="text">
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <div class="form-group">
                                                        <label for="">Name of BAnk</label>
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
                                                        </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label for="">Phone Number</label>
                                                        <input class="form-control" placeholder="Enter phone number" required="required" type="text">
                                                        
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label for="">Email Addres</label>
                                                        <input class="form-control" placeholder="Enter email address" required="required" type="text">
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </fieldset>

                                                        <div class="form-check">
                                                        <label class="form-check-label"><strong>We would reach you in less than 2mins after we receive your BTC Credit.</strong></label>
                                                        </div>
                                                        <div class="form-buttons-w">
                                                        <button class="btn btn-primary" type="submit"> Send</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    
                                                    <div class="tab-pane" id="Gift_card">
                                                    
                                                        <div class="full-chat-w">
                                                            <div class="full-chat-i">
                                                                <div class="full-chat-left">
                                                                    <div class="user-list">
                                                                        <div class="os-tabs-controls">
                                                                            <ul class="nav nav-tabs">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link active" data-toggle="tab" href="#iTunes">
                                                                                    <div class="user-w">
                                                                                        <div class="avatar with-status status-green">
                                                                                            <img alt="iTunes" src="img/avatar1.jpg">
                                                                                        </div>
                                                                                        <div class="user-info">
                                                                                            <div class="user-name">iTunes gift card</div>
                                                                                            <!--<div class="last-message">What is going on, are we...</div>-->
                                                                                        </div>
                                                                                    </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link " data-toggle="tab" href="#amazon">
                                                                                    <div class="user-w">
                                                                                        <div class="avatar with-status status-green">
                                                                                            <img alt="Amazon" src="img/avatar2.jpg">
                                                                                        </div>
                                                                                        <div class="user-info">
                                                                                        <div class="user-name">Amazon gift card</div>
                                                                                        <!--<div class="last-message">What is going on, are we...</div>-->
                                                                                        </div>
                                                                                    </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#steam">
                                                                                    <div class="user-w">
                                                                                        <div class="avatar with-status status-green">
                                                                                            <img alt="Steam" src="img/avatar3.jpg">
                                                                                        </div>
                                                                                        <div class="user-info">
                                                                                        <div class="user-name">Steam gift card</div>
                                                                                        <!--<div class="last-message">What is going on, are we...</div>-->
                                                                                        </div>
                                                                                    </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#google">
                                                                                    <div class="user-w">
                                                                                        <div class="avatar with-status status-green">
                                                                                            <img alt="Googleplay" src="img/avatar4.jpg">
                                                                                        </div>
                                                                                        <div class="user-info">
                                                                                        <div class="user-name">Google play gift card</div>
                                                                                        <!--<div class="last-message">What is going on, are we...</div>-->
                                                                                        </div>
                                                                                    </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#target">
                                                                                    <div class="user-w">
                                                                                        <div class="avatar with-status status-green">
                                                                                            <img alt="Target" src="img/avatar5.jpg">
                                                                                        </div>
                                                                                        <div class="user-info">
                                                                                        <div class="user-name">Target gift card</div>
                                                                                        <!--<div class="last-message">What is going on, are we...</div>-->
                                                                                        </div>
                                                                                    </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#sephora">
                                                                                    <div class="user-w">
                                                                                        <div class="avatar with-status status-green">
                                                                                            <img alt="Sephora" src="img/avatar6.jpg">
                                                                                        </div>
                                                                                        <div class="user-info">
                                                                                        <div class="user-name">Sephora gift card</div>
                                                                                        <!--<div class="last-message">What is going on, are we...</div>-->
                                                                                        </div>
                                                                                    </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" data-toggle="tab" href="#nike">
                                                                                    <div class="user-w">
                                                                                        <div class="avatar with-status status-green">
                                                                                            <img alt="nike" src="img/avatar7.png">
                                                                                        </div>
                                                                                        <div class="user-info">
                                                                                        <div class="user-name">Nike gift card</div>
                                                                                        <!--<div class="last-message">What is going on, are we...</div>-->
                                                                                        </div>
                                                                                    </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="full-chat-middle" >
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane active" id="iTunes">
                                                                            <div class="chat-head">
                                                                                <div class="user-info">
                                                                                    <img alt="iTunes" src="img/itunes.png">
                                                                                </div>
                                                                                <div class="user-actions">
                                                                                    <div class="label">ITUNES GIFT CARD TRADING</div>
                                                                                    <h5>&#36;100 &#61; &#8358;24,000</h5>
                                                                                    <!--<a href="#"><i class="os-icon os-icon-mail-07"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-18"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-15"></i></a>-->
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat-content-w">
                                                                                <div class="chat-content">
                                                                                    <form id="formValidate" method="post" enctype="multipart/form-data" >
                                                                                    <div class="form-group">
                                                                                    <label for="">Card Type</label>
                                                                                    <select class="form-control">
                                                                                    <option value="none">Select Card Type</option>
                                                                                    <option value="access">Itunes Gift Card</option>
                                                                                    <option value="citibank">Amazon Gift Card</option>
                                                                                    <option value="diamond">Steam Gift Card</option>
                                                                                    <option value="ecobank">Googleplay Gift Card</option>
                                                                                    <option value="fidelity">Target Gift Card</option>
                                                                                    <option value="fcmb">Sephora Gift Card</option>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Denomination Type</label>
                                                                                    <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                                                    
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Settlement Currency</label>
                                                                                    <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label> Attach Card Here</label><br>
                                                                                    <input type="file" name="fileToUpload" >
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label for="">Input Card Code</label>
                                                                                    <input class="form-control" placeholder="Enter card code here" required="required" type="text">
                                                                                    </div>
                                                                                    

                                                                                    <div class="form-buttons-w">
                                                                                    <button class="btn btn-primary" type="submit"> Send</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    <img style="padding-top:20px;" src="img/steps.png" alt="steps"/>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="tab-pane" id="amazon">
                                                                            <div class="chat-head">
                                                                                <div class="user-info">
                                                                                    <img alt="amazon" src="img/amazon.png">
                                                                                </div>
                                                                                <div class="user-actions">
                                                                                    <div class="label">ITUNES GIFT CARD TRADING</div>
                                                                                    <h5>&#36;100 &#61; &#8358;24,000</h5>
                                                                                    <!--<a href="#"><i class="os-icon os-icon-mail-07"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-18"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-15"></i></a>-->
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat-content-w">
                                                                                <div class="chat-content">
                                                                                    <form id="formValidate" method="post" enctype="multipart/form-data" >
                                                                                    <div class="form-group">
                                                                                    <label for="">Card Type</label>
                                                                                    <select class="form-control">
                                                                                    <option value="none">Select Card Type</option>
                                                                                    <option value="access">Itunes Gift Card</option>
                                                                                    <option value="citibank">Amazon Gift Card</option>
                                                                                    <option value="diamond">Steam Gift Card</option>
                                                                                    <option value="ecobank">Googleplay Gift Card</option>
                                                                                    <option value="fidelity">Target Gift Card</option>
                                                                                    <option value="fcmb">Sephora Gift Card</option>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Denomination Type</label>
                                                                                    <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                                                    
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Settlement Currency</label>
                                                                                    <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label> Attach Card Here</label><br>
                                                                                    <input type="file" name="fileToUpload" >
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label for="">Input Card Code</label>
                                                                                    <input class="form-control" placeholder="Enter card code here" required="required" type="text">
                                                                                    </div>
                                                                                    

                                                                                    <div class="form-buttons-w">
                                                                                    <button class="btn btn-primary" type="submit"> Send</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    <img style="padding-top:20px;" src="img/steps.png" alt="steps"/>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="tab-pane" id="steam">
                                                                            <div class="chat-head">
                                                                                <div class="user-info">
                                                                                    <img alt="steam" src="img/steam.png">
                                                                                </div>
                                                                                <div class="user-actions">
                                                                                    <div class="label">STEAM GIFT CARD TRADING</div>
                                                                                    <h5>&#36;100 &#61; &#8358;23,000</h5>
                                                                                    <!--<a href="#"><i class="os-icon os-icon-mail-07"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-18"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-15"></i></a>-->
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat-content-w">
                                                                                <div class="chat-content">
                                                                                    <form id="formValidate" method="post" enctype="multipart/form-data" >
                                                                                    <div class="form-group">
                                                                                    <label for="">Card Type</label>
                                                                                    <select class="form-control">
                                                                                    <option value="none">Select Card Type</option>
                                                                                    <option value="access">Itunes Gift Card</option>
                                                                                    <option value="citibank">Amazon Gift Card</option>
                                                                                    <option value="diamond">Steam Gift Card</option>
                                                                                    <option value="ecobank">Googleplay Gift Card</option>
                                                                                    <option value="fidelity">Target Gift Card</option>
                                                                                    <option value="fcmb">Sephora Gift Card</option>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Denomination Type</label>
                                                                                    <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                                                    
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Settlement Currency</label>
                                                                                    <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label> Attach Card Here</label><br>
                                                                                    <input type="file" name="fileToUpload" >
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label for="">Input Card Code</label>
                                                                                    <input class="form-control" placeholder="Enter card code here" required="required" type="text">
                                                                                    </div>
                                                                                    

                                                                                    <div class="form-buttons-w">
                                                                                    <button class="btn btn-primary" type="submit"> Send</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    <img style="padding-top:20px;" src="img/steps.png" alt="steps"/>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="tab-pane" id="google">
                                                                            <div class="chat-head">
                                                                                <div class="user-info">
                                                                                    <img alt="googleplay" src="img/google.png">
                                                                                </div>
                                                                                <div class="user-actions">
                                                                                    <div class="label">GOOGLEPLAY GIFT CARD TRADING</div>
                                                                                    <h5>&#36;100 &#61; &#8358;26,000</h5>
                                                                                    <!--<a href="#"><i class="os-icon os-icon-mail-07"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-18"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-15"></i></a>-->
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat-content-w">
                                                                                <div class="chat-content">
                                                                                    <form id="formValidate" method="post" enctype="multipart/form-data" >
                                                                                    <div class="form-group">
                                                                                    <label for="">Card Type</label>
                                                                                    <select class="form-control">
                                                                                    <option value="none">Select Card Type</option>
                                                                                    <option value="access">Itunes Gift Card</option>
                                                                                    <option value="citibank">Amazon Gift Card</option>
                                                                                    <option value="diamond">Steam Gift Card</option>
                                                                                    <option value="ecobank">Googleplay Gift Card</option>
                                                                                    <option value="fidelity">Target Gift Card</option>
                                                                                    <option value="fcmb">Sephora Gift Card</option>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Denomination Type</label>
                                                                                    <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                                                    
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Settlement Currency</label>
                                                                                    <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label> Attach Card Here</label><br>
                                                                                    <input type="file" name="fileToUpload" >
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label for="">Input Card Code</label>
                                                                                    <input class="form-control" placeholder="Enter card code here" required="required" type="text">
                                                                                    </div>
                                                                                    

                                                                                    <div class="form-buttons-w">
                                                                                    <button class="btn btn-primary" type="submit"> Send</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    <img style="padding-top:20px;" src="img/steps.png" alt="steps"/>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="tab-pane" id="target">
                                                                            <div class="chat-head">
                                                                                <div class="user-info">
                                                                                    <img alt="target" src="img/target.png">
                                                                                </div>
                                                                                <div class="user-actions">
                                                                                    <div class="label">TARGET GIFT CARD TRADING</div>
                                                                                    <h5>&#36;500 &#61; &#8358;140,000</h5>
                                                                                    <!--<a href="#"><i class="os-icon os-icon-mail-07"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-18"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-15"></i></a>-->
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat-content-w">
                                                                                <div class="chat-content">
                                                                                    <form id="formValidate" method="post" enctype="multipart/form-data" >
                                                                                    <div class="form-group">
                                                                                    <label for="">Card Type</label>
                                                                                    <select class="form-control">
                                                                                    <option value="none">Select Card Type</option>
                                                                                    <option value="access">Itunes Gift Card</option>
                                                                                    <option value="citibank">Amazon Gift Card</option>
                                                                                    <option value="diamond">Steam Gift Card</option>
                                                                                    <option value="ecobank">Googleplay Gift Card</option>
                                                                                    <option value="fidelity">Target Gift Card</option>
                                                                                    <option value="fcmb">Sephora Gift Card</option>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Denomination Type</label>
                                                                                    <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                                                    
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Settlement Currency</label>
                                                                                    <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label> Attach Card Here</label><br>
                                                                                    <input type="file" name="fileToUpload" >
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label for="">Input Card Code</label>
                                                                                    <input class="form-control" placeholder="Enter card code here" required="required" type="text">
                                                                                    </div>
                                                                                    

                                                                                    <div class="form-buttons-w">
                                                                                    <button class="btn btn-primary" type="submit"> Send</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    <img style="padding-top:20px;" src="img/steps.png" alt="steps"/>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="tab-pane" id="sephora">
                                                                            <div class="chat-head">
                                                                                <div class="user-info">
                                                                                    <img alt="sephora" src="img/sephora.png">
                                                                                </div>
                                                                                <div class="user-actions">
                                                                                    <div class="label">SEPHORA GIFT CARD TRADING</div>
                                                                                    <h5>&#36;100 &#61; &#8358;30,000</h5>
                                                                                    <!--<a href="#"><i class="os-icon os-icon-mail-07"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-18"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-15"></i></a>-->
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat-content-w">
                                                                                <div class="chat-content">
                                                                                    <form id="formValidate" method="post" enctype="multipart/form-data" >
                                                                                    <div class="form-group">
                                                                                    <label for="">Card Type</label>
                                                                                    <select class="form-control">
                                                                                    <option value="none">Select Card Type</option>
                                                                                    <option value="access">Itunes Gift Card</option>
                                                                                    <option value="citibank">Amazon Gift Card</option>
                                                                                    <option value="diamond">Steam Gift Card</option>
                                                                                    <option value="ecobank">Googleplay Gift Card</option>
                                                                                    <option value="fidelity">Target Gift Card</option>
                                                                                    <option value="fcmb">Sephora Gift Card</option>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Denomination Type</label>
                                                                                    <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                                                    
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Settlement Currency</label>
                                                                                    <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label> Attach Card Here</label><br>
                                                                                    <input type="file" name="fileToUpload" >
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label for="">Input Card Code</label>
                                                                                    <input class="form-control" placeholder="Enter card code here" required="required" type="text">
                                                                                    </div>
                                                                                    

                                                                                    <div class="form-buttons-w">
                                                                                    <button class="btn btn-primary" type="submit"> Send</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    <img style="padding-top:20px;" src="img/steps.png" alt="steps"/>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="tab-pane" id="nike">
                                                                            <div class="chat-head">
                                                                                <div class="user-info">
                                                                                    <img alt="nike" src="img/nike.png">
                                                                                </div>
                                                                                <div class="user-actions">
                                                                                    <div class="label">NIKE GIFT CARD TRADING</div>
                                                                                    <h5>&#36;500 &#61; &#8358;140,000</h5>
                                                                                    <!--<a href="#"><i class="os-icon os-icon-mail-07"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-18"></i></a>
                                                                                    <a href="#"><i class="os-icon os-icon-phone-15"></i></a>-->
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat-content-w">
                                                                                <div class="chat-content">
                                                                                    <form id="formValidate" method="post" enctype="multipart/form-data" >
                                                                                    <div class="form-group">
                                                                                    <label for="">Card Type</label>
                                                                                    <select class="form-control">
                                                                                    <option value="none">Select Card Type</option>
                                                                                    <option value="access">Itunes Gift Card</option>
                                                                                    <option value="citibank">Amazon Gift Card</option>
                                                                                    <option value="diamond">Steam Gift Card</option>
                                                                                    <option value="ecobank">Googleplay Gift Card</option>
                                                                                    <option value="fidelity">Target Gift Card</option>
                                                                                    <option value="fcmb">Sephora Gift Card</option>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Denomination Type</label>
                                                                                    <input class="form-control" placeholder="&#36; 400" required="required" type="text">
                                                                                    
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                    <label for="">Settlement Currency</label>
                                                                                    <input class="form-control" placeholder="&#8358; 150,000" required="required" type="text">
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label> Attach Card Here</label><br>
                                                                                    <input type="file" name="fileToUpload" >
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label for="">Input Card Code</label>
                                                                                    <input class="form-control" placeholder="Enter card code here" required="required" type="text">
                                                                                    </div>
                                                                                    

                                                                                    <div class="form-buttons-w">
                                                                                    <button class="btn btn-primary" type="submit"> Send</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    <img style="padding-top:20px;" src="img/steps.png" alt="steps"/>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="Transaction_history">
                                                        place contents here3...
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


<?php include('footer.php');?>


