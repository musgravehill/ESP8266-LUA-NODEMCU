@charset "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;text-decoration:none}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	background-color: rgb(240,240,240);

	overflow-y: scroll !important;
}

body
{
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-size-adjust: 100%;

	font-family: 'Roboto', sans-serif;
color: rgb(20,20,20);
word-wrap: break-word;
line-height: 1.28;

}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

[dir=auto] { text-align: left; }

a:link,
a:visited
{
	color: #176093;
text-decoration: none;

}

	a[href]:hover
	{
		text-decoration: underline;

	}
	
	a:hover
	{
		_text-decoration: underline;
	}
	
	a.noOutline
	{
		outline: 0 none;
	}
	
	.emCtrl,
	.messageContent a
	{
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			-webkit-box-shadow: 5px 5px 7px #CCCCCC; -moz-box-shadow: 5px 5px 7px #CCCCCC; -khtml-box-shadow: 5px 5px 7px #CCCCCC; box-shadow: 5px 5px 7px #CCCCCC;
			outline: 0 none;
		}
		
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				-webkit-box-shadow: 2px 2px 7px #CCCCCC; -moz-box-shadow: 2px 2px 7px #CCCCCC; -khtml-box-shadow: 2px 2px 7px #CCCCCC; box-shadow: 2px 2px 7px #CCCCCC;
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		padding: 0 3px;
margin: 0 -3px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

	}
	
		.ugc a:hover,
		.ugc a:focus
		{
			color: #6d3f03;
background: #fff4e5 url('styles/default/xenforo/gradients/category-23px-light.png') repeat-x top;

		}
		
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
		
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 18pt;
overflow: hidden;
zoom: 1;

}

	.titleBar h1 em
	{
		color: rgb(100,100,100);
	}
		
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 11px;
color: rgb(150,150,150);
margin-top: 2px;

}

.topCtrl
{
	float: right;
}
	
	.topCtrl h2
	{
		font-size: 12pt;
	}
		
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar 
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
} 

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(255, 255, 255);
padding: 2px;
border: 1px solid #a5cae4;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;

}

.avatar.plainImage img,
.avatar.plainImage .img
{
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	padding: 0;
	background-position: left top;
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		background-position: 2px 2px;
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 192px; height: 192px; }

.avatarCropper
{
	width: 192px;
	height: 192px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 192px;
	height: 192px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 192px;
	_width: 192px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(100,100,100); }
body .muted, body a.muted, body .muted a { color: rgb(150,150,150); }
body .faint, body a.faint, body .faint a { color: rgb(200,200,200); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 11px;
color: rgb(255, 255, 255);
background: url(rgba.php?r=0&g=0&b=0&a=153); background: rgba(0,0,0, 0.6); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);
padding: 5px 10px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: rgb(255, 255, 255);
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top:  6px solid rgb(0,0,0); border-top:  6px solid rgba(0,0,0, 0.6); _border-top:  6px solid rgb(0,0,0);
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(0,0,0); border-right-color:  rgba(0,0,0, 0.6); _border-right-color:  rgb(0,0,0);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
			
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	border: 10px solid #032A46;
-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
position: relative;
-webkit-box-shadow: 0px 12px 25px rgba(0,0,0, 0.5); -moz-box-shadow: 0px 12px 25px rgba(0,0,0, 0.5); -khtml-box-shadow: 0px 12px 25px rgba(0,0,0, 0.5); box-shadow: 0px 12px 25px rgba(0,0,0, 0.5);
width: 400px;

	
	display: none;	
	z-index: 15000;
	cursor: default;
	
	border-color:  rgb(3, 42, 70); border-color:  rgba(3, 42, 70, 0.5); _border-color:  rgb(3, 42, 70);
}

	.xenPreviewTooltip .arrow
	{
		border-top:  15px solid rgb(3,42,70); border-top:  15px solid rgba(3,42,70, 0.25); _border-top:  15px solid rgb(3,42,70);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		
		_display: none;
	}
	
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid rgb(255, 255, 255);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		margin: 0;
	}
	
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
		}

/* ***************************** */

.importantMessage
{
	margin: 10px 0;
	color: #6d3f03;
	background-color: #fff4e5;
	text-align: center;
	padding: 5px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: solid 1px #f9bc6d;
}

.importantMessage a
{
	font-weight: bold;
	color: #6d3f03;
}

/* ***************************** */

.section
{
	margin: 10px auto;

}

.sectionMain
{
	background-color: rgb(255, 255, 255);
margin: 10px auto;

}

.heading,
.xenForm .formHeader
{
	font-weight: bold;
font-size: 11pt;
color: #f0f7fc;
background-color: #65a5d1;
padding: 5px 10px;
margin-bottom: 3px;
border-bottom: 1px solid #176093;
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;

}

	.heading a { color: #f0f7fc; }

.subHeading
{
	font-size: 11px;
color: #6d3f03;
background-color: #fff4e5;
padding: 5px 10px;
margin: 3px auto 0;
border: 1px solid #f9bc6d;

}

	.subHeading a { color: #6d3f03; }

.textHeading,
.xenForm .sectionHeader
{
	font-weight: bold;
color: rgb(20,20,20);
padding-bottom: 2px;
margin: 10px auto 5px;
border-bottom: 1px solid #d7edfc;

}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: #a5cae4;
	font-size: 11pt;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
		color: #a5cae4;
	}

.primaryContent
{
	background-color: rgb(255, 255, 255);
padding: 10px;

}

	.primaryContent a
	{
		color: #176093;

	}

.secondaryContent
{
	background-color: rgb(255, 255, 255);
padding: 10px;

}

	.secondaryContent a
	{
		color: #176093;

	}

.sectionFooter
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
color: #65a5d1;
background: #d7edfc url('styles/default/xenforo/gradients/category-23px-light.png') repeat-x top;
padding: 4px 10px;
border-bottom: 1px solid #a5cae4;
line-height: 16px;

}

	.sectionFooter a { color: #65a5d1; }

	.sectionFooter .left
	{
		float: left;
	}

	.sectionFooter .right
	{
		float: right;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}

.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 11px;
background: #f0f7fc url('styles/default/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 0 10px;
border-bottom: 1px solid #a5cae4;
word-wrap: normal;
min-height: 23px;
_height: 23px;

	
	display: table;
	width: 100%;
	*width: auto;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.tabs li
{
	float: left;
}

.tabs li a,
.tabs.noLinks li
{
	color: rgb(20,20,20);
text-decoration: none;
background: #d7edfc url('styles/default/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 0 8px;
margin-right: -1px;
margin-bottom: -1px;
border: 1px solid #a5cae4;
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;
display: inline-block;
line-height: 22px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;
height: 22px;

}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	text-decoration: none;
background-color: #a5cae4;
		
}

.tabs li.active a,
.tabs.noLinks li.active
{
	background-color: rgb(255, 255, 255);
padding-bottom: 1px;
border-bottom: 1px none black;

}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 30px 0;
}


@media (max-width:480px)
{
	.Responsive .tabs li
	{
		float: none;
	}

	.Responsive .tabs li a,
	.Responsive .tabs.noLinks li
	{
		display: block;
	}
	
	.Responsive .tabs
	{
		display: flex;
		display: -webkit-flex;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
	}
	
	.Responsive .tabs li
	{
		flex-grow: 1;
		-webkit-flex-grow: 1;
		text-align: center;
	}
	
	.Responsive .xenForm .tabs,
	.Responsive .xenFormTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}
}


