(function() {
  tinymce.PluginManager.add('gavickpro_tc_button', function( editor, url ) {
    editor.addButton( 'gavickpro_tc_button', {
      text: 'My test button',
      icon: false,
      type: 'menubutton',
      menu: [
                {
                    text: 'Menu item I',
                    value: 'Text from menu item I',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                }
           ]
    });
  });
})();
