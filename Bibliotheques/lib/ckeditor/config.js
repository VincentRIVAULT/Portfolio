/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'fr';
    config.uiColor = '#AADC6E';
	
	// config.bodyClass = 'contents';

	// config.bodyId = 'contents_id';

    config.contentsCss = [ 'lib/ckeditor/contents.css', 'css/style.css' ];
	// config.contentsCss = [ 'lib/ckeditor/contents.css' ];
    // config.contentsCss = [ 'css/style.css' ];

	// config.toolbar = [['Source', '-', 'NewPage', '-', 'Templates', 'fontawesome5']];

	config.extraPlugins = 'fontawesome5';

	config.fontawesome = { 'path':'lib/ckeditor/plugins/fontawesome5/css/fontawesome5.css', 'version':'5.13.0', 'edition':'free', 'element':'i' };
	// config.fontawesome = { 'path':'/CEFii/Dossier_Projet/portfolio_vincent_rivault/lib/ckeditor/plugins/fontawesome5/css/fontawesome5.css', 'version':'5.13.0', 'edition':'free', 'element':'i' };

	config.allowedContent = true;

	CKEDITOR.dtd.$removeEmpty['i'] = false;

    config.removePlugins = 'easyimage, cloudservices';

	// Define changes to default configuration here. For example:
    config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}';



};