/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	background: transparent url('styles/default/xenforo/xenforo-ui-sprite.png') no-repeat -32px 0;
margin-top: -2px;
margin-left: 2px;
display: inline-block;
*margin-top: 0;
vertical-align: middle;
width: 13px;
height: 14px;

}

.PopupOpen .arrowWidget
{
	/* circle-arrow-up */
	background-position: -16px 0;

}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: #176093;
text-decoration: none;
background-color: #d7edfc;

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		color: #2b485c;
background: #6cb2e4 url('styles/default/xenforo/gradients/tab-unselected-25px-light.png') repeat-x top;
-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
-webkit-border-bottom-right-radius: 0px; -moz-border-radius-bottomright: 0px; -khtml-border-bottom-right-radius: 0px; border-bottom-right-radius: 0px;
-webkit-border-bottom-left-radius: 0px; -moz-border-radius-bottomleft: 0px; -khtml-border-bottom-left-radius: 0px; border-bottom-left-radius: 0px;
text-shadow: 0 0 0 transparent, 1px 1px 2px white;

	}
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
		-webkit-border-top-left-radius: 0px; -moz-border-radius-topleft: 0px; -khtml-border-top-left-radius: 0px; border-top-left-radius: 0px;
		-webkit-border-top-right-radius: 0px; -moz-border-radius-topright: 0px; -khtml-border-top-right-radius: 0px; border-top-right-radius: 0px;
		-webkit-border-bottom-left-radius: 3px; -moz-border-radius-bottomleft: 3px; -khtml-border-bottom-left-radius: 3px; border-bottom-left-radius: 3px;
		-webkit-border-bottom-right-radius: 3px; -moz-border-radius-bottomright: 3px; -khtml-border-bottom-right-radius: 3px; border-bottom-right-radius: 3px;
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	/*background-color: #ffffff;*/
	
	font-size: 11px;
border: 1px solid #6cb2e4;
overflow: hidden;
-webkit-box-shadow: 0px 5px 5px rgba(0,0,0, 0.5); -moz-box-shadow: 0px 5px 5px rgba(0,0,0, 0.5); -khtml-box-shadow: 0px 5px 5px rgba(0,0,0, 0.5); box-shadow: 0px 5px 5px rgba(0,0,0, 0.5);

	
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	border-top-width: 1px;
	border-bottom-width: 3px;
	-webkit-box-shadow: 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px transparent; box-shadow: 0px 0px 0px transparent;
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
	
.Menu.inOverlay
{
	z-index: 10000;
}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-size: 15pt;

}

.Menu .menuHeader .muted
{
	font-size: 11px;

}

/* Standard menu sections */

.Menu .primaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .secondaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .sectionFooter
{
	background-color: rgba(215, 237, 252, 0.9);
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
}

/* form popups */

.formPopup
{
	width: 250px;
	background-color: rgb(255, 255, 255);
}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px auto;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
		width: 232px;
	}
		
	.formPopup .ctrlUnit > dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit > dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
		padding: 0 5px;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			margin-bottom: 0;
		}
	
	.formPopup .secondaryControls
	{
		padding: 0 5px;
	}
	
		.formPopup .controlsWrapper
		{
			background: #d7edfc url('styles/default/xenforo/gradients/category-23px-light.png') repeat-x top;
			-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
			padding: 5px;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 222px;
			}
	
	.formPopup .advSearchLink
	{
		display: block;
		text-align: center;
		padding: 5px;
		font-size: 11px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		border: 1px solid #d7edfc;
		background: #f0f7fc url('styles/default/xenforo/gradients/category-23px-light.png') repeat-x top;
	}
	
		.formPopup .advSearchLink:hover
		{
			background-color: #d7edfc;
			text-decoration: none;
		}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 90%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	max-width: 690px; /*calc: 90=overlay padding+borders*/
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}
	
	.xenOverlay .overlayScroll.ltr
	{
		direction: ltr;
	}
	
	.xenOverlay .overlayScroll .sortable-placeholder
	{
		background-color: #a5cae4;
	}
	
	.xenOverlay .overlayContain
	{
		overflow-x: auto;
	}
	
	.xenOverlay .overlayContain.ltr
	{
		direction: ltr;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		background-image: url('styles/default/xenforo/overlay/close.png');
position: absolute;
right: 4px;
top: 4px;
cursor: pointer;
width: 35px;
height: 35px;

	}
	
.xenOverlay .nonOverlayOnly
{
	display: none !important;
}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	color: #eee;
background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);
padding: 15px 25px;
border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
-webkit-border-radius: 20px; -moz-border-radius: 20px; -khtml-border-radius: 20px; border-radius: 20px;
-webkit-box-shadow: 0px 25px 50px rgba(0,0,0, 0.5); -moz-box-shadow: 0px 25px 50px rgba(0,0,0, 0.5); -khtml-box-shadow: 0px 25px 50px rgba(0,0,0, 0.5); box-shadow: 0px 25px 50px rgba(0,0,0, 0.5);
_zoom: 1;

	margin: 0;
}

	.Touch .xenOverlay .formOverlay
	{
		background: rgb(0, 0, 0);
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: rgb(150,150,150);
	}

	.xenOverlay .formOverlay .heading
	{
		font-weight: bold;
font-size: 12pt;
color: #f0f7fc;
background-color: #176093;
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid #2b485c;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

	}

	.xenOverlay .formOverlay .subHeading
	{
		font-weight: bold;
font-size: 11px;
color: #f0f7fc;
background-color: #2b485c;
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid #176093;
-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;

	}
	
	.xenOverlay .formOverlay .textHeading
	{
		color: #f0f7fc;

	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		color: #f0f7fc;
background-color: black;
border-color: #a5cae4;

	}

	.xenOverlay .formOverlay .textCtrl option
	{
		background-color: black;
	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		background: #032A46 none;

	}

	.xenOverlay .formOverlay .textCtrl:focus option
	{
		background: #032A46 none;
	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);

	}

	.xenOverlay .formOverlay .textCtrl.disabled option
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);
	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		color: rgb(160,160,160);

	}

	.xenOverlay .formOverlay .ctrlUnit > dt dfn,
	.xenOverlay .formOverlay .ctrlUnit > dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit > dd .explain
	{
		color: #bbb;

	}

	.xenOverlay .formOverlay a
	{
		color: #fff;

	}

		.xenOverlay .formOverlay a.button
		{
			color: black;

		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		background-color: transparent;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		background: transparent none;
border-color: #a5cae4;

	}

		.xenOverlay .formOverlay .tabs a
		{
			background: transparent none;
border-color: #a5cae4;

		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				background: url(rgba.php?r=255&g=255&b=255&a=63); background: rgba(255,255,255, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3FFFFFFF,endColorstr=#3FFFFFFF);

			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				background-color: black;

			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/default/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid #a5cae4;

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	background-color: rgb(255, 255, 255);
padding: 0px;
border: 20px solid #032A46;
-webkit-border-radius: 20px; -moz-border-radius: 20px; -khtml-border-radius: 20px; border-radius: 20px;
-webkit-box-shadow: 0px 25px 50px rgba(0,0,0, 0.5); -moz-box-shadow: 0px 25px 50px rgba(0,0,0, 0.5); -khtml-box-shadow: 0px 25px 50px rgba(0,0,0, 0.5); box-shadow: 0px 25px 50px rgba(0,0,0, 0.5);

	
	border-color:  rgb(3, 42, 70); border-color:  rgba(3, 42, 70, 0.5); _border-color:  rgb(3, 42, 70);
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		border-color: #032A46;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

.xenOverlay > .section,
.xenOverlay > .sectionMain
{
	background: none;
	margin: 0;
}

	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		margin-bottom: 0;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin-top: 0;
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
	}
		
		.xenOverlay .sectionFooter .buttonContainer
		{
			line-height: 31px;
		}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
			margin-left: 5px;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
				margin-left: 0;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	max-width: none;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/default/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/default/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;
-webkit-border-bottom-left-radius: 10px; -moz-border-radius-bottomleft: 10px; -khtml-border-bottom-left-radius: 10px; border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: black;
background: transparent url('styles/default/xenforo/overlay/timed-message.png') repeat-x;
border-bottom: 1px solid black;
max-width: none;
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
	bottom: 70px;
	left: 35px;
	z-index: 9999; /* in front of the expose mask */
}

	#StackAlerts .stackAlert
	{
		position: relative;
		width: 270px;
		border: 1px solid #6cb2e4;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		-webkit-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -moz-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -khtml-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
		margin-top: 5px;
	}

		#StackAlerts .stackAlertContent
		{
			padding: 10px;
			padding-right: 30px;
			-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
			border: solid 2px #d7edfc;
			background: url(rgba.php?r=240&g=247&b=252&a=229); background: rgba(240, 247, 252, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5F0F7FC,endColorstr=#E5F0F7FC);
			font-size: 11px;
			font-weight: bold;
		}
	
/* Inline Editor */

.xenOverlay .section .messageContainer
{
	padding: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


@media (max-width:610px)
{
	.Responsive .xenOverlay
	{
		width: 100%;
	}
	
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
		border-width: 10px;
	}
	
	.Responsive .xenOverlay a.close 
	{
		top: 0;
		right: 0;
		width: 28px;
		height: 28px;
		background-size: 100% 100%;
	}
}


.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 5px;
}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 32px;
	padding: 0 5px;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: bold;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/default/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}

