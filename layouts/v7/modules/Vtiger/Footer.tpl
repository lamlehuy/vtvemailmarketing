{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

<footer class="app-footer">
	<p>
		Cung cấp bởi <a href="http://quanlykhachhang.info" target="_blank">VTV-CRM</a> - 7.0&nbsp;&nbsp;© 2017 - {date('Y')}
        &nbsp;|&nbsp;<a href="http://quanlykhachhang.info/faq" target="_blank">Câu hỏi thường gặp</a>
        &nbsp;|&nbsp;<a href="http://quanlykhachhang.info/video" target="_blank">Video hướng dẫn</a>
        &nbsp;|&nbsp;<a href="http://quanlykhachhang.info/contact" target="_blank">Liên hệ</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint">{Zend_Json::encode($LANGUAGE_STRINGS)}</div>
<div class="modal myModal fade"></div>
{include file='JSResources.tpl'|@vtemplate_path}
</body>

</html>