<?php error_reporting(0); ?>
<html>

    <head>
        <meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\">

        <title>BSCS Admission Fees Challan</title>
        <style>
            <!--
            /* Font Definitions */
            @font-face
            {font-family:\"Cambria Math\";
             panose-1:2 4 5 3 5 4 6 3 2 4;}
            @font-face
            {font-family:Calibri;
             panose-1:2 15 5 2 2 2 4 3 2 4;}
            /* Style Definitions */
            p.MsoNormal, li.MsoNormal, div.MsoNormal
            {margin-top:0in;
             margin-right:0in;
             margin-bottom:10.0pt;
             margin-left:0in;
             line-height:115%;
             font-size:10.0pt;
             font-family:\"Calibri\",\"sans-serif\";}
            .MsoPapDefault
            {margin-bottom:10.0pt;
             line-height:115%;}
            @page WordSection1
            {size:8.0in 10.0in;
             margin:.25in .5in .25in .5in;}
            div.WordSection1
            {page:WordSection1;}
            -->
        </style>

    </head>

    <body lang=EN-US onload="window.print();">

        <div class=WordSection1>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:19.0pt'>HABIB BANK
                    LIMITED</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:16.0pt'>Bank Copy</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in; margin-bottom:.0001pt; text-align:center;line-height:normal'>
                <span style='font-size:13.0pt'>BSCS Admission 2017 Fee Challan, payable at all Online branches of HBL</span>
            </p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:14.0pt'>Credit: Online
                    Account # </span><b><u><span style='font-size:14.0pt;font-family:\"Arial\",\"sans-serif\"'>2398-70000005-03
                            HBL GC University Lahore</span></u></b></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
                       font-family:\"Arial\",\"sans-serif\"'>in favor of: <u>VC GC University, Lahore</u></span></b></p>

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td width=134 valign=top style='width:100.35pt;border:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>CHALLAN NUMBER:</p>
                    </td>
                    <td width=101 valign=top style='width:75.95pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><b><u><span style='font-size:14.0pt'><?php echo $this->session->userdata('cnic'); ?></span></u></b></p>
                    </td>
                    <td width=116 valign=top style='width:87.25pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Issue Date: </p>
                    </td>
                    <td width=120 valign=top style='width:1.25in;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><u><?php echo date("d-m-Y"); ?></u></p>
                    </td>
                    <td width=190 valign=top style='width:142.35pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Last Date:<u>18/08/2017</u></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal'>Depositor
                Name<u>: <?php echo strtoupper($this->session->userdata('name')); ?></u> , Son/Daughter Of : <?php echo strtoupper($father_name); ?>, District : <?php echo ucfirst($district); ?></p>

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td width=294 valign=top style='width:220.75pt;border:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Particulars</p>
                    </td>
                    <td width=176 valign=top style='width:131.65pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Amount</p>
                    </td>
                    <td width=191 valign=top style='width:143.5pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Amount in Words</p>
                    </td>
                </tr>
                <tr>
                    <td width=294 valign=top style='width:220.75pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>BSCS Admission 2017 Application #: <?php echo $this->session->userdata('cnic'); ?></p>
                    </td>
                    <td width=176 valign=top style='width:131.65pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><b><span style='font-size:14.0pt'>Rs. 500/-</span></b></p>
                    </td>
                    <td width=191 valign=top style='width:143.5pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Rupees Five Hundred Only</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal>&nbsp;</p>

            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
               normal'>Branch Stamp &amp; Signature ______________________</p>

            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
               margin-left:1.0in;margin-bottom:.0001pt;text-indent:.5in;line-height:normal'>
                Habib Bank Limited</p>

            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
               normal'>. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .
                . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .
                . . . . . . . . . . . . . . . . </p>

            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
               normal'>&nbsp;</p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:19.0pt'>HABIB BANK
                    LIMITED</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:16.0pt'>Depositor(Candidate)
                    Copy</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:13.0pt'>BSCS
                    Admission 2017 Fee Challan, payable at all Online branches of HBL</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:14.0pt'>Credit: Online
                    Account # </span><b><u><span style='font-size:14.0pt;font-family:\"Arial\",\"sans-serif\"'>2398-70000005-03
                            HBL GC University Lahore</span></u></b></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
                       font-family:\"Arial\",\"sans-serif\"'>in favor of: <u>VC GC University, Lahore</u></span></b></p>

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td width=134 valign=top style='width:100.35pt;border:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>CHALLAN NUMBER:</p>
                    </td>
                    <td width=101 valign=top style='width:75.95pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><b><u><?php echo $this->session->userdata('cnic'); ?></u></b></p>
                    </td>
                    <td width=116 valign=top style='width:87.25pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Issue Date: </p>
                    </td>
                    <td width=120 valign=top style='width:1.25in;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><u><?php echo date("d-m-Y"); ?></u></p>
                    </td>
                    <td width=190 valign=top style='width:142.35pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Last Date:<u>18/08/2017</u></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal'>Depositor
                Name<u>: <?php echo strtoupper($this->session->userdata('name')); ?></u> , Son/Daughter Of  : <?php echo strtoupper($father_name); ?>, District : <?php echo ucfirst($district); ?></p>

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td width=294 valign=top style='width:220.75pt;border:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Particulars</p>
                    </td>
                    <td width=176 valign=top style='width:131.65pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Amount</p>
                    </td>
                    <td width=191 valign=top style='width:143.5pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Amount in Words</p>
                    </td>
                </tr>
                <tr>
                    <td width=294 valign=top style='width:220.75pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>BSCS Admission 2017 Application #: <?php echo $this->session->userdata('cnic'); ?></p>
                    </td>
                    <td width=176 valign=top style='width:131.65pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><b><span style='font-size:14.0pt'>Rs. 500/-</span></b></p>
                    </td>
                    <td width=191 valign=top style='width:143.5pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Rupees Five Hundred Only</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal>&nbsp;</p>

            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
               normal'>Branch Stamp &amp; Signature ______________________</p>

            <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
               margin-left:1.0in;margin-bottom:.0001pt;text-indent:.5in;line-height:normal'>
                Habib Bank Limited</p>

            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
               normal'>. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .
                . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .
                . . . . . . . . . . . . . . . .  </p>

            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
               normal'>&nbsp;</p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:19.0pt'>HABIB BANK
                    LIMITED</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:16.0pt'>Treasurer Copy
                    (</span><span style='font-size:16.0pt'>Must be submitted in CS Admission Cell, GCU, or email picture at csadmissions@gcu.edu.pk)</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:13.0pt'>BSCS
                    Admission 2017 Fee Challan, payable at all Online branches of HBL</span></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><span style='font-size:14.0pt'>Credit: Online
                    Account # </span><b><u><span style='font-size:14.0pt;font-family:\"Arial\",\"sans-serif\"'>2398-70000005-03
                            HBL GC University Lahore</span></u></b></p>

            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
               text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
                       font-family:\"Arial\",\"sans-serif\"'>in favor of: <u>VC GC University, Lahore</u></span></b></p>

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td width=134 valign=top style='width:100.35pt;border:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>CHALLAN NUMBER:</p>
                    </td>
                    <td width=101 valign=top style='width:75.95pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><b><u><?php echo $this->session->userdata('cnic'); ?></u></b></p>
                    </td>
                    <td width=116 valign=top style='width:87.25pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Issue Date: </p>
                    </td>
                    <td width=120 valign=top style='width:1.25in;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><u><?php echo date("d-m-Y"); ?></u></p>
                    </td>
                    <td width=196 valign=top style='width:146.85pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Last Date:<u>18/08/2017</u></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal'>Depositor
                Name<u>: <?php echo strtoupper($this->session->userdata('name')); ?></u>, Son/Daughter Of  : <?php echo strtoupper($father_name); ?>, District : <?php echo ucfirst($district); ?></p>

            <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                   style='border-collapse:collapse;border:none'>
                <tr>
                    <td width=294 valign=top style='width:220.75pt;border:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Particulars</p>
                    </td>
                    <td width=176 valign=top style='width:131.65pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Amount</p>
                    </td>
                    <td width=197 valign=top style='width:148.0pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Amount in Words</p>
                    </td>
                </tr>
                <tr>
                    <td width=294 valign=top style='width:220.75pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>BSCS Admission 2017 Application #: <?php echo $this->session->userdata('cnic'); ?></p>
                    </td>
                    <td width=176 valign=top style='width:131.65pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'><b><span style='font-size:14.0pt'>Rs. 500/-</span></b></p>
                    </td>
                    <td width=197 valign=top style='width:148.0pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                           normal'>Rupees Five Hundred Only</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal>&nbsp;</p>

            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
               normal'>Branch Stamp &amp; Signature ______________________Habib Bank
                Limited</p>

        </div>

    </body>

</html>
