<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<style>
    @media (max-width: 470px) {

        #lefti{
           Display:block;
           width:100%;
height:70%;
        }
    }
</style>
    <body >
        <div id="lefti" class="left">
            <a href="<?php echo base_url('admissions'); ?>">
                <div class="item activate">
                    <span class="fa fa-book fa-2x"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; BS Admission
                </div>
            </a>
            <a href="<?php echo base_url('howapply'); ?>">
                <div class="item">
                    <span class="fa fa-2x fa-question-circle"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; How to Apply
                </div>
            </a>
            <a href="<?php echo base_url('criteria'); ?>">
                <div class="item">
                    <span class="fa fa-2x fa-spinner"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Admission Criteria
                </div>
            </a>

            <a href="<?php echo base_url('feestructure'); ?>">
                <div class="item">
                    <span class="fa fa-2x fa-money"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Fee Structure
                </div>
            </a>
            <a href="<?php echo base_url('meritformula'); ?>">
                <div class="item">
                    <span class="fa fa-2x fa-spinner"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Merit Formula
                </div>
            </a>
            <a href="<?php echo base_url('reserve'); ?>">
                <div class="item">
                    <span class="fa fa-2x fa-wheelchair"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Reserved Seats
                </div>
            </a>
            <a href="<?php echo base_url('entrytest'); ?>">
                <div class="item">
                    &nbsp;&nbsp;<span class="fa fa-2x fa-file-o "></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Entry Test
                </div>
            </a>
            <a href="<?php echo base_url('document'); ?>">
                <div class="item">
                    &nbsp;&nbsp;<span class="fa fa-2x fa-file "></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Documents Required
                </div>
            </a>

            <a href="<?php echo base_url('roadmap'); ?>">
                <div class="item">
                    <span class="fa fa-2x fa-road"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Road Map
                </div>
            </a>
            <a href="<?php echo base_url('society'); ?>">
                <div class="item">
                    &nbsp;  <span class="fa fa-2x fa-shield"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Societies & Student Bodies
                </div>
            </a>
            <a href="<?php echo base_url('faq'); ?>">
                <div class="item">
                    <span class="fa fa-2x fa-comment-o"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp; Frequently Asked Questions
                </div>
            </a>
        </div>

    </body>
</html>