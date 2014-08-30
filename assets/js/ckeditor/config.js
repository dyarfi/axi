/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */
		
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];	
	
	config.enterMode				= CKEDITOR.config.ENTER_BR;
	config.shiftEnterMode			= CKEDITOR.config.ENTER_BR;	
	
	// Intentionally filtered HTML.
	config.allowedContent = 'div{class}; span{class}; p h1{text-align}; a[!href]; strong em';
	
	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
};

CKEDITOR.editorConfig = function(config) {
   config.filebrowserBrowseUrl 		=  base_URL+'assets/js/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl =  base_URL+'assets/js/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl =  base_URL+'assets/js/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl		=  base_URL+'assets/js/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl =  base_URL+'assets/js/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl =  base_URL+'assets/js/kcfinder/upload.php?type=flash';
};
	