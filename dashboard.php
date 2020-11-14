<!DOCTYPE html><html>

<head>
    <title>Moyalo | Dashboard</title>
   
<?php include('header.php');?>

<div class="all-wrapper with-side-panel solid-bg-all">
        <?php include('modalpop.php');?>
                
<div class="layout-w">
        <?php include('menu.php');?>
<div class="content-w">
        <?php include('top.php')?>                              

<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="element-balances justify-content-between mobile-full-width">
                <div class="balance-table pl-sm-2 col-sm-6">
                    <div class="balance-title">Welcome</div>
                    <div class="balance-value">
                        <span class="d-xxl-none">{username}</span>
                    </div>
                </div>
                <div class="balance balance-v2 col-sm-6">
                    <div class="balance-title">Your Balance</div>
                    <div class="balance-value">
                        <span class="d-xxl-none">&#8358; 72,245</span>
                    </div>
                </div>
                
            </div>
            <div class="element-wrapper pb-4 mb-4">
                <div class="element-box-tp col-sm-12">
                   <span style="align-content: center;"> <a class="btn btn-primary" href="#">
                        <i class="os-icon os-icon-refresh-ccw"></i>
                        <span>Fund wallet</span>
                    </a>
                    <a class="btn btn-grey" href="#">
                        <i class="os-icon os-icon-log-out"></i>
                        <span>Withdraw</span>
                    </a></span>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-sm-12">
        <div class="element-wrapper">
            <div class="element-actions">
                
            </form>
            </div>
<h6 class="element-header">Account Overview</h6>
<div class="element-content">
    <div class="row">
        <div class="col-sm-4 col-xxxl-3">
             <div class="element-box thrift">
                <div class="el-buttons-list full-width">
                    <a class="btn btn-white btn-sm" href="#"><span>Total Thrift:  &#8358;  0.00</span></a>
                    <a class="btn btn-white btn-sm" href="#"><span>Current Thrift:  &#8358;  0.00</span></a>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xxxl-3">
            <div class="element-box savings">
                <div class="el-buttons-list full-width">
                    <a class="btn btn-white btn-sm" href="#"><span>Total Savings:  &#8358;  0.00</span></a>
                    <a class="btn btn-white btn-sm" href="#"><span>Current Savings:  &#8358;  0.00</span></a>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xxxl-3">
            <div class="element-box loans">
                <div class="el-buttons-list full-width">
                    <a class="btn btn-white btn-sm" href="#"><span>Total Loans:  &#8358;  0.00</span></a>
                    <a class="btn btn-white btn-sm" href="#"><span>Current Loans:  &#8358;  0.00</span></a>
                    
                </div>
            </div>
        </div>
        <!--<div class="d-none d-xxxl-block col-xxxl-3">
            <a class="element-box el-tablo" href="#">
                <div class="label">Refunds Processed</div>
                <div class="value">$294</div>
                <div class="trending trending-up-basic">
                    <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                </div>
            </a>
        </div>-->
    </div>
</div>

</div>
</div>
</div>
<div class="row">
    <div class="col-sm-12 col-xxxl-9">
        <div class="element-wrapper">
            <h6 class="element-header">New Orders</h6>
            <div class="element-box">
                <div class="">
                    
                <?php include('payment_card/index.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8 d-xxxl-none">
        <div class="element-wrapper">
            <h6 class="element-header">Account Activities</h6>
            <div class="element-box">

                <div class="users-list-w">
                    <div class="user-w with-status status-green">
                        <div class="user-name">
                            <h6 class="user-title">My Account Thrift</h6>
                        </div>
                        <a class="user-action" href="#">
                            <h6 class="user-title">1</h6>
                        </a>
                    </div>
                    <div class="user-w with-status status-green">
                            <div class="user-name">
                                <h6 class="user-title">Tota Number of users</h6>
                            </div>
                            <a class="user-action" href="#">
                                <h6 class="user-title">10</h6>
                            </a>
                    </div>
                    <div class="user-w with-status status-red">
                            <div class="user-name">
                                <h6 class="user-title">Money Deposited</h6>
                            </div>
                            <a class="user-action" href="#">
                                <h6 class="user-title">10,000</h6>
                            </a>
                    </div>
                    <div class="user-w with-status status-green">
                            
                            <div class="user-name">
                                <h6 class="user-title">Money withdrawn</h6>
                            </div>
                            <a class="user-action" href="#">
                                <h6 class="user-title">30,000</h6>
                            </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-4 col-xxxl-4">

        <div class="element-wrapper">
            <h6 class="element-header">Actions to Complete </h6>
            <div class="element-box-tp">
                <div class="el-buttons-list full-width">
                    <a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-delivery-box-2"></i><span>Customer profile</span></a>
                    <a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-window-content"></i><span>Customer Identity card</span></a>
                    <a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="row">
    <div class="col-sm-12 col-xxxl-9">
        
        <div class="element-wrapper">
            <h6 class="element-header">Inventory Stats</h6>
            <div class="element-box">
                <div class="element-actions d-none d-sm-block">
                    <form class="form-inline justify-content-sm-end">
                        <select class="form-control form-control-sm form-control-faded">
                            <option selected="true">Today</option>
                            <option>This Week</option>
                            <option>This Month</option>
                            
                        </select>
                    </form>
                </div>
                <div class="mt-4 border-top pt-3">
                    
                    <div class="el-chart-w">
                        <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45" height="150" id="liteLineChartV3" width="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    

</div>

<div class="row">
    <div class="col-sm-12">
        <h3 class="element-header">RELAX... Trusted by over 9,000 professionals who saves!</h3>
    </div>
</div>


</div>

<div class="content-panel">
<div class="content-panel-close"><i class="os-icon os-icon-close"></i></div> 

<div class="element-wrapper d-none d-lg-block">
    <div class="cta-w cta-with-media purple">
        <div class="cta-content">
            <div class="highlight-header">App</div>
            <h3 class="cta-header">Download our app on Google Play Store &amp; App Store</h3>
            <a class="store-google-btn" href="#"><img alt="" src="img/market-google-play.png"></a>
        </div>
        <div class="cta-media"><img alt="" src="img/phone1.png"></div>
    </div>
</div>

   <div class="element-wrapper compact pt-4">
       <div class="element-actions">
           <form class="form-inline justify-content-sm-end">
                <select class="form-control form-control-sm form-control-faded">
                   <option value="Pending">Today</option>
                   <option value="Active">Last Week </option>
                   <option value="Cancelled">Last 30 Days</option>
                </select>
            </form>
        </div>
        <h6 class="element-header">Transactions History</h6>
               <div class="element-box-tp">
                   <table class="table table-clean">
                       <tbody>
                           <tr>
                               <td><div class="value">Amazon Store</div></td>
                               <td class="text-right"><div class="value">-$28.34</div><span class="sub-value">12 Feb 2018</span></td>
                            </tr>
                            <tr>
                                <td><div class="value">Dunkin Donuts</div></td>
                                <td class="text-right"><div class="value">-$7.15</div><span class="sub-value">10 Feb 2018</span></td>
                            </tr>
                            <tr>
                                <td><div class="value">Refund from Sephora</div></td>
                                <td class="text-right"><div class="value text-success">$128.11</div><span class="sub-value">10 Feb 2018</span></td>
                            </tr>
                            <tr>
                                <td><div class="value">Amazon Store</div></td>
                                <td class="text-right"><div class="value">-$28.34</div><span class="sub-value">12 Feb 2018</span></td>
                            </tr>
                            <tr>
                                <td><div class="value">Dunkin Donuts</div></td>
                                <td class="text-right"><div class="value">-$7.15</div><span class="sub-value">10 Feb 2018</span></td>
                            </tr>
                            <tr>
                                <td><div class="value">Refund from Google Store</div></td>
                                    <td class="text-right"><div class="value text-success">$15.23</div><span class="sub-value">9 Feb 2018</span></td>
                            </tr>
                            <tr>
                                <td><div class="value">Amazon Store</div></td>
                                <td class="text-right"><div class="value">-$28.34</div><span class="sub-value">8 Feb 2018</span></td>
                            </tr>
                            <tr>
                                <td><div class="value">Dunkin Donuts</div></td>
                                <td class="text-right"><div class="value">-$7.15</div><span class="sub-value">8 Feb 2018</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="centered-load-more-link" href="#"><span>View all</span></a></div>
    </div>

  

    
</div>

</div>
</div>
</div>
<?php include('footer.php');?>