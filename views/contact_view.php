<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <body>


        <!--breadcrumbs start-->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>Contacts</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>" >Home</a></li>
                            <li class="active">Contacts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->



        <!--container start-->
        <div class="container">


            <div class="row">
                <div class="col-lg-5 col-sm-5 address">
                    <section class="contact-infos">
                        <h4 class="title custom-font text-black">
                            ADDRESS
                        </h4>
                        <address>
                            Address: Katchery Road,
                            <br>
                            Lahore
                            <br>
                            5400
                        </address>
                    </section>
                    <section class="contact-infos">
                        <h4 class="title custom-font text-black">
                            Meeting Hours
                        </h4>
                        <p>
                            Monday - Friday 8am to 4pm
                            <br>
                            Saturday - Closed
                            <br>
                            Sunday- Closed
                            <br>
                        </p>
                    </section>
                    <section class="contact-infos">
                        <h4>
                            TELEPHONE
                        </h4>
                        <p>
                            <i class="icon-phone">
                            </i>
                            +92 111-000-010 Ext:269
                        </p>



                    </section>
                </div>
                <div class="col-lg-7 col-sm-7 address">

                    <h4>
                        Drop us a line so that we can hear from you
                    </h4>
                    <div class="contact-form">
                        <form role="form" method="POST" action="">
                            <div class="form-group">
                                <label for="name">
                                    Name
                                </label>
                                <input type="text" placeholder="" id="name_form" class="form-control" required>
                                <div class="alert alert-danger" style="margin-top: 8px; display: none;" id="wrong_name">Please Fill This field!</div>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" placeholder="" id="email_form" class="form-control" required>
                                <div class="alert alert-danger" style="margin-top: 8px; display: none;" id="wrong_mail">Please Fill This field!</div>
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    Subject
                                </label>
                                <input type="text" id="subject_form" class="form-control" required>
                                <div class="alert alert-danger" style="margin-top: 8px; display: none;" id="wrong_subject">Please Fill This field!</div>
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    Message
                                </label>
                                <textarea rows="5" id="message_form" class="form-control" required>
                                </textarea>
                                <div class="alert alert-danger" style="margin-top: 8px; display: none;" id="wrong_message">Please Fill This field!</div>
                            </div>
                            <input type="button" value="Submit" class="btn btn-info" onclick="send_mail();">

                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!--container end-->
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="m_head">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body" id="m_body">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button" onclick="location.reload();">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>