/** Data tables **/

.dataTableWrapper
{
	overflow-x: auto;
	overflow-y: visible;
}

table.dataTable
{
	width: 100%;
	_width: 99.5%;
	margin: 10px 0;
}

.dataTable caption
{
	font-weight: bold;
font-size: 11pt;
color: #f0f7fc;
background-color: #65a5d1;
padding: 5px 10px;
margin-bottom: 3px;
border-bottom: 1px solid #176093;
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;

}

.dataTable tr.dataRow td
{
	border-bottom: 1px solid #d7edfc;
	padding: 5px 10px;
	word-wrap: break-word;
}

.dataTable tr.dataRow td.secondary
{
	background: #f0f7fc url("styles/default/xenforo/gradients/category-23px-light.png") repeat-x top;
}

.dataTable tr.dataRow th
{
	background: #f9d9b0 url("styles/default/xenforo/gradients/category-23px-light.png") repeat-x top;
	border-bottom: 1px solid #f9bc6d;
	border-top: 1px solid #f9d9b0;
	color: #6d3f03;
	font-size: 11px;
	padding: 5px 10px;
}

	.dataTable tr.dataRow th a
	{
		color: inherit;
		text-decoration: underline;
	}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .important,
.dataTable .dataRow.important
{
	font-weight: bold;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-left: 1px solid #d7edfc;
	border-bottom: none;
	padding: 7px 10px 6px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: #d7edfc;
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		border-left: 1px solid #d7edfc;
		background-color: rgb(255, 255, 255);
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/default/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	overflow: hidden;
zoom: 1;

}

	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 11px;
float: right;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}

		.memberListItem .extra .bigNumber
		{
			font-size: 250%;
			color: rgb(150,150,150);
		}
	
	.memberListItem .member
	{
		margin-left: 65px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-weight: bold;
font-size: 13pt;
margin-bottom: 3px;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 11px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
			}
		
				.memberListItem .userBlurb .userTitle
				{
					font-weight: bold;

				}

			.memberListItem .userStats dt,
			.memberListItem .userStats dd
			{
				white-space: nowrap;
			}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}

/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/default/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:1em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:bold; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 11px;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 16px;
word-wrap: normal;
min-width: 150px;
white-space: nowrap;

}

	.PageNav .hidden
	{
		display: none;
	}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 3px;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 1px 0;
	}

	.PageNav a
	{		
		color: #8f6c3f;
text-decoration: none;
background-color: #fff4e5;
border: 1px solid #f9d9b0;
-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
text-align: center;

		
		
		width: 19px;
	}
	
	/*
		@property "pageNavPage";

		@property "/pageNavPage";
		*/
	
		.PageNav a[rel=start]
		{
			width: 19px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
		}
	
		.PageNav a
		{
		}
		
		.PageNav a.currentPage
		{
			color: #2b485c;
background-color: #f0f7fc;
border-color: #6cb2e4;
position: relative;

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(20,20,20);
background-color: transparent;
padding: 1px;
border: 1px none black;
cursor: pointer;

			
			width: 19px !important;
		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			color: #8f6c3f;
text-decoration: none;
background-color: #f9d9b0;
border-color: #f9bc6d;

		}
		
	.PageNav a.distinct
	{
		margin-left: 3px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 117px; /* width of 5 page numbers plus their margin & border */
		height: 18px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
			display: block;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 167px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 187px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 207px; }


@media (max-width:610px)
{
	.Responsive .PageNav .pageNavHeader
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .PageNav .unreadLink
	{
		display: none;
	}
}


/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(150,150,150);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
	max-width: 100%;
	margin-right: 5px;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
	max-width: 100%
}


/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li:after,
.commaElements > *:after
{
	content: ', ';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

.twoColumnList
{
	overflow: hidden; zoom: 1;
}

.twoColumnList li
{
	float: left;
	width: 48%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
		
	.previewTooltip .avatar
	{
		float: left;
	}
	
	.previewTooltip .text
	{
		margin-left: 64px;
	}
	
		.previewTooltip blockquote
		{
			font-size: 14px;
font-family: 'Roboto', sans-serif;
line-height: 1.5em;

			
			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
	
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid #d7edfc;
			margin-top: 5px;
		}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 11px;
padding: 2px;

}
		
	.blockLinksList a,
	.blockLinksList label
	{
		color: #176093;
padding: 5px 10px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
display: block;
outline: 0 none;

	}
	
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			text-decoration: none;
background-color: #d7edfc;

		}
		
		.blockLinksList a:active,
		.blockLinksList a.selected,
		.blockLinksList label:active,
		.blockLinksList label.selected
		{
			color: #f0f7fc;
background-color: #65a5d1;

		}
		
		.blockLinksList a.selected,
		.blockLinksList label.selected
		{
			font-weight: bold;
display: block;

		}
		
		.blockLinksList span.depthPad
		{
			display: block;
		}

.blockLinksList .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: #e03030;
padding: 0 2px;
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
height: 16px;


	float: right;
	position: relative;
	right: 0;
	top: -1px;
}

	.blockLinksList .itemCount.Zero
	{
		display: none;
	}
	
.bubbleLinksList
{
	overflow: hidden;
}

