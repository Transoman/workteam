(function(){
  tinymce.PluginManager.add('ith__mce_plugin', function( editor, url ) {
    editor.addButton('ith__mce_button', {
      text: 'выделение',
      image: false,
      onclick: function() {
        editor.selection.setContent('<span >' + editor.selection.getContent() + '</span>');
      }
    });
  });
})();