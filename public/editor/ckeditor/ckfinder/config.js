/*
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see license.txt or http://cksource.com/ckfinder/license
*/

CKFinder.customConfig = function( config )
{
   config.filebrowserBrowseUrl = '../public/upload';
   config.filebrowserImageBrowseUrl = 'ckfinder/ckfinder.html?type=Images';
   config.filebrowserFlashBrowseUrl = 'ckfinder/ckfinder.html?type=Flash';
   config.filebrowserUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
   config.filebrowserImageUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
   config.filebrowserFlashUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	
};