.bubbleLinksList a
{
	float: left;
	padding: 2px 4px;
	margin-right: 2px;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	text-decoration: none;
}
	
	.bubbleLinksList a:hover,
	.bubbleLinksList a:active
	{
		text-decoration: none;
background-color: #d7edfc;

	}
	
	.bubbleLinksList a.active
	{
		color: #f0f7fc;
background-color: #65a5d1;

		font-weight: bold;
display: block;

	}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/default/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(180,80,80); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: white;
	padding: 25px;
	-webkit-border-radius: 20px; -moz-border-radius: 20px; -khtml-border-radius: 20px; border-radius: 20px;	
	border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
	
	background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 5px 10px;
		font-weight: bold;
		font-size: 12pt;
		background: rgb(180,0,0);
		color: white;
		margin-bottom: 10px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		border: 1px solid rgb(100,0,0);
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(150,150,150);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: white;
	border: 1px solid rgb(180,0,0);
	color: rgb(180,0,0);
	-webkit-box-shadow: 2px 2px 10px #999; -moz-box-shadow: 2px 2px 10px #999; -khtml-box-shadow: 2px 2px 10px #999; box-shadow: 2px 2px 10px #999;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
	word-wrap: break-word;
}

	.formValidationInlineError.inlineError
	{
		position: static;
		width: auto;
		min-height: 0;
	}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: rgb(180,0,0);
	background: rgb(255, 235, 235);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: 1px solid rgb(180,0,0);
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}


@media (max-width:800px)
{
	.Responsive .formValidationInlineError
	{
		position: static;
		width: auto;
		min-height: auto;
	}
}


/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Misc */

.floatLeft { float: left; }
.floatRight { float: right; }

.ltr { direction: ltr; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	background-color: rgb(255, 255, 255);
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */


.visibleResponsiveFull { display: inherit !important; }

.visibleResponsiveWide,
.visibleResponsiveMedium,
.visibleResponsiveNarrow { display: none !important; }

.hiddenResponsiveFull { display: none !important; } 

.hiddenResponsiveWide,
.hiddenResponsiveMedium,
.hiddenResponsiveNarrow { display: inherit !important; }


@media (max-width:800px)
{
	.Responsive .visibleResponsiveFull { display: none !important; }
	
	.Responsive .hiddenResponsiveFull { display: inherit !important; }
	
	.Responsive .hiddenWideUnder { display: none !important; }
}
@media (min-width:611px) AND (max-width:800px)
{
	.Responsive .visibleResponsiveWide { display: inherit !important; }
	
	.Responsive .hiddenResponsiveWide { display: none !important; }
	}

@media (min-width:481px) AND (max-width:610px)
{
	.Responsive .visibleResponsiveMedium { display: inherit !important; }
	
	.Responsive .hiddenResponsiveMedium { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .visibleResponsiveNarrow { display: inherit !important; }
	
	.Responsive .hiddenResponsiveNarrow { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder,
	.Responsive .hiddenNarrowUnder { display: none !important; }
}

@media (max-width:610px)
{
	.Responsive .threeColumnList li
	{
		float: none;
		width: auto;
		margin: 2px 1% 2px 0;
	}
}

@media (max-width:480px)
{
	.Responsive .xenTooltip.statusTip
	{
		width: auto;
	}
	
	.Responsive .xenPreviewTooltip
	{
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		width: auto;
		max-width: 100%;
	}
	
	.Responsive .xenPreviewTooltip .arrow
	{
		display: none;
	}
	
	.Responsive .previewTooltip .avatar
	{
		display: none;
	}
	
	.Responsive .previewTooltip .text
	{
		margin-left: 0;
	}
}




/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		max-width: 600px;
	}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	padding-right: 30px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl.indented
	{
		width: calc(100% - 16px);
	}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup
{
	border-top: 1px solid #d7edfc;
	margin: 20px auto;
}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: 1px solid #d7edfc;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{	
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	
}

	.xenForm .ctrlUnit.limited
	{
		display: none;
	}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}
	
.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-size: 13px;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #000000;
background: #ffffff url('styles/default/xenforo/clear.png');
padding: 3px;
margin-bottom: 2px;
border-width: 1px;
border-style: solid;
border-top-color: rgb(192, 192, 192);
border-right-color: rgb(233, 233, 233);
border-bottom-color: rgb(233, 233, 233);
border-left-color: rgb(192, 192, 192);
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
outline: 0;

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		background: rgb(255,255,240) url('styles/default/xenforo/gradients/form-element-focus-25.png') repeat-x;
border-top-color: rgb(150,150,150);
border-bottom-color: rgb(230,230,230);

	}	

	textarea.textCtrl:focus
	{
		background-image: url('styles/default/xenforo/gradients/form-element-focus-100.png');

	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: rgb(100,100,100);
background-color: rgb(245,245,245);

	}
	
	.textCtrl.prompt
	{
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}
	
	.textCtrl.fillSpace
	{
		width: 100%;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}
	
	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	border-top: 1px solid rgb(192, 192, 192) !important;
	margin-top: 4px !important;
}

.taggingInput.textCtrl
{
	padding-top: 1px;
	min-height: 25px;
}

.taggingInput input
{
	margin: 0px;
	font-size: 12px;
	border: 1px solid transparent;
	padding: 0;
	background: transparent;
	outline: 0;
	color: inherit;
	font-family: inherit;
}

.taggingInput .tag
{
	border: 1px solid #a5cae4;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	display: inline-block;
	padding: 0 3px;
	text-decoration: none;
	background: #d7edfc url('styles/default/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	color: #176093;
	margin-right: 3px;
	margin-top: 2px;
	font-size: 12px;
	max-width: 98%;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.disabled.taggingInput .tag
{
	opacity: 0.7;
}

	.disabled.taggingInput .tag a
	{
		pointer-events: none;
	}

	html .taggingInput .tag a
	{
		color: #6cb2e4;
		font-weight: bold;
		text-decoration: none;
	}

.taggingInput .addTag
{
	display: inline-block;
	min-width: 150px;
	max-width: 100%;
	margin-top: 2px;
}

.taggingInput .tagsClear
{
	clear: both;
	width: 100%;
	height: 0px;
	float: none;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;
	
	font-size: 12px;
font-family: 'Roboto', sans-serif;
color: rgb(255, 255, 255);
background-color: #0c5f55;
padding: 0px 7px;
border-width: 0;
border-top-color: rgb(255, 255, 255);
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
text-align: center;
outline: none;
line-height: 24px;
display: inline-block;
cursor: pointer;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 24px;

}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 4px;
	line-height: 21px;
	height: 21px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}

.button.primary
{
	background-color: #d72e31;

}

input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	color: #999;
background-color: #EEE;
border-color: #CCC;
-webkit-box-shadow: 0 0 0 transparent; -moz-box-shadow: 0 0 0 transparent; -khtml-box-shadow: 0 0 0 transparent; box-shadow: 0 0 0 transparent;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: rgb(255, 255, 255);
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button
	{
		color: rgb(255, 255, 255);
text-decoration: none;
background-color: #06322d;
border-color: rgb(255,255,200);
border-top-color: white;
border-bottom-color: rgb(190,190,170);

	}

	.button:focus
	{
		border-color: #6cb2e4;

	}

	.button:active,
	.button[href]:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button
	{
		color: black;
background-color: rgb(153, 153, 163);
border-color: rgb(200,200,215);
border-top-color: #b3b3bd;
border-bottom-color: white;
-webkit-box-shadow: 0px 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px 0px transparent; box-shadow: 0px 0px 0px 0px transparent;
outline: 0;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
		color: ;
	}
	
	.button.ToggleButton.checked
	{
		background-color: rgb(255,150,50);
	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}

















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	margin: 10px auto;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 4px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 2px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 30px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}		

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 10px;
color: rgb(150,150,150);
margin-left: 30px;
display: block;

	}
	
	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}
	
		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(100,100,100);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 10px;
