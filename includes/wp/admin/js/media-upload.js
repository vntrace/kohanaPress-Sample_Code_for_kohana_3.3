var wpActiveEditor;
function send_to_editor(c){
    var b,a=typeof(tinymce)!="undefined",f=typeof(QTags)!="undefined";
    if(!wpActiveEditor){
        if(a&&tinymce.activeEditor){
            b=tinymce.activeEditor;
            wpActiveEditor=b.id
            }else{
            if(!f){
                return false
                }
            }
    }else{
    if(a){
        if(tinymce.activeEditor&&(tinymce.activeEditor.id=="mce_fullscreen"||tinymce.activeEditor.id=="wp_mce_fullscreen")){
            b=tinymce.activeEditor
            }else{
            b=tinymce.get(wpActiveEditor)
            }
        }
}
if(b&&!b.isHidden()){
    if(tinymce.isIE&&b.windowManager.insertimagebookmark){
        b.selection.moveToBookmark(b.windowManager.insertimagebookmark)
        }
        if(c.indexOf("[caption")===0){
        if(b.plugins.wpeditimage){
            c=b.plugins.wpeditimage._do_shcode(c)
            }
        }else{
    if(c.indexOf("[gallery")===0){
        if(b.plugins.wpgallery){
            c=b.plugins.wpgallery._do_gallery(c)
            }
        }else{
    if(c.indexOf("[embed")===0){
        if(b.plugins.wordpress){
            c=b.plugins.wordpress._setEmbed(c)
            }
        }
}
}
b.execCommand("mceInsertContent",false,c)
}else{
    if(f){
        QTags.insertContent(c)
        }else{
        document.getElementById(wpActiveEditor).value+=c
        }
    }
try{
    tb_remove()
    }catch(d){}
}
//var tb_position;
//(function(a){
//    tb_position=function(){
//        var f=a("#TB_window"),e=a(window).width(),d=a(window).height(),c=(720<e)?720:e,b=0;
//        if(a("body.admin-bar").length){
//            b=28
//            }
//            if(f.size()){
//            f.width(c-50).height(d-45-b);
//            a("#TB_iframeContent").width(c-50).height(d-75-b);
//            f.css({
//                "margin-left":"-"+parseInt(((c-50)/2),10)+"px"
//                });
//            if(typeof document.body.style.maxWidth!="undefined"){
//                f.css({
//                    top:20+b+"px",
//                    "margin-top":"0"
//                })
//                }
//            }
//        return a("a.thickbox").each(function(){
//        var g=a(this).attr("href");
//        if(!g){
//            return
//        }
//        g=g.replace(/&width=[0-9]+/g,"");
//        g=g.replace(/&height=[0-9]+/g,"");
//        a(this).attr("href",g+"&width="+(c-80)+"&height="+(d-85-b))
//        })
//    };
//    
//a(window).resize(function(){
//    tb_position()
//    });
//a(document).ready(function(b){
//    b("a.thickbox").click(function(){
//        var c;
//        if(typeof(tinymce)!="undefined"&&tinymce.isIE&&(c=tinymce.get(wpActiveEditor))&&!c.isHidden()){
//            c.focus();
//            c.windowManager.insertimagebookmark=c.selection.getBookmark()
//            }
//        })
//})
//})(jQuery);