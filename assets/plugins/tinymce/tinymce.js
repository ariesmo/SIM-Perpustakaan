<script>
    tinymce.init({
    selector: "div.edit",
    theme: "modern",
    plugins: [
        ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker"],
        ["searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking"],
        ["save table contextmenu directionality emoticons template paste"]
    ],
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image     | print preview media",
    statusbar: false
    });
    tinymce.init({
        selector: "h1.edit",
        theme: "modern",
        add_unload_trigger: false,
        schema: "html5",
        inline: true,
        toolbar: "undo redo",
        statusbar: false
    });
</script>