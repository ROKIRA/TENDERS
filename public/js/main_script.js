/***************  READY  ******************/
$(document).ready(function(){

    /**************************************
    * Download more projects
    **************************************/

    $('#content').on('click', '#more_projects', function(e){
        e.preventDefault();

        var _self = $(this);
        var url = _self.data('url');
        var load = _self.data('load');
        var count = _self.data('count');
        var sort = _self.data('sort');
        var btn_text = _self.html();

        $.ajax({
            type: 'post',
            url: url,
            data: {
                load: load,
                count: count,
                sort: sort
            },
            beforeSend: function(){
                _self.attr('disabled', 'disabled')
                    .empty()
                    .css({
                        "width": "200px",
                        "height": "28px",
                        "background":"url('images/loading.gif') center center no-repeat",
                        "backgroundSize":"contain"
                    });
            },
            success: function(response){
                if(response.success && response.status == '200'){
                    _self.prev('#project_articles').find('article').removeClass('loaded');
                    _self.prev('#project_articles').append(response.tpl);
                    _self.prev('#project_articles').find('.loaded').hide().fadeIn(800);
                    if(response.left>0){
                        _self.data('load', response.load).attr('data-load', response.load);
                        _self.removeAttr('style')
                            .html(btn_text);
                        _self.find('span').text(response.left);
                        _self.removeAttr('disabled');
                    }else{
                        _self.remove();
                    }

                }
            }
        });

    });


    /***************************************
    *********    BUTTON TO TOP   ***********
    ****************************************
    */
    var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
    var delay = 1000; // Задержка прокрутки
        $(window).scroll(function () { // При прокрутке попадаем в эту функцию
            /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
            if ($(this).scrollTop() > top_show) $('#button_to_top').fadeIn();
            else $('#button_to_top').fadeOut();
        });
        $('#button_to_top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
            /* Плавная прокрутка наверх */
            $('body, html').animate({
                scrollTop: 0
            }, delay);
        });


    /****************************************
     **********    SORT PROJECTS   ***********
     ****************************************
     */
    $('#project_sort').on('click', 'a', function(e){
        e.preventDefault();

        var _self = $(this);
        var _moreBtn = $('#more_projects');
        var url = _self.attr('href');
        var sort = _self.data('sort');
        var load = _moreBtn.data('load');
        var projects_block = $('#project_articles');

        $.ajax({
            type: 'post',
            url: url,
            data: {
                sort: sort,
                load: load
            },
            success: function(response){
                if(response.success && response.status == '200'){
                    projects_block.empty();
                    projects_block.append(response.tpl);
                    _moreBtn.data('sort', response.param + ',' + response.sort).attr('data-sort', response.param + ',' + response.sort);
                }
            }
        });

    });

    /********************************************
     ************ DATE PICKER ******************
     ******************************************/
    $('#datePicker').pickmeup_twitter_bootstrap();
    alert('хуй');

}); // END READY