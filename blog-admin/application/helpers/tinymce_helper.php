<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function initialize_tinymce() {
    $tinymce = '<script type="text/javascript" src="'.base_url().'assets/modules/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
        tinyMCE.init({
        theme : "advanced",
        mode : "textareas",

        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,tablecontrols,|,code,save,|,newdocument,removeformat",
        // theme_advanced_buttons3 : "pastetext,pasteword,|,search,replace,|,outdent,indent,blockquote,|,undo,redo,|,insertdate,inserttime,preview,|,hr,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        // theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,|,link,unlink,anchor,image,cleanup,help,|,forecolor,backcolor,styleselect",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        theme_advanced_toolbar_location : "top",
        convert_urls : false,
        height: 300,
        width:700
        });
    </script>';
    return $tinymce;
}
