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
        var btn_text = _self.html();

        $.ajax({
            type: 'post',
            url: url,
            data: {
                load: load,
                count: count
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


}); // END READY