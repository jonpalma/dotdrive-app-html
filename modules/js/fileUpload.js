$(function () {
    let isAdvancedUpload = function () {
        let div = document.createElement('div');
        return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
    }();

    let form = $('.fileUp-box'),
        errorMsg	 = form.find( '.box__error span' ),
        restart		 = form.find( '.box__restart' );

    if (isAdvancedUpload) {
        form.addClass('has-advanced-upload');
    }

    if (isAdvancedUpload) {

        let input		 = form.find( 'input[type="file"]' ),
            label		 = form.find( 'label' ),
            droppedFiles = false,
            showFiles = function(files) {
                label.text(files.length > 1 ? (input.attr('data-multiple-caption') || '').replace( '{count}', files.length ) : files[ 0 ].name);
            };

        form.on('drag dragstart dragend dragover dragenter dragleave drop', function (e) {
            e.preventDefault();
            e.stopPropagation();
        })
            .on('dragover dragenter', function () {
                form.addClass('is-dragover');
            })
            .on('dragleave dragend drop', function () {
                form.removeClass('is-dragover');
            })
            .on('drop', function (e) {
                droppedFiles = e.originalEvent.dataTransfer.files;
                showFiles( droppedFiles );
            });

        input.on('change', function(e) {
            showFiles(e.target.files);
        });

        restart.on( 'click', function( e )
        {
            e.preventDefault();
            form.removeClass( 'is-error is-success' );
            input.trigger( 'click' );
        });

    } else {
        let iframeName  = 'uploadiframe' + new Date().getTime(),
            $iframe   = $('<iframe name="' + iframeName + '" style="display: none;"></iframe>');

        $('body').append($iframe);
        form.attr('target', iframeName);

        $iframe.one('load', function() {
            let data = JSON.parse($iframe.contents().find('body' ).text());
            form
                .removeClass('is-uploading')
                .addClass(data.success == true ? 'is-success' : 'is-error')
                .removeAttr('target');
            if (!data.success) errorMsg.text(data.error);
            form.removeAttr('target');
            $iframe.remove();
        });
    }
});