<?php /* Template Name: custompage */?>

<?php
get_header();
?>
<style>
    @charset "UTF-8";

    .stepper .nav-tabs {
        position: relative;
    }

    .stepper .nav-tabs>li {
        width: 20%;
        position: relative;
    }

    .stepper .nav-tabs>li:after {
        content: '';
        position: absolute;
        background: #000;
        display: block;
        width: 100%;
        height: 5px;
        top: 45px;
        left: 50%;
        z-index: 1;
    }

    .stepper .nav-tabs>li:nth-child(6)::after {
        top: 70px;
        background: #fff;
    }
    .stepper .nav-tabs>li:nth-child(7)::after {
        top: 70px;
        background: #fff;
    }
    .stepper .nav-tabs>li:nth-child(8)::after {
        top: 70px;
        background: #fff;
    }

     .stepper .nav-tabs>li:nth-child(2)::before {
        content: '';
        position: absolute;
        display: block;
        width: 4px;
        top: 82px;
        left: 136px;
        z-index: 1;
        /* border-left: 5px solid transparent;
        border-right: 5px solid transparent; */
        border-top: 55px solid #000;

    }

    .stepper .nav-tabs>li:nth-child(3)::before {
        content: '';
        position: absolute;
        display: block;
        width: 4px;
        top: 82px;
        left: 136px;
        z-index: 1;
        /* border-left: 5px solid transparent;
        border-right: 5px solid transparent; */
        border-top: 55px solid #000;
    }

    .stepper .nav-tabs>li:nth-child(4)::before {
        content: '';
        position: absolute;
        display: block;
        width: 4px;
        top: 82px;
        left: 136px;
        z-index: 1;
        /* border-left: 5px solid transparent;
        border-right: 5px solid transparent; */
        border-top: 55px solid #000;
    }
/**/
     .stepper .nav-tabs>li:nth-child(5)::after {
        content: '';
        position: absolute;
        background: #f1f1f1;
        display: block;
        width: 100%;
        height: 0px;
        top: 45px;
        left: 135px;
        z-index: 1;
    } 

    .stepper .nav-tabs>li.completed::after {
        background: #34bc9b;
    }

    .stepper .nav-tabs>li:last-child::after {
        background: transparent;
    }

    .stepper .nav-tabs>li.active:last-child .round-tab {
        /* background: #34bc9b; */
        /* color: white; */
        font-weight: bold;
    }

    .stepper .nav-tabs>li.active:last-child .round-tab::after {
        /* content: '✔'; */
        color: #fff;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        top: 0;
        display: block;
    }

    .stepper .nav-tabs [data-toggle='tab'] {
        /* width: 25px; */
        /* height: 200px; */
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        border: none;
        padding: 0;
        color: #f1f1f1;
    }

    .stepper .nav-tabs [data-toggle='tab']:hover {
        background: transparent;
        border: none;
    }

    .stepper .nav-tabs>.active>[data-toggle='tab'],
    .stepper .nav-tabs>.active>[data-toggle='tab']:hover,
    .stepper .nav-tabs>.active>[data-toggle='tab']:focus {
        color: #34bc9b;
        cursor: default;
        border: none;
    }

    .stepper .tab-pane {
        position: relative;
        padding-top: 50px;
    }

    .stepper .round-tab {
        width: 200px;
        /* height: 25px; */
        height: 60px;
        line-height: 22px;
        display: inline-block;
        border-radius: 25px;
        /* background: #fff; */
        background: #7EC8E3;
        /* border: 2px solid #34bc9b; */
        color: #fff;
        z-index: 2;
        position: absolute;
        /* left: 0; */
        left: 40px;
        text-align: center;
        font-size: 14px;
        padding-top: 8px;
    }

    .stepper .completed .round-tab {
        /* background: #34bc9b; */
        /* color: white; */
        font-weight: bold;
    }

    .stepper .completed .round-tab::after {
        /* content: '✔'; */
        color: #fff;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        top: 0;
        display: block;
    }

    .stepper .active .round-tab {
        /* background: #fff; */
        background: #7EC8E3;

    }

    .stepper .active .round-tab:hover {
        /* background: #fff; */
        background: #7EC8E3;

    }

    .stepper .active .round-tab::after {
        display: none;
    }

    .stepper .disabled .round-tab {
        /* background: #fff; */
        background: #7EC8E3;
        color: #fff;
        border-color: #f1f1f1;
        cursor: pointer;
    }

    .stepper .disabled .round-tab:hover {

        border: 2px solid #a6dfd3;
    }

    .stepper .disabled .round-tab::after {
        display: none;
    }

    .stepper .tab-content {
        margin: auto;
        width: 80%;
    }

    .invalid {
        background: #76B947 !important;
        color: #fff !important;
        font-weight: bold;
    }

    .down-arrow{
        left: 130px;
        top: 20px;
    }
