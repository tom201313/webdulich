﻿/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	config.skin="kama";  // có thể đổi thành 1 trong 3 giá trị sau: v2, kama, office2003
	config.enterMode = CKEDITOR.ENTER_BR;
	config.filebrowserBrowseUrl = "http://localhost/funnyfamily/public/include/ckfinder/ckfinder.html";
config.filebrowserImageBrowseUrl = "http://localhost/funnyfamily/public/include/ckfinder/ckfinder.html?type=Images";
config.filebrowserFlashBrowseUrl = "http://localhost/funnyfamily/public/include/ckfinder/ckfinder.html?type=Flash";
config.filebrowserUploadUrl = "http://localhost/funnyfamily/public/include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
config.filebrowserImageUploadUrl = "http://localhost/funnyfamily/public/include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
config.filebrowserFlashUploadUrl = "http://localhost/funnyfamily/public/include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