color: red;
display: block;

	}
	
	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/default/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 30px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 11px;
color: rgb(150,150,150);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}
	
	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(100,100,100);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid #d7edfc;
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(150,150,150);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .disablerList,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}
	
/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: 'Roboto', sans-serif;
	font-size: 11pt;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}
	
	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: rgb(255, 255, 255);
	font-size: 11px;
	border: 1px solid #65a5d1;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	-webkit-box-shadow: 0 0 15px #666; -moz-box-shadow: 0 0 15px #666; -khtml-box-shadow: 0 0 15px #666; box-shadow: 0 0 15px #666;
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: #65a5d1;
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid #65a5d1;
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: #65a5d1;
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: #f0f7fc;
		}

a.caloff {
	color: rgb(150,150,150);		
}

a.caloff:hover {
	background-color: #f0f7fc;		
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: #65a5d1;
	color: #f0f7fc;
}
ul.autoCompleteList
{
	background-color: rgb(255, 255, 255);
	
	border: 1px solid #6cb2e4;
	padding: 2px;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: #d7edfc;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(20,20,20);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul,
.xenForm .ctrlUnit > dd > .verticalShift
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}
	
/*
 * Multi-column checkboxes
 */
 
.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		padding-left: 1px;
		display: inline-block;
		width: 100%;
	}
	
	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	-webkit-column-gap : 0; -moz-column-gap : 0;column-gap: 0;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
	max-width: 100%;
}

#recaptcha_image img
{
	max-width: 100%;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label,
		.Responsive .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}
	
	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}
	
	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul,
	.Responsive .xenForm .ctrlUnit > dd > .verticalShift
	{
		margin-top: 0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label,
		.Responsive .insideSidebar .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl,
	.Responsive .taggingInput input,
	.Responsive .taggingInput .tag
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	background-color: #176093;

}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#logo
	{
		display: block;
		float: left;
		line-height: 124px;
		*line-height: 128px;
		height: 128px;
		max-width: 100%;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
			max-width: 100%;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: #a5cae4;
		padding: 5px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		margin: 10px 0;
		border: 1px solid #032A46;
		color: #032A46;
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: #65a5d1;
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 0 0 0 transparent, 1px 1px 10px white;
			color: #032A46;
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: #032A46;
			}

.footer .pageContent
{
	font-size: 11px;
color: #a5cae4;
background-color: #176093;
-webkit-border-bottom-right-radius: 5px; -moz-border-radius-bottomright: 5px; -khtml-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;
-webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomleft: 5px; -khtml-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;
overflow: hidden;
zoom: 1;

}
	
	.footer a,
	.footer a:visited
	{
		color: #a5cae4;
padding: 5px;
display: block;

	}
	
		.footer a:hover,
		.footer a:active
		{
			color: #d7edfc;

		}

	.footer .choosers
	{
		padding-left: 5px;
float: left;
overflow: hidden;
zoom: 1;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		padding-right: 5px;
float: right;
overflow: hidden;
zoom: 1;

	}
	
		.footerLinks li
		{
			float: left;
			
		}
		
			.footerLinks a.globalFeed
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url('styles/default/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
				padding: 0;
				margin: 5px;
			}

.footerLegal .pageContent
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
	padding: 5px 5px 15px;
	text-align: center;
}
	
	#copyright
	{
		color: rgb(100,100,100);
		float: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
			margin-left: 10px;
		}


@media (max-width:610px)
{
	.Responsive .footerLinks a.globalFeed,
	.Responsive .footerLinks a.topLink,
	.Responsive .footerLinks a.homeLink
	{
		display: none;
	}

	.Responsive .footerLegal .debugInfo
	{
		clear: both;
	}
}

@media (max-width:480px)
{
	.Responsive #copyright span
	{
		display: none;
	}
}


.breadBoxTop,
.breadBoxBottom
{
	padding: 10px 0;
overflow: hidden;
zoom: 1;
clear: both;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	margin-left: 5px;
float: right;
line-height: 24px;

}

.breadcrumb
{
	font-size: 11px;
background-color: #f0f7fc;
border: 1px solid #a5cae4;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
overflow: hidden;
zoom: 1;
max-width: 100%;
height: 24px;

}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	display: block;
float: left;
position: relative;
zoom: 1;
max-width: 50%;

}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	text-decoration: none;
background-color: #f0f7fc;
padding: 0 10px 0 18px;
margin-bottom: -1px;
border-bottom: 1px solid #a5cae4;
outline: 0 none;
-moz-outline-style: 0 none;
display: block;
_border-bottom: none;
line-height: 24px;

}

	.breadcrumb .crust a.crumb > span
	{
		display: block;
		text-overflow: ellipsis;
		word-wrap: normal;
		white-space: nowrap;
		overflow: hidden;
		max-width: 100%;
	}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		padding-left: 10px;
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomleft: 5px; -khtml-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;

	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		font-weight: bold;

	}

.breadcrumb .crust .arrow
{
	border: 12px solid transparent;
border-right: 1px none black;
border-left-color: #a5cae4;
-moz-border-right-colors: #a5cae4;
display: block;
position: absolute;
right: -12px;
top: 0px;
z-index: 50;
width: 0px;
height: 0px;

}

.breadcrumb .crust .arrow span
{
	border: 12px solid transparent;
border-right: 1px none black;
border-left-color: #f0f7fc;
-moz-border-right-colors: #f0f7fc;
display: block;
position: absolute;
left: -13px;
top: -12px;
z-index: 51;
white-space: nowrap;
overflow: hidden;
text-indent: 9999px;
width: 0px;
height: 0px;

}

.breadcrumb .crust:hover a.crumb
{
	background-color: #d7edfc;

}

.breadcrumb .crust:hover .arrow span
{
	border-left-color: #d7edfc;
}

	.breadcrumb .crust .arrow
	{
		/* hide from IE6 */
		_display: none;
	}

.breadcrumb .jumpMenuTrigger
{
	background: transparent url('styles/default/xenforo/xenforo-ui-sprite.png') no-repeat 0 0;
margin: 5px 5px 6px;
display: block;
float: right;
white-space: nowrap;
text-indent: 9999px;
overflow: hidden;
width: 13px;
height: 13px;

}


@media (max-width:480px)
{
	.Responsive .breadBoxTop.withTopCtrl
	{
		display: table;
		table-layout: fixed;
		width: 100%;
	}

	.Responsive .breadBoxTop.withTopCtrl nav
	{
		display: table-header-group;
	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		display: table-footer-group;
		margin-top: 5px;
		text-align: right;
	}
}


#navigation .pageContent
{
	height: 52px;
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: 0.4em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		font-size: 11px;
background-color: #2b485c;
padding: 0 25px;
border: 1px solid #65a5d1;
border-bottom: 1px solid #032A46;
-webkit-border-top-left-radius: 10px; -moz-border-radius-topleft: 10px; -khtml-border-top-left-radius: 10px; border-top-left-radius: 10px;
-webkit-border-top-right-radius: 10px; -moz-border-radius-topright: 10px; -khtml-border-top-right-radius: 10px; border-top-right-radius: 10px;

		
		height: 25px;
	}
	
		.navTabs .publicTabs
		{
			float: left;
		}
		
		.navTabs .visitorTabs
		{
			float: right;
		}
	
			.navTabs .navTab
			{
				float: left;
				white-space: nowrap;
				word-wrap: normal;
				
				
			}


