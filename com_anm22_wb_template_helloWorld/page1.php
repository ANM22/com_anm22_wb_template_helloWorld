<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<? $this->getHead(); ?>
    <link rel="stylesheet" href="http://www.anm22.it/app/webbase/framework/css/anm22_wb_fw.css">
    <link rel="stylesheet" href="<? if (($this->link != "index") and ($this->link != "")) { ?>../<? }?>../ANM22WebBase/website/template/com_anm22_wb_template_helloWorld/css/style.css">
    <style type="text/css">
		body {
			background:<?=$this->pageOptions['background-color']?>;
			padding: 0px;
			margin:0px;
			font-family:Arial, Helvetica, sans-serif;
			width:100%;
			height:100%;
		}
		a {
			text-decoration: none;
		}
		a:hover {
			text-decoration: none;
		}
		a:visited {
			text-decoration: none;
		}
		h1 {
			color:<?=$this->pageOptions['h1-color']?>;
		}
		h2 {
			color:<?=$this->pageOptions['h2-color']?>;
		}
		h3 {
			color:<?=$this->pageOptions['h3-color']?>;
		}
		p {
			color:<?=$this->pageOptions['p-color']?>;
		}
	</style>
</head>
<body>
	<? if ($this->layout_header == 1) {?><header><? $this->showContainer('h'); ?></header><? }?>
    <div class="pagebody">
		<?
        /* Left Side */
        if ($this->layout_leftside == 1)
        {
            if (($this->layout_leftside == 1) and ($this->layout_rightside == 1))
            {
                ?>
                <aside id="leftside" class="anm22_wb_fw_div_col_xl_3 anm22_wb_fw_div_col_sm_12">
                <?
            }
            else
            {
                ?>
                <aside id="leftside" class="anm22_wb_fw_div_col_xl_4 anm22_wb_fw_div_col_sm_12">
                <?
            }
            ?>
                <? $this->showContainer('l'); ?>
            </aside>
            <?
        }
		/* Section */
        if (($this->layout_leftside != 1) and ($this->layout_rightside != 1))
        {
            ?>
            <section class="anm22_wb_fw_div_col_xl_12">
            <?
        }
        else
        if (($this->layout_leftside == 1) and ($this->layout_rightside == 1))
        {
            ?>
            <section class="anm22_wb_fw_div_col_xl_6 anm22_wb_fw_div_col_sm_12">
            <?
        }
        else
        if ((($this->layout_leftside != 1) and ($this->layout_rightside == 1)) or (($this->layout_leftside == 1) and ($this->layout_rightside != 1)))
        {
            ?>
            <section class="anm22_wb_fw_div_col_xl_8 anm22_wb_fw_div_col_sm_12">
            <?
        }
        ?>
            <? $this->showContainer('b'); ?>
        </section>
        <?
        if ($this->layout_rightside == 1)
        {
            if (($this->layout_leftside == 1) and ($this->layout_rightside == 1))
            {
                ?>
                <aside id="rigthside" class="anm22_wb_fw_div_col_xl_3 anm22_wb_fw_div_col_sm_12">
                <?
            }
            else
            {
                ?>
                <aside id="rigthside" class="anm22_wb_fw_div_col_xl_4 anm22_wb_fw_div_col_sm_12">
                <?
            }
            ?>
                <? $this->showContainer('r'); ?>
            </aside>
            <?
        }
        ?>
        <div class="anm22_wb_fw_clear"></div>
    </div>
    <div class="anm22_wb_fw_clear"></div>
	<?
    if ($this->layout_footer == 1)
	{
		?>
        <footer>
            <div class="com_anm22_wb_template_fsal_footer_conteiner">
				<? $this->showContainer('f'); ?>
            </div>
            <div class="anm22_wb_fw_clear"></div>
		</footer>
		<?
	}
	?>
</body>
</html>