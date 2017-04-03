<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> :: Shiftwave Business Website Login :: </title>
        <link href="<?php echo BASE_URL ?>/assets/css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Header Starts Here -->
        <div class="headerDivMn">
            <div class="headerInnDiv">
                <div class="logoDiv"><a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>/assets/images/logo_sample.png" border="0" width="50%" /></a></div>
                <?php if ($header == 'Dashboard_header') { ?>
                    <div class="logoutBtnHme"><a href="javascript:void();">LogOut</a></div>
                <?php } else { ?>
                    <div class="menuMnDiv">
                        <div class="tabsJ">
                            <ul>
                                <li><a href="<?php echo BASE_URL ?>Dashboard" ><span>Home</span></a></li>
                                <li><a href="<?php echo BASE_URL ?>Transactions" ><span>Transactions</span></a></li>
                                <li><a href="javascript:void();" ><span>Settings</span></a></li>
                                <li><a href="javascript:void();" ><span>LogOut</span></a></li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <!-- Header Ends Here -->


