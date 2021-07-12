(function( $ ) {
    var methods = {
        init: function(options){
            $.each($('select').get(), function(key, obj){
                var selected_obj = $(obj).find('option:selected').get(0);
                var div = document.createElement('div');
                var div_title = document.createElement('div');
                var items = document.createElement('ul');
                div.className = 'conteiner-select';
                div_title.className = 'js_s_title';
                div_title.innerHTML = $(selected_obj).html();
                div.appendChild(div_title);
                $.each($(obj).find('option').get(), function(key2, opt){
                    var li = document.createElement('li');
                    if($(opt).html() === $(selected_obj).html()){
                        li.className = 'select';
                    }
                    li.innerHTML = $(opt).html();
                    items.appendChild(li);
                })
                div.appendChild(items);
                $(obj).css('display', 'none').after(div);
                $(div).append(obj);
            })
            $('.conteiner-select .js_s_title').on('click', function(){
                $(this).parent().find('ul').css('display', 'block');
            })
            $('.conteiner-select ul li').on('click', function(){
                var conteiner = $(this).closest('.conteiner-select').get(0);
                $(conteiner).find('select :selected').removeAttr('selected');
                $(conteiner).find('li.select').removeClass('select');
                $(conteiner).find('select option:eq('+$(this).index()+')').attr('selected', 'selected').trigger('change');
                $(this).addClass('select');
                $(conteiner).find('.js_s_title').html($(this).html());
                $(conteiner).find('ul').css('display', 'none');
            })
            $('.conteiner-select').on('mouseleave', function(){
                $(this).find('ul').css('display', 'none');
            })
            return this.each(function(){});
        }
    }
    jQuery.fn.styleselect = function(method){
        if ( methods[method] ) {
            return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Метод с именем ' +  method + ' не существует для jQuery.styleselect' );
        }
    };
})(jQuery);
