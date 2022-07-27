// const buttons  = document.querySelectorAll('.sidebar__button')

// buttons.forEach(button => {
//     button.addEventListener('click', function() {
//         buttons.forEach(button => button.classList.remove('active-btn'))
//         this.classList.add('active-btn');
//     })
// })


// show hide burger menu
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active')
        $('body').toggleClass('lock')
    })
    $('.header__link').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active')
        $('body').toggleClass('lock')
    })
})

// editor on admin panel
tinymce.init({
    selector: 'textarea',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
    toolbar_mode: 'floating',
    forced_root_block : "",
});



// to upload images in admin panel
function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'File Manager',
        url: '/elfinder/tinymce5',
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;

                // Make file info
                const info = file.name;

                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }

                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }

                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }

                dialogApi.close();
            }
        }
    });
}

