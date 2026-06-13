const watchdog = new CKSource.EditorWatchdog();

window.watchdog = watchdog;

watchdog.setCreator( ( element, config ) => {
    return CKSource.Editor
        .create( element, config )
        .then( editor => {
            editor.updateSourceElement();
            return editor;
        } )
} );

watchdog.setDestructor( editor => {
    return editor.destroy();
} );

watchdog.on( 'error', handleError );

$(document).find('.ckeditor').each(function (index, element) {
    watchdog
    .create( element, {
        toolbar: {
            items: [
                'heading',
                '|',
                'bold',
                'italic',
                'underline',
                'bulletedList',
                'numberedList',
                'todoList',
                '|',
                'fontSize',
                'fontFamily',
                'fontColor',
                'fontBackgroundColor',
                'highlight',
                '|',
                'strikethrough',
                'superscript',
                'subscript',
                'outdent',
                'indent',
                'removeFormat',
                'link',
                '|',
                'imageUpload',
                'imageInsert',
                '|',
                'blockQuote',
                'insertTable',
                'mediaEmbed',
                'CKFinder',
                'undo',
                'redo',
                'findAndReplace',
                '|',
                'MathType',
                'ChemType',
                'specialCharacters',
                'horizontalLine',
                'restrictedEditingException',
                'alignment',
                'code',
                'codeBlock',
                'sourceEditing',
                'htmlEmbed',
                'textPartLanguage'
            ],
            shouldNotGroupWhenFull: true,
        },
        language: 'en',
        image: {
            toolbar: [
                'imageTextAlternative',
                'imageStyle:inline',
                'imageStyle:block',
                'imageStyle:side',
                'linkImage'
            ]
        },
        table: {
            contentToolbar: [
                'tableColumn',
                'tableRow',
                'mergeTableCells',
                'tableCellProperties',
                'tableProperties'
            ]
        },
        licenseKey: '',
    })
    .catch( handleError );
});

function handleError( error ) {
    console.error( 'Oops, something went wrong!' );
    console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
    console.warn( 'Build id: 842x5wea8drp-1qxq2gjh2qy2' );
    console.error( error );
}
