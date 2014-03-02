/*
 Copyright (c) 2014, Pixel & Tonic, Inc.
 @license   http://buildwithcraft.com/license Craft License Agreement
 @link      http://buildwithcraft.com
*/
(function(a){Craft.EntryPreviewMode=Garnish.Base.extend({$form:null,$btn:null,$spinner:null,$shade:null,$editor:null,$iframeContainer:null,$iframe:null,$fieldPlaceholder:null,postUrl:null,locale:null,basePostData:null,inPreviewMode:!1,fields:null,lastPostData:null,updateIframeInterval:null,loading:!1,checkAgain:!1,init:function(b,c){this.postUrl=b?b:Craft.baseSiteUrl.replace(/\/+$/,"")+"/";this.locale=c;"https:"==document.location.protocol&&(this.postUrl=this.postUrl.replace(/^http:/,"https:"));this.$form=
a("#entry-form");this.$btn=a("#previewmode-btn");this.$spinner=a("#previewmode-spinner");this.$fieldPlaceholder=a("<div/>");this.basePostData={action:"entries/previewEntry",locale:this.locale};for(var d=this.$form.children("input[type=hidden]"),e=0;e<d.length;e++){var f=a(d[e]);this.basePostData[f.attr("name")]=f.val()}this.addListener(this.$btn,"click","togglePreviewMode");Craft.cp.on("beforeSaveShortcut",a.proxy(function(){this.inPreviewMode&&this.moveFieldsBack()},this))},togglePreviewMode:function(){this.inPreviewMode?
this.hidePreviewMode():this.showPreviewMode()},showPreviewMode:function(){if(!this.inPreviewMode){this.trigger("beforeShowPreviewMode");a(document.activeElement).blur();if(!this.$editor){this.$shade=a('<div class="modal-shade dark"></div>').appendTo(Garnish.$bod).css("z-index",2);this.$editor=a('<div id="previewmode-editor"></div>').appendTo(Garnish.$bod);this.$iframeContainer=a('<div id="previewmode-iframe-container" />').appendTo(Garnish.$bod);this.$iframe=a('<iframe id="previewmode-iframe" frameborder="0" />').appendTo(this.$iframeContainer);
var b=a('<header class="header"></header>').appendTo(this.$editor),c=a('<div class="btn">'+Craft.t("Done")+"</div>").appendTo(b);a("<h1>"+Craft.t("Live Preview")+"</h1>").appendTo(b);this.addListener(c,"click","hidePreviewMode")}this.fields=[];b=a("#fields > .field, #fields > div > div > .field");for(c=0;c<b.length;c++){var d=a(b[c]),e=d.clone();this.$fieldPlaceholder.insertAfter(d);d.detach();this.$fieldPlaceholder.replaceWith(e);d.appendTo(this.$editor);this.fields.push({$field:d,$clone:e})}Garnish.$win.trigger("resize");
this.updateIframe()?(this.$spinner.removeClass("hidden"),this.addListener(this.$iframe,"load",function(){this.slideIn();this.removeListener(this.$iframe,"load")})):this.slideIn();this.inPreviewMode=!0;this.trigger("showPreviewMode")}},slideIn:function(){a("html").addClass("noscroll");this.$spinner.addClass("hidden");this.$iframeContainer.css("left",Garnish.$win.width());this.$iframeContainer.show();this.addListener(Garnish.$win,"resize","setIframeWidth");this.setIframeWidth();this.$shade.fadeIn();
this.$editor.show().stop().animate({left:0},"slow");this.$iframeContainer.stop().animate({left:Craft.EntryPreviewMode.formWidth},"slow",a.proxy(function(){this.updateIframeInterval=setInterval(a.proxy(this,"updateIframe"),1E3);this.addListener(Garnish.$bod,"keyup",function(a){a.keyCode==Garnish.ESC_KEY&&this.hidePreviewMode()})},this))},hidePreviewMode:function(){if(this.inPreviewMode){this.trigger("beforeHidePreviewMode");a("html").removeClass("noscroll");this.removeListener(Garnish.$win,"resize");
this.removeListener(Garnish.$bod,"keyup");this.updateIframeInterval&&clearInterval(this.updateIframeInterval);this.moveFieldsBack();var b=Garnish.$win.width();this.$shade.delay(200).fadeOut();this.$editor.stop().animate({left:-Craft.EntryPreviewMode.formWidth},"slow",a.proxy(function(){for(var a=0;a<this.fields.length;a++)this.fields[a].$newClone.remove();this.$editor.hide()},this));this.$iframeContainer.stop().animate({left:b},"slow",a.proxy(function(){this.$iframeContainer.hide()},this));this.inPreviewMode=
!1;this.trigger("hidePreviewMode")}},moveFieldsBack:function(){for(var a=0;a<this.fields.length;a++){var c=this.fields[a];c.$newClone=c.$field.clone();this.$fieldPlaceholder.insertAfter(c.$field);c.$field.detach();this.$fieldPlaceholder.replaceWith(c.$newClone);c.$clone.replaceWith(c.$field)}Garnish.$win.trigger("resize")},setIframeWidth:function(){this.$iframeContainer.width(Garnish.$win.width()-Craft.EntryPreviewMode.formWidth)},updateIframe:function(b){b&&(this.lastPostData=null);if(!this.inPreviewMode)return!1;
if(this.loading)return this.checkAgain=!0,!1;b=Garnish.getPostData(this.$editor);if(this.lastPostData&&Craft.compare(b,this.lastPostData))return!1;this.lastPostData=b;this.loading=!0;b=a.extend({},b,this.basePostData);var c=a(this.$iframe[0].contentWindow.document).scrollTop();a.post(this.postUrl,b,a.proxy(function(b){b=b+'<script type="text/javascript">document.body.scrollTop = '+c+";\x3c/script>";this.$iframe.css("background",a(this.$iframe[0].contentWindow.document.body).css("background"));this.$iframe[0].contentWindow.document.open();
this.$iframe[0].contentWindow.document.write(b);this.$iframe[0].contentWindow.document.close();this.loading=!1;this.checkAgain&&(this.checkAgain=!1,this.updateIframe())},this));return!0}},{formWidth:400})})(jQuery);

//# sourceMappingURL=EntryPreviewMode.min.map
