<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <?php
        $siteUrl = getenv('siteUrl')
    ?>
</head>
<body style="color: #222222; font-family: Helvetica, Arial, sans-serif; font-size: 14px;">
<table style="width: 100%">
    <tr>
        <td align="center">
            <table style="width: auto; max-width: 600px; margin: 0 auto; vertical-align: top;" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <a href="http://archerhotel.com/austin/meetings-events" target="_blank">
                            <img src="<?= $siteUrl ?>/images/email/austin/haute-spot-5-23.jpg" style="width: 600px;" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="mailto:kristen.bray@archerhotel.com?subject=RSVP for June 5th">
                            <img src="<?= $siteUrl ?>/images/email/shared/rsvp.jpg" style="width: 600px;" />
                        </a>
                    </td>
                </tr>
            </table>
			<?php include 'inc/footer.austin.php';?>
            </table>
        </td>
    </tr>
</table>
</body>
</html>