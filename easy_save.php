<!DOCTYPE html><html>

<head><title>Moyalo | Easy Save</title>
<?php include('header1.php');?>

<div class="all-wrapper with-side-panel solid-bg-all">

        <div class="layout-w">
                <?php include('menu.php');?>

                <div class="content-w">
                        <?php include('top.php')?> 
        
                    <div class="content-i">
                        <div class="content-box">
                            <h4 class="form-header easy-color">Easy Save</h4>
                            <div class="form-desc"></div>
                            <div class="row">
                                <div class="col-lg-8 col-xxl-6">
                                    <div class="element-wrapper">
                                        <div class="element-box1">
                                            <div class="balance balance-v2 paddy1">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xxl-9"><div class="balance-title up-bal">Your Balance</div></div>
                                                    <div class="col-lg-9 col-xxl-6">
                                                        <div class="balance-value up">
                                                            <h3 class="d-xxl-none easy-color">&#8358; 72,245</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xxl-6">
                                                        <center><button class="mr-2 mb-2 btn btn-warning btn-width"  data-target="#exampleModal1" data-toggle="modal" type="button"><i class="os-icon os-icon-plus"></i> <span>Quick Save</span></button></center>
                                                    </div>
                                                </div>
                                                <div class="bord-btm"></div>
                                                    <table class="table table-padded1">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center"><a href="#"><i class="easy-color">&#37;</i> <span>Interest</span></a></td>
                                                                <td class="text-center"><a href="#" data-target="#exampleModal2" data-toggle="modal"><i class="os-icon os-icon-credit-card easy-color"></i> <span>Withdraw</span></a></td>
                                                                <td class="text-center"><a href="profile_settings.php"><i class="os-icon os-icon-settings easy-color"></i> <span>Settings</span></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xxl-6">
                                <div class="element-wrapper">
                                        <div class="element-box">
                                            <div class="balance-title">INTEREST RATE</div>
                                            <div class="balance-value">
                                                <h4 class="easy-color">10&#37;</h4>
                                                <span class="table1">
                                                    <span class="smaller lighter">Per Annum</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                
                                <div class="col-lg-8 col-xxl-6">
                                    <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="row">
                                            <div class="col-lg-12 col-xxl-9">
                                                <h6 class="d-xxl-none">TRANSACTIONS</h6>
                                                <span class="mr-2 mb-2 btn btn-warning" type="button">All</span> 
                                                <span class="mr-2 mb-2 btn btn-outline-warning" type="button">Credit</span> 
                                                <span class="mr-2 mb-2 btn btn-outline-warning" type="button">Debit</span>
                                                <div class="form-desc"></div>
                                            </div>
                                            <div class="col-lg-12 col-xxl-9">
                                                <p class="cont">No transactions to display for now</p>
                                                <center><button class="mr-2 mb-2 btn btn-warning" type="button"> VIEW MORE TRANSACTIONS</button></center>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-4 col-xxl-6 d-none">
                                    <div class="element-wrapper" id="withdraw">
                                        <div class="element-box">
                                            <form>
                                                <h6 class="balance-title">SAVING INFO</h6>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="lighter" for="">Select Amount</label>
                                                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                    <input class="form-control" placeholder="Enter Amount..." value="0">
                                                                    <div class="input-group-append"><div class="input-group-text">&#8358;</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="lighter" for="">Transfer to</label>
                                                            <select class="form-control">
                                                                <option value="">Citibank *6382</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-buttons-w text-center compact">
                                                    <a href="#">
                                                        <i class="os-icon os-icon-power"></i>
                                                        <span>Turn on Autosave</span>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                                <div class="form-buttons-w text-center compact">
                                                    <a href="#">
                                                        <i class="os-icon os-icon-power"></i>
                                                        <span>Your autosave is OFF</span>
                                                    </a>
                                                </div>
                                    </div>
                                </div>
                                
                            </div>   

                            

                        </div>  
                    </div>
                </div>
        </div>

        <div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Quick Save</h5>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true"> ×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for=""> Tap here & enter .. (e.g 5000)</label>
                                <input class="form-control" placeholder="Tap here & enter .. (e.g 5000)" type="text">
                            </div>
                            
                            <div class="form-group">
                                <label for=""> Choose a Destination</label>
                                <select class="form-control">
                                <option value="none">Select destination</option>
                                <option value="Easy Save">Easy Save</option>
                                <option value="Quest Save">Quest Save</option>
                                <option value="Crypt Save">Crypt Save</option>
                                </select>
                            </div>
                               
                            
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning btn-width1 btn-lg" type="button"> Proceed</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal2" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select a wallet to withdraw from</h5>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true"> ×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="element-box easy">
                                <div class="table-responsive ">
                                    <table class="table table-padded">
                                        <tbody>
                                            <tr>
                                               <td><img src="img/BankFinancial.svg" alt="icons" /></td>
                                            </tr>
                                            <tr>
                                                <td> <a href="#"><h6 class="d-xxl-none">EASY SAVE</h6></a>
                                                <p>Develop a new exciting culture of aggressive savings for your urgent needs and never be caught unaware. Save daily, weekly or monthly and get interest of up to 10% per annum.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="">
                            <div class="element-box quick">
                                <div class="table-responsive">
                                    <table class="table table-padded">
                                        <tbody>
                                            <tr>
                                                <td><img src="img/BankFinancial.svg" alt="icons"/></td>
                                            </tr>
                                            <tr>
                                                <td> <a href="#"><h6 class="d-xxl-none">QUEST SAVE</h6></a>
                                                <p>At every point in life their is a new reason to pursue a new course. With our Questsave feature, you can save for a particular event or goal with an annual interest rate of 10% per annum.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="element-box crypt">
                                <div class="table-responsive">
                                    <table class="table table-padded">
                                        <tbody>
                                            <tr>
                                                <td><img src="img/BankFinancial.svg" alt="icons"/></td>
                                            </tr>
                                            <tr>
                                                <td> <a href="#"><h6 class="d-xxl-none">CRYPT SAVE</h6></a>
                                                <p>This feature Keep aside (lock) an amount of money for a convenient period of time without withdrawal and get up to 15% interest per annum.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary btn-width1 btn-lg" data-dismiss="modal" type="button"> Cancel</button>
                    </div>
                   
                </div>
            </div>
        </div>

<?php include('footer.php');?>