/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink,
.navTabs .SplitCtrl
{
	display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
outline: 0 none;

	
	
	
	height: 25px;
	line-height: 25px;
}

	.navTabs .publicTabs .navLink
	{
		padding: 0 15px;
	}
	
	.navTabs .visitorTabs .navLink
	{
		padding: 0 10px;
	}
	
	.navTabs .navLink:hover
	{
		text-decoration: none;
	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup closed */

	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}
	
	.navTabs .navTab.PopupClosed .navLink
	{
		color: #a5cae4;
	}
	
		.navTabs .navTab.PopupClosed:hover
		{
			background-color: #176093;
		}
		
			.navTabs .navTab.PopupClosed .navLink:hover
			{
				color: #ffffff;
			}
		
	.navTabs .navTab.PopupClosed .arrowWidget
	{
		/* circle-arrow-down-light */
		background-position: -64px 0;
	}
	
	.navTabs .navTab.PopupClosed .SplitCtrl
	{
		margin-left: -14px;
		width: 14px;
	}
		
		.navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			/* nav_menu_gadget, height: 17px */
			background: transparent url('styles/default/xenforo/xenforo-ui-sprite.png') no-repeat -128px 5px;
		}
	
	/* ---------------------------------------- */
	/* selected tab */

	.navTabs .navTab.selected .navLink
	{
		position: relative;
		font-weight: bold;
color: #032A46;
background: #65a5d1 url('styles/default/xenforo/gradients/navigation-tab.png') repeat-x top;
padding-top: 2px;
margin-top: -2px;
border: 1px solid #032A46;
border-bottom: 1px none black;
-webkit-border-top-left-radius: 2px; -moz-border-radius-topleft: 2px; -khtml-border-top-left-radius: 2px; border-top-left-radius: 2px;
-webkit-border-top-right-radius: 2px; -moz-border-radius-topright: 2px; -khtml-border-top-right-radius: 2px; border-top-right-radius: 2px;
text-shadow: 0 0 0 transparent, 0px 0px 3px #f0f7fc;

	}
	
	.navTabs .navTab.selected .SplitCtrl
	{
		display: none;
	}
	
	.navTabs .navTab.selected .arrowWidget
	{
		/* circle-arrow-down */
		background-position: -32px 0;
	}
	
		.navTabs .navTab.selected.PopupOpen .arrowWidget
		{
			/* circle-arrow-up */
			background-position: -16px 0;
		}
	
	/* ---------------------------------------- */
	/* unselected tab, popup open */
	
	.navTabs .navTab.PopupOpen .navLink
	{
	}
	
	
	/* ---------------------------------------- */
	/* selected tab, popup open (account) */
	
	.navTabs .navTab.selected.PopupOpen .navLink
	{
		color: #2b485c;
background: #6cb2e4 url('styles/default/xenforo/gradients/tab-unselected-25px-light.png') repeat-x top;
-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
-webkit-border-bottom-right-radius: 0px; -moz-border-radius-bottomright: 0px; -khtml-border-bottom-right-radius: 0px; border-bottom-right-radius: 0px;
-webkit-border-bottom-left-radius: 0px; -moz-border-radius-bottomleft: 0px; -khtml-border-bottom-left-radius: 0px; border-bottom-left-radius: 0px;
text-shadow: 0 0 0 transparent, 1px 1px 2px white;

	}
	
/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	background: #65a5d1 url('styles/default/xenforo/gradients/navigation-tab.png') repeat-x top;
	
	width: 100%;	
	padding: 0;
	border: none;
	overflow: hidden; zoom: 1;	
	position: absolute;
	left: 0px;	
	top: 27px;
	height: 25px;
	background-position: 0px -25px;
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}

	.navTabs .navTab.selected .blockLinksList
	{
		background: none;
		padding: 0;
		border: none;
		margin-left: 8px;
	}

	.withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 275px;
	}

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li
	{
		float: left;
		padding: 2px 0;
	}
	
		.navTabs .navTab.selected .tabLinks a
		{
			font-size: 11px;
color: #ffffff;
padding: 1px 10px;
display: block;
text-shadow: 0 0 0 transparent, 1px 1px 1px #176093;

			
			line-height: 19px;
		}
		
		.navTabs .navTab.selected .tabLinks .PopupOpen a
		{
			color: inherit;
			text-shadow: none;
		}
		
			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				color: #2b485c;
text-decoration: none;
background-color: #d7edfc;
padding: 0 9px;
border: 1px solid #6cb2e4;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
text-shadow: 0 0 0 transparent, 1px 1px 0px #f0f7fc;
outline: 0;

			}
			
			.navTabs .navTab.selected .tabLinks .Popup a:hover,
			.navTabs .navTab.selected .tabLinks .Popup a:focus
			{
				color: inherit;
				background: none;
				border-color: transparent;
				-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
				text-shadow: none;
			}
	
/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: #e03030;
padding: 0 2px;
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
height: 16px;

}

	.navTabs .navLink .itemCount .arrow
	{
		border: 3px solid transparent;
border-top-color: #e03030;
border-bottom: 1px none black;
position: absolute;
bottom: -3px;
right: 4px;
line-height: 0px;
text-shadow: none;
_display: none;
/* Hide from IE6 */
width: 0px;
height: 0px;

	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

.navTabs .navTab.account .navLink
{
	font-weight: bold;
}

	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: #176093;
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: 116px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
	padding: 2px;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread
		{
			background-color: rgb(255, 255, 200);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	padding: 5px 0;
	border-bottom: 1px solid #d7edfc;
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	background-color: #d7edfc;
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}


@media (max-width:610px)
{
	.Responsive .navTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 50px;
	}
}

@media (max-width:480px)
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}


#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		right: 20px;
		top: -20.5px;
		display: none;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		cursor: pointer;
		font-size: 11px;
		height: 16px;
		width: 16px;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		text-indent: -9999px;
		background: transparent url('styles/default/xenforo/xenforo-ui-sprite.png') no-repeat -144px 0px;
		overflow: hidden;
	}

	#QuickSearch
	{
		display: block;
		
		position: absolute;
		right: 20px;
		top: -18px;
		
		margin: 0;
		
		background-color: rgb(255, 255, 255);
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		padding-top: 5px;
		_padding-top: 3px;
		z-index: 7500;
	}
			
		#QuickSearch .secondaryControls
		{
			display: none;
		}
	
		#QuickSearch.active
		{
			-webkit-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); -moz-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); -khtml-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); box-shadow: 5px 5px 25px rgba(0,0,0, 0.5);
			padding-bottom: 5px;
		}
		
	#QuickSearch .submitUnit .button
	{
		min-width: 0;
	}
		
	#QuickSearch input.button.primary
	{
		float: left;
		width: 110px;
	}
	
	#QuickSearch #commonSearches
	{
		float: right;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 4px;
			}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 24px 0 110px;
		width: auto;
	}



/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
}

	#headerMover #headerProxy
	{
		background-color: #176093;
		height: 180px; /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}


/** Generic page containers **/

.pageWidth
{
	padding-right: 5px;
padding-left: 5px;
margin: 0 1%;
_width: 976px;
_margin: 0 auto;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

}

.NoResponsive body
{
	min-width: 976px;
}

#content .pageContent
{
	background-color: rgb(255, 255, 255);

}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */

.mainContainer
{
	 float: left;
	 margin-right: -260px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 260px;
	}

.sidebar
{
	float: right;
	font-size: 14px;
font-family: 'Roboto Condensed', sans-serif;
padding-left: 14px;
border-left: 2px dashed rgb(204, 204, 204);
font-weight: 300;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
width: 250px;

}







/* visitor panel */

.sidebar .visitorPanel
{
	overflow: hidden; zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		margin-right: 5px;
float: left;

		
		width: auto;
		height: auto;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			width: ;
			height: ;
		}
	
	.sidebar .visitorPanel .username
	{
		font-weight: bold;
font-size: 14px;

	}
	
	.sidebar .visitorPanel .stats
	{
		margin-top: 2px;

	}
	
	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}













	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	font-size: 14px;
font-family: 'Roboto Slab', sans-serif;
color: rgb(20,20,20);
padding-bottom: 2px;
margin-bottom: 5px;
font-weight: 500;

}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	font-size: 14px;
font-family: 'Roboto Slab', sans-serif;
color: rgb(20,20,20);
}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	color: #6cb2e4;
margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: #6cb2e4;
	}












/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	margin: 5px 0;
overflow: hidden;
zoom: 1;

}

	.sidebar .avatarList .avatar
	{
		margin-right: 5px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		width: 32px;
		height: 32px;
	}
	
	.sidebar .avatarList .username
	{
		font-size: 11pt;
margin-top: 2px;
display: block;

	}
	
	.sidebar .avatarList .userTitle
	{
		color: rgb(150,150,150);

	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		font-size: 14px;

	}

	.sidebar .userList .username.invisible
	{
		color: #65a5d1;

	}
	
	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	background-color: white;
padding: 3px;
margin: -16px 0 0;
border: 1px solid #f9bc6d;
-webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px; border-radius: 8px;
text-align: center;
line-height: 30px;
-webkit-box-shadow: 0px 2px 5px rgba(0,0,0, 0.2); -moz-box-shadow: 0px 2px 5px rgba(0,0,0, 0.2); -khtml-box-shadow: 0px 2px 5px rgba(0,0,0, 0.2); box-shadow: 0px 2px 5px rgba(0,0,0, 0.2);
display: block;
cursor: pointer;
height: 30px;

}

	#SignupButton .inner
	{
		font-weight: bold;
font-size: 12pt;
font-family: 'Roboto', sans-serif;
color: #ffffff;
background-color: rgb(255, 102, 0);
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
display: block;
text-shadow: 0 0 0 transparent, 0px 0px 3px rgba(0,0,0, 0.5);

	}
	
	#SignupButton:hover .inner
	{
		text-decoration: none;
background-color: #e68c17;

	}
	
	#SignupButton:active
	{
		-webkit-box-shadow: 0 0 3px rgba(0,0,0, 0.2); -moz-box-shadow: 0 0 3px rgba(0,0,0, 0.2); -khtml-box-shadow: 0 0 3px rgba(0,0,0, 0.2); box-shadow: 0 0 3px rgba(0,0,0, 0.2);
/*position: relative;
top: 2px;*/

	}


@media (max-width:800px)
{
	.Responsive .mainContainer
	{
		 float: none;
		 margin-right: 0;
		 width: auto;
	}

		.Responsive .mainContent
		{
			margin-right: 0;
		}
	
	.Responsive .sidebar
	{
		float: none;
		margin: 0 auto;
	}

		.Responsive .sidebar .visitorPanel
		{
			display: none;
		}
}

@media (max-width:340px)
{
	.Responsive .sidebar
	{
		width: 100%;
	}
}


/** Text used in message bodies **/

.messageText
{
	font-size: 14px;
font-family: 'Roboto', sans-serif;
line-height: 1.5em;

}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	
	font-size: 11px;
margin: 10px 0;
line-height: 16px;

}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		padding: 3px 0;

	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 3px 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	display: inline-block;
line-height: 26px;
outline: 0 none;
vertical-align: top;
height: 26px;

	
}

	a.callToAction span
	{
		font-weight: bold;
font-size: 11px;
font-family: 'Roboto', sans-serif;
color: #ffffff;
background-color: #0c5f55;
padding: 0 15px;
-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
display: block;
/*text-shadow: 0 0 0 transparent, 0px 0px 3px #176093;*/

	}
	
	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			background-color: #06322d;

		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}
		
		a.callToAction:active span
		{
			background-color: #176093;

		}

/*********/

.avatarHeap
{
	overflow: hidden; zoom: 1;
}

	.avatarHeap ol
	{
		margin-right: -4px;
		margin-top: -4px;
	}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}
		
		.avatarHeap li .avatar
		{
			display: block;
		}
		
/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}

/*********/

.tagBlock
{
	margin: 10px 0;
	font-size: 11px;
}

.tagList,
.tagList li
{
	display: inline;
}


.tagList .tag
{
	position: relative;
	display: inline-block;
	background: #f0f7fc;
	margin-left: 9px;
	height: 14px;
	line-height: 14px;
	padding: 1px 4px 1px 6px;
	border: 1px solid #a5cae4;
	border-left: none;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
	-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;
	color: #176093;
	font-size: 11px;
	margin-bottom: 2px;
}

	.tagList .tag:hover
	{
		text-decoration: none;
		background-color: #d7edfc;
	}

	.tagList .tag .arrow
	{
		position: absolute;
		display: block;
		height: 2px;
		width: 0;
		left: -9px;
		top: -1px;
		border-style: solid;
		border-width: 8px 9px 8px 0;
		border-color: transparent;
		border-right-color: #a5cae4;
	}

		.tagList .tag .arrow:after
		{
			content: '';
			position: absolute;
			display: block;
			height: 2px;
			width: 0;
			left: 1px;
			top: -7px;
			border-style: solid;
			border-width: 7px 8px 7px 0;
			border-color: transparent;
			border-right-color: #f0f7fc;
		}

		.tagList .tag:hover .arrow:after
		{
			border-right-color: #d7edfc;
		}

	.tagList .tag:after
	{
		content: '';
		position: absolute;
		left: -2px;
		top: 6px;
		display: block;
		height: 3px;
		width: 3px;
		-webkit-border-radius: 50%; -moz-border-radius: 50%; -khtml-border-radius: 50%; border-radius: 50%;
		border: 1px solid #a5cae4;
		background: rgb(255, 255, 255);
	}

/* User name classes */


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	background: transparent url('styles/default/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 0px 6px;
margin: -1px 0;
border: 1px solid transparent;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
display: inline-block;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	color: #176093;
text-decoration: none;
background-color: #f0f7fc;
padding: 0 6px;
border: 1px solid #a5cae4;

}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: #176093; background-color: #d7edfc; border-color: #d7edfc; }
.prefix.prefixSecondary  { color: #8f6c3f; background-color: #f9d9b0; border-color: #f9d9b0; }

.prefix.prefixRed        { color: white; background-color: red; border-color: #F88; }
.prefix.prefixGreen      { color: white; background-color: green; border-color: green; }
.prefix.prefixOlive      { color: black; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: white; background-color: blue; border-color: #88F; }
.prefix.prefixRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: black; background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: black; background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: black; background-color: orange; border-color: #FFC520; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	font-weight: normal;
}

h1 .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
font-weight: bold;
padding: 0;
margin: 0;
border: 0 none black;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: inline;

	color: inherit;
}

.userBanner
{
	font-size: 11px;
	background: transparent url('styles/default/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	padding: 1px 5px;
	border: 1px solid transparent;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	text-align: center;
}

	.userBanner.wrapped
	{
		-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
		-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			background-color: inherit;
		}
		
		.userBanner.wrapped span.before
		{
			-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
			left: -1px;
		}
		
		.userBanner.wrapped span.after
		{
			-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
			right: -1px;
		}
		
.userBanner.bannerHidden { background: none; -webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: #176093; background-color: #d7edfc; border-color: #a5cae4; }
.userBanner.bannerStaff.wrapped span { background-color: #a5cae4; }

.userBanner.bannerPrimary { color: #176093; background-color: #d7edfc; border-color: #a5cae4; }
.userBanner.bannerPrimary.wrapped span { background-color: #a5cae4; }

.userBanner.bannerSecondary { color: #8f6c3f; background-color: #f9d9b0; border-color: #f9d9b0; }
.userBanner.bannerSecondary.wrapped span { background-color: #f9d9b0; }

.userBanner.bannerRed        { color: white; background-color: red; border-color: #F88; }
.userBanner.bannerRed.wrapped span { background-color: #F88; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: green; }
.userBanner.bannerGreen.wrapped span { background-color: green; }

.userBanner.bannerOlive      { color: black; background-color: olive; border-color: olive; }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: #88F; }
.userBanner.bannerBlue.wrapped span { background-color: #88F; }

.userBanner.bannerRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.userBanner.bannerRoyalBlue.wrapped span { background-color: #81A9E1; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: skyblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: #AAA; }
.userBanner.bannerGray.wrapped span { background-color: #AAA; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: silver; }
.userBanner.bannerSilver.wrapped span { background-color: silver; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.userBanner.bannerYellow.wrapped span { background-color: #E0E000; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: #FFC520; }
.userBanner.bannerOrange.wrapped span { background-color: #FFC520; }


@media (max-width:800px)
{
	.Responsive .pageWidth
	{
		
	}

	.Responsive #content .pageContent
	{
		padding-left: 0px;
		padding-right: 0px;
	}
}

@media (max-width:610px)
{
	.Responsive .pageWidth
	{
		padding-right: 0;
padding-left: 0;
margin-right: 0;
margin-left: 0;

	}
	
	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}


body {
   font-family: 'Roboto', sans-serif;
   font-size: 14px;
   background-color: white;
}

h1 {
   font-family: 'Roboto Slab', sans-serif;
   font-weight: bold;
}

.button.primary:hover {
  background-color: #f60;
}

.pageWidth {
  max-width: 950px;
  margin: 0 auto;
}

#toolbar-wrapper {
  background-color: #f60;
  width: 100%;
  z-index: 999; }

#toolbar {
  max-width: 960px;
  height: 24px;
  max-height: 24px;
  overflow: visible;
  position: relative;
  margin: 0 auto;
  padding: 6px 10px;
  text-align: right; }

#moderatorBar {
    background-color: inherit !important;
    border-bottom: none !important;
    display: inline-block;
    float: left;
}

#moderatorBar a {
    color: white !important;
    padding: 0px 0.75ex;
}

#moderatorBar a:hover {
    background-color: inherit !important;
    color: black !important;
}

#toolbar .visitorTabs {
  float: left;
  line-height: 21px;
}

#toolbar .visitorTabs li.navTab {
  margin-right: 2ex;
}

#toolbar li.navTab.selected {
  display: none;
}

#toolbar li.navTab.PopupControl {
    display: inline-block;
}

#toolbar .visitorTabs a {
  color: white !important;
  font-size: 11px !important;
}

#moderatorBar .itemCount {
  box-shadow: none !important;  
}

#toolbar .itemCount .Total {
  background: #e03030;
  color: white;
  -webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
  padding-left: 6px;
  padding-right: 6px;
  text-align: center;
  font-weight: bold;
  display: inline-block;
  height: 16px;
  line-height: 16px;
}

#toolbar .Popup .PopupControl.PopupOpen,
#toolbar .Popup.PopupContainerControl.PopupOpen,
#toolbar .Popup .PopupControl:hover,
#toolbar .Popup.PopupContainerControl:hover,
#toolbar .Popup.PopupContainerControl.PopupOpen:hover {
  background: none;
  text-shadow: none;
}

#searchBar {
  display: inline-block;
}

#QuickSearch {
  position: static;
  right: 0;
  top: 0;
  padding-top: 0;
}

#QuickSearchQuery {
  border: none;
}

#header {
  background-color: white;
}

#headerMover #headerProxy {
    background-color: white;
    height: 128px;
}

#logo {
  width: 950px;
  position: relative;
  overflow: hidden;
}

#scope {
  display: inline-block;
  letter-spacing: 0.25ex;
  font-weight: bold;
  text-transform: uppercase;
  margin-left: 74px;
  vertical-align: -7px;
}

#scope li {
  display: inline-block;
  margin-left: 1.5em;
}

#scope li a {
  color: black;
  text-decoration: underline;
}

#scope li a.current {
  color: #d72e31;
  text-decoration: none;
}

#navigation {
  display: inline-block;
  vertical-align: -7px;
  position: absolute;
  right: 0;
  top: 56px;
}

#navigation .navTabs {
  border: none;
  background: none;
  letter-spacing: 0.25ex;
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
}

.navTabs {
  padding: 0;
}

.navTabs .navLink,
.navTabs .SplitCtrl {
  line-height: 24px;
  color: black !important;
  text-decoration: underline;
}

.navTabs .navTab a:hover {
  background-color: white !important;
  color: black !important;
}

.navTabs .navTab .arrowWidget {
  display: none;
}


    @media (max-width:800px) {
        .navTabs .publicTabs {
          display: none;
        }
        
        .sidebar { border: none; width: 100%; }
    }
        
    @media (min-width:801px) {
        .navTabs .publicTabs {
          display: inline-block !important;
        }
    }
    
    @media (max-width:950px) {    
        .navTab.inbox { display: none; }
        .navTab.alerts { display: none; }
    }
    
    @media (max-width:760px) {    
        #moderatorBar { display: none; }
    }    



.formPopup {
  text-align: left;
}

.Popup .PopupControl.PopupOpen,
.Popup.PopupContainerControl.PopupOpen {
  background: none;
  color: black;
}

.navTabs .navTab.selected .navLink {
  background: none;
  border: none;
}

.navTabs .publicTabs .navLink {
    padding: 0 0 0 1.5em;
}

/* Sidebar sections */

.sidebar .threadListItem,
.sidebar .profilePostListItem {
  border: none;
}

.sidebar .profilePostListItem .poster {
    font-weight: 400;
}

/* Messages */

.message .likesSummary {
  border-bottom: none;
  background: none;
  padding: 5px;
}

.bbCodeQuote .quoteContainer:before {
  display: block;
  float: left;
  content: '“';
  height: 40px;
  line-height: 80px;
  font-size: 80px;
  width: 45px;
  margin-left: -30px;
  color: rgb(200,200,200);
  vertical-align: -42px;
  font-style: normal;
  color: #f9bc6d;
}

#redactor_code_code {
  height: 300px;
}

.bbCodeImage {
  max-height: 300px;
  cursor: pointer;
}
