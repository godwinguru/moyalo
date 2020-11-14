<!DOCTYPE html><html>

<head><title>Moyalo | Loans</title>
<?php include('header1.php');?>

<div class="all-wrapper with-side-panel solid-bg-all">

        <div class="layout-w">
                <?php include('menu.php');?>

                <div class="content-w">
                        <?php include('top.php')?> 
        
                        <div class="content-i">
                                <div class="content-box">
                                    <div class="element-wrapper compact pt-4">
                                        <div class="element-actions">
                                            <a class="btn btn-success btn-sm" href="#" data-target="#exampleModal1" data-toggle="modal" ><i class="os-icon os-icon-ui-22"></i><span>Add New Peer</span></a>
                                        </div>
                                        <h5 class="element-header">Thrift by Other Admin</h5>

                                        <!--modal contents starts-->
                                            <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog" tabindex="-1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Create New Peer</h5>
                                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form>
                                                                <div class="form-group">
                                                                    <label for=""> Peer Name</label>
                                                                    <input class="form-control" placeholder="Enter peer name" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Number of Co-save</label>
                                                                    <select class="form-control">
                                                                    <option value="select number">Select Number of co-savers</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Target Plan</label>
                                                                    <select class="form-control">
                                                                    <option value="select number">Select Target</option>
                                                                    <option value="Daily">Daily</option>
                                                                    <option value="Weekly">Weekly</option>
                                                                    <option value="Weekly">Monthly</option>
                                                                    <option value="3 Months">3 Months</option>
                                                                    <option value="6 Months">6 Months</option>
                                                                    <option value="9 Months">9 Months</option>
                                                                    <option value="12 Months">12 Months</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">{Target name}</label>
                                                                    <input class="form-control" placeholder="&#8358; 0.00" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for=""> Contributor Target</label>
                                                                    <input class="form-control" placeholder="&#8358; 0.00" type="text">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <center><button class="btn btn-primary btn-width1 btn-lg" data-target="#Modal2" data-dismiss="modal" data-toggle="modal" type="button"> Save</button></center>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="Modal2" role="dialog"  tabindex="-1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Add Peers</h5>
                                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="element-search autosuggest-search-activator">
                                                                <div class="row">
                                                                    <div class="col-sm-10 col-md-10"><input placeholder="Enter phone number or email to invite savers..."></div>
                                                                    <div class="col-sm-2 col-md-2"><button class="btn btn-success" type="button">Invite</button></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-desc"></div>
                                                            <div class="support-index">
                                                                <div class="support-ticket">
                                                                    <div class="st-body">
                                                                        <div class="avatar"><img alt="" src="img/avatar1.jpg"></div>
                                                                        <div class="ticket-content"><h6 class="ticket-title">Ifedayo Oniyide</h6></div>
                                                                        
                                                                        <span class="smallo">Awaiting confirmation</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="support-index">
                                                                <div class="support-ticket">
                                                                    <div class="st-body">
                                                                        <div class="avatar"><img alt="" src="img/avatar1.jpg"></div>
                                                                        <div class="ticket-content"><h6 class="ticket-title">Ifedayo Oniyide</h6></div>
                                                                        
                                                                        <span class="smallo">Awaiting confirmation</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <button class="btn btn-outline-secondary btn-width1 btn-lg" type="button"> <a href="thrift_transactions_w.php">Close</a></button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--modal contents ends-->
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="element-wrapper">
                                                <div class="element-box">
                                                    <div class="row">                                                        
                                                        <div class="col-lg-12 col-xxl-9">
                                                            <div class="element-wrapper">
                                                            <div class="element-box">
                                                            <div class="table-responsive">

                                                                <!--accordion collapse start here-->
                                                                <div class="bs-example">
                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="card">
                                                                            <div class="card-header" id="headingOne">
                                                                                <h2 class="mb-0">
                                                                                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">{NAME OF SAVING GROUP}</button>									
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                                <div class="card-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-3 col-xxl-6"></div>
                                                                                        <div class="col-lg-6 col-xxl-9 saverbck">
                                                                                        <table class="table table-padded table-dark table-striped table-hover">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th><span class="coltxt">Monthly saving target</span></th>
                                                                                                        <th></th>
                                                                                                        <th><span class="txta">&#8358; 100,000</span></th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tfoot>
                                                                                                    <tr>
                                                                                                        <td><span class="coltxt">Weekly payout target</span></td>
                                                                                                        <td></td>
                                                                                                        <td><span class="txta">&#8358; 10,000</span></td>
                                                                                                    </tr>
                                                                                                </tfoot>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-xxl-6"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-header" id="headingTwo">
                                                                                <h2 class="mb-0">
                                                                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">{NAME OF SAVING GROUP}</button>
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                                <div class="card-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-3 col-xxl-6"></div>
                                                                                        <div class="col-lg-6 col-xxl-9 saverbck">
                                                                                        <table class="table table-padded table-dark table-striped table-hover">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th><span class="coltxt">Monthly saving target</span></th>
                                                                                                        <th></th>
                                                                                                        <th><span class="txta">&#8358; 100,000</span></th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tfoot>
                                                                                                    <tr>
                                                                                                        <td><span class="coltxt">Weekly payout target</span></td>
                                                                                                        <td></td>
                                                                                                        <td><span class="txta">&#8358; 10,000</span></td>
                                                                                                    </tr>
                                                                                                </tfoot>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-xxl-6"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-header" id="headingThree">
                                                                                <h2 class="mb-0">
                                                                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">{NAME OF SAVING GROUP}</button>                     
                                                                                </h2>
                                                                            </div>
                                                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                                                <div class="card-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-3 col-xxl-6"></div>
                                                                                        <div class="col-lg-6 col-xxl-9 saverbck">
                                                                                            <table class="table table-padded table-dark table-striped table-hover">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th><span class="coltxt">Monthly saving target</span></th>
                                                                                                        <th></th>
                                                                                                        <th><span class="txta">&#8358; 100,000</span></th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td><span>Name of saver</span></td>
                                                                                                        <td class="text-center"><a class="btn btn-primary" href="#">Pay</a></td>
                                                                                                        <td class="nowrap"><!--<span class="status-pill smaller green"></span>--><span>&#8358; 1,000</span></td>
                                                                                                    </tr>
                                                                                                    <tfoot>
                                                                                                    <tr>
                                                                                                        <td><span class="coltxt">Weekly payout target</span></td>
                                                                                                        <td></td>
                                                                                                        <td><span class="txta">&#8358; 10,000</span></td>
                                                                                                    </tr>
                                                                                                </tfoot>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-xxl-6"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--accordion collapse end here-->

                                                                
                                                            </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
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