</style>
<br />
<div>
    <!-- <div class="panel panel-default">
        <div class="panel-body" [hidden]="!(isLoggedIn == true)">
            <button type="submit" class="btn btn-primary"  (click)="SignOut()">Sign Out</button>
        </div>
        <div class="panel-body" [hidden]="(isLoggedIn == true)">
            <button type="submit" class="btn btn-primary"  (click)="SignIn()">Sign In</button>
        </div>
    </div> -->
    <div class="panel panel-default">
        <div class="panel-body">

            <div class="stepper">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a class="persistant-disabled" href="#stepper-step-0" data-toggle="tab" id='nav_do'
                            aria-controls="stepper-step-0" role="tab" title="Step 0">
                            <span id="devtab1" class="round-tab" >Developer <br />(Offshore)</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" id='nav_noi'
                            aria-controls="stepper-step-1" role="tab" title="Step 1">
                            <span id="devtab2" class="round-tab" >Notice of Intent <br />(NOI)</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" id='nav_sap'
                            aria-controls="stepper-step-2" role="tab" title="Step 2">
                            <span id="devtab3" class="round-tab" >Site Assessment <br />(SAP)</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a class="persistant-disabled" href="#stepper-step-3" data-toggle="tab" id='nav_cop'
                            aria-controls="stepper-step-3" role="tab" title="Step 3">
                            <span id="devtab4" class="round-tab" >Construction Operation Plan <br />(COP)</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a class="persistant-disabled" href="#stepper-step-4" data-toggle="tab" id='nav_fir'
                            aria-controls="stepper-step-4" role="tab" title="Step 4">
                            <span id="devtab5" class="round-tab" >Fabrication & Installation <br />Report
                                (FIR)/(FDR)</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled" style="margin-left: 20%;">
                        <span class="glyphicon glyphicon-arrow-down down-arrow"></span>
                        <a class="persistant-disabled" href="#stepper-step-5" data-toggle="tab" id='nav_ea'
                            aria-controls="stepper-step-5" role="tab" title="Step 5">
                            <span id="devtab6" class="round-tab" >Environmental <br />Assessment</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <span class="glyphicon glyphicon-arrow-down down-arrow" ></span>
                        <a class="persistant-disabled" href="#stepper-step-6" data-toggle="tab" id='nav_nepa'
                            aria-controls="stepper-step-6" role="tab" title="Step 6">
                            <span id="devtab7" class="round-tab" >NEPA Actions/Review <br />(as Required)</span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <span class="glyphicon glyphicon-arrow-down down-arrow"></span>
                        <a class="persistant-disabled" href="#stepper-step-7" data-toggle="tab" id='nav_boem'
                            aria-controls="stepper-step-7" role="tab" title="Step 7">
                            <span id="devtab8" class="round-tab" >BOEM Technical Review <br />(EIS/NEPA)</span>
                        </a>
                    </li>
                </ul>
                <!-- <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" href="#stepper-step-5" data-toggle="tab"
                                aria-controls="stepper-step-5" role="tab" title="Step 5">
                                <span class="round-tab">Notice of Intent (NOI)</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" href="#stepper-step-6" data-toggle="tab"
                                aria-controls="stepper-step-6" role="tab" title="Step 6">
                                <span class="round-tab">Site Assessment (SAP)</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" href="#stepper-step-7" data-toggle="tab"
                                aria-controls="stepper-step-7" role="tab" title="Step 7">
                                <span class="round-tab">Construction Operation Plan (COP)</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" href="#stepper-step-8" data-toggle="tab"
                                aria-controls="stepper-step-8" role="tab" title="Complete">
                                <span class="round-tab">Fabrication & Installation Report (FIR)/(FDR)</span>
                            </a>
                        </li>
                    </ul> -->
                <form role="form">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-0">

                            <h3 class="h2">Developer Offshore</h3>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <br />
                            <br />
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-primary next-step" id='do_next'>Next</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-1">

                            <h3 class="h2">Notice of Intent (NOI)</h3>

                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" >
                                        <label class="form-check-label" for="exampleCheck2">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step" id='noi_prev'>Back</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" id='noi_next'>Next</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
                            <h3 class="h2">Site Assessment Plan (SAP)</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck3"  >
                                        <label class="form-check-label" for="exampleCheck3">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step" id='sap_prev'>Back</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" id='sap_next'>Next</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-3">
                            <h3 class="hs">Construction Operation Plan (COP)</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck4" >
                                        <label class="form-check-label" for="exampleCheck4">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step" id='cop_prev'>Back</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" id='cop_next'>Next</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
                            <h3>Fabrication & Installation Report (FIR) / (FDR)</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck5" >
                                        <label class="form-check-label" for="exampleCheck5">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step" id='fir_prev'>Back</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" id='fir_next'>Mark as Complete</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-5">
                            <h3>Environmental Assessment</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck6" >
                                        <label class="form-check-label" for="exampleCheck6">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step" id='ea_prev'>Back</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" id='ea_next'>Next</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-6">
                            <h3>NEPA Actions/Review (as Required)</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck7" >
                                        <label class="form-check-label" for="exampleCheck7">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step" id='nepa_prev'>Back</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" id='nepa_next'>Next</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-7">
                            <h3>BOEM Technical Review (EIS/NEPA)</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck8">
                                        <label class="form-check-label" for="exampleCheck8">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step" id='boem_prev'>Back</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" id='boem_next'>Next</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </form>
            </div>


        </div>
    </div>
    <!-- <div class="panel panel-default"  [hidden]="!(isLoggedIn == true)">
        <div class="panel-body">
            <button type="submit" class="btn btn-primary"  [hidden]="!isLoggedIn" (click)="Save()">Save</button>
        </div>
    </div> -->
</div>

<?php
get_footer();
?>