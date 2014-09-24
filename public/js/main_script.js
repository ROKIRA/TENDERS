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

        $.ajax({
            type: 'post',
            url: url,
            data: {
                load: load,
                count: count
            },
            success: function(response){
                if(response.success && response.status == '200'){
                    _self.prev('#project_articles').append(response.tpl);
                    _self.attr('data-load', response.load);
                    _self.find('span').text(response.left);
                }
            }
        });

    });


}); // END READY