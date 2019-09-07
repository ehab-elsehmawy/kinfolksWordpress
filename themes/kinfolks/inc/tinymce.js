(function() {
    tinymce.create("tinymce.plugins.blue_button_plugin", {

        //url argument holds the absolute url of our plugin directory
        init : function(ed, url) {

            //add new button     
            ed.addButton("blue", {
                title : "Blue Color Text",
                cmd : "blue_command",
            
                text: 'Blue'
            });

            //button functionality.
            ed.addCommand("blue_command", function() {
                var selected_text = ed.selection.getContent();
                var return_text = "<span class='blue-text' style='color: #4a90e2'>" + selected_text + "</span>";
                ed.execCommand("mceInsertContent", 0, return_text);
            });

        },

        createControl : function(n, cm) {
            return null;
        },

        getInfo : function() {
            return {
                longname : "Extra Buttons",
                author : "Ehab",
                version : "1"
            };
        }
    });

    tinymce.PluginManager.add("blue_button_plugin", tinymce.plugins.blue_button_plugin);
})();
