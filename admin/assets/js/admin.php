<?php header('Content-Type: application/javascript'); ?>

(function ($) {

    'use strict';

    function MultipleSelect($el, options) {
        var that = this,
            name = $el.attr('wpmc-sel-name') || options.name || ''

        $el.parent().hide();
        var elWidth = $el.css("width");
        $el.parent().show();
        if (elWidth=="0px") {elWidth = $el.outerWidth()+20}

        this.$el = $el.hide();
        this.options = options;
        this.$parent = $('<div' + $.map(['class', 'title'],function (att) {
            var attValue = that.$el.attr(att) || '';
            attValue = (att === 'class' ? ('ms-parent' + (attValue ? ' ' : '')) : '') + attValue;
            return attValue ? (' ' + att + '="' + attValue + '"') : '';
        }).join('') + ' />');
        this.$choice = $('<button type="button" class="ms-choice"><span class="placeholder">' +
            options.placeholder + '</span><div></div></button>');
        this.$drop = $('<div class="ms-drop ' + options.position + '"></div>');
        this.$el.after(this.$parent);
        this.$parent.append(this.$choice);
        this.$parent.append(this.$drop);

        if (this.$el.prop('disabled')) {
            this.$choice.addClass('disabled');
        }
        this.$parent.css('width', options.width || elWidth);

        if (!this.options.keepOpen) {
            $('body').click(function (e) {
                if ($(e.target)[0] === that.$choice[0] ||
                    $(e.target).parents('.ms-choice')[0] === that.$choice[0]) {
                    return;
                }
                if (($(e.target)[0] === that.$drop[0] ||
                    $(e.target).parents('.ms-drop')[0] !== that.$drop[0]) &&
                    that.options.isOpen) {
                    that.close();
                }
            });
        }

        this.selectAllName = 'name="selectAll' + name + '"';
        this.selectGroupName = 'name="selectGroup' + name + '"';
        this.selectItemName = 'name="country' + name + '"';
    }

    MultipleSelect.prototype = {
        constructor: MultipleSelect,

        init: function () {
            var that = this,
                html = [];
            if (this.options.filter) {
                html.push(
                    '<div class="ms-search">',
                    '<input type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false">',
                    '</div>'
                );
            }
            html.push('<ul>');
            if (this.options.selectAll && !this.options.single) {
                html.push(
                    '<li class="ms-select-all">',
                    '<label>',
                    '<input type="checkbox" ' + this.selectAllName + ' /> ',
                    this.options.selectAllDelimiter[0] + this.options.selectAllText + this.options.selectAllDelimiter[1],
                    '</label>',
                    '</li>'
                );
            }
            $.each(this.$el.children(), function (i, elm) {
                html.push(that.optionToHtml(i, elm));
            });
            html.push('<li class="ms-no-results">' + this.options.noMatchesFound + '</li>');
            html.push('</ul>');
            this.$drop.html(html.join(''));

            this.$drop.find('ul').css('max-height', this.options.maxHeight + 'px');
            this.$drop.find('.multiple').css('width', this.options.multipleWidth + 'px');

            this.$searchInput = this.$drop.find('.ms-search input');
            this.$selectAll = this.$drop.find('input[' + this.selectAllName + ']');
            this.$selectGroups = this.$drop.find('input[' + this.selectGroupName + ']');
            this.$selectItems = this.$drop.find('input[' + this.selectItemName + ']:enabled');
            this.$disableItems = this.$drop.find('input[' + this.selectItemName + ']:disabled');
            this.$noResults = this.$drop.find('.ms-no-results');
            this.events();
            this.updateSelectAll(true);
            this.update(true);

            if (this.options.isOpen) {
                this.open();
            }
        },

        optionToHtml: function (i, elm, group, groupDisabled) {
            var that = this,
                $elm = $(elm),
                html = [],
                multiple = this.options.multiple,
                optAttributesToCopy = ['class', 'title'],
                clss = $.map(optAttributesToCopy, function (att, i) {
                    var isMultiple = att === 'class' && multiple;
                    var attValue = $elm.attr(att) || '';
                    return (isMultiple || attValue) ?
                        (' ' + att + '="' + (isMultiple ? ('multiple' + (attValue ? ' ' : '')) : '') + attValue + '"') :
                        '';
                }).join(''),
                disabled,
                type = this.options.single ? 'radio' : 'checkbox';

            if ($elm.is('option')) {
                var value = $elm.val(),
                    text = that.options.textTemplate($elm),
                    selected = (that.$el.attr('multiple') != undefined) ? $elm.prop('selected') : ($elm.attr('selected') == 'selected'),
                    style = this.options.styler(value) ? ' style="' + this.options.styler(value) + '"' : '';

                disabled = groupDisabled || $elm.prop('disabled');
                if ((this.options.blockSeparator > "") && (this.options.blockSeparator == $elm.val())) {
                    html.push(
                        '<li' + clss + style + '>',
                        '<label class="' + this.options.blockSeparator + (disabled ? 'disabled' : '') + '">',
                        text,
                        '</label>',
                        '</li>'
                    );
                } else {
                    html.push(
                        '<li' + clss + style + '>',
                        '<label' + (disabled ? ' class="disabled"' : '') + '>',
                        '<input type="' + type + '" ' + this.selectItemName + ' value="' + value + '"' +
                            (selected ? ' checked="checked"' : '') +
                            (disabled ? ' disabled="disabled"' : '') +
                            (group ? ' data-group="' + group + '"' : '') +
                            '/> ',
                        text,
                        '</label>',
                        '</li>'
                    );
                }
            } else if (!group && $elm.is('optgroup')) {
                var _group = 'group_' + i,
                    label = $elm.attr('label');

                disabled = $elm.prop('disabled');
                html.push(
                    '<li class="group">',
                    '<label class="optgroup' + (disabled ? ' disabled' : '') + '" data-group="' + _group + '">',
                    (this.options.hideOptgroupCheckboxes ? '' : '<input type="checkbox" ' + this.selectGroupName +
                        (disabled ? ' disabled="disabled"' : '') + ' /> '),
                    label,
                    '</label>',
                    '</li>');
                $.each($elm.children(), function (i, elm) {
                    html.push(that.optionToHtml(i, elm, _group, disabled));
                });
            }
            return html.join('');
        },

        events: function () {
            var that = this;

            function toggleOpen(e) {
                e.preventDefault();
                that[that.options.isOpen ? 'close' : 'open']();
            }

            var label = this.$el.parent().closest('label')[0] || $('label[for=' + this.$el.attr('id') + ']')[0];
            if (label) {
                $(label).off('click').on('click', function (e) {
                    if (e.target.nodeName.toLowerCase() !== 'label' || e.target !== this) {
                        return;
                    }
                    toggleOpen(e);
                    if (!that.options.filter || !that.options.isOpen) {
                        that.focus();
                    }
                    e.stopPropagation(); 
                });
            }
            this.$choice.off('click').on('click', toggleOpen)
                .off('focus').on('focus', this.options.onFocus)
                .off('blur').on('blur', this.options.onBlur);

            this.$parent.off('keydown').on('keydown', function (e) {
                switch (e.which) {
                    case 27: 
                        that.close();
                        that.$choice.focus();
                        break;
                }
            });
            this.$searchInput.off('keydown').on('keydown',function (e) {
                if (e.keyCode === 9 && e.shiftKey) { 
                    that.close();
                }
            }).off('keyup').on('keyup', function (e) {
                    if (that.options.filterAcceptOnEnter &&
                        (e.which === 13 || e.which == 32) && 
                        that.$searchInput.val() 
                        ) {
                        that.$selectAll.click();
                        that.close();
                        that.focus();
                        return;
                    }
                    that.filter();
                });
            this.$selectAll.off('click').on('click', function () {
                var checked = $(this).prop('checked'),
                    $items = that.$selectItems.filter(':visible');
                if ($items.length === that.$selectItems.length) {
                    that[checked ? 'checkAll' : 'uncheckAll']();
                } else {
                    that.$selectGroups.prop('checked', checked);
                    $items.prop('checked', checked);
                    that.options[checked ? 'onCheckAll' : 'onUncheckAll']();
                    that.update();
                }
            });
            this.$selectGroups.off('click').on('click', function () {
                var group = $(this).parent().attr('data-group'),
                    $items = that.$selectItems.filter(':visible'),
                    $children = $items.filter('[data-group="' + group + '"]'),
                    checked = $children.length !== $children.filter(':checked').length;
                $children.prop('checked', checked);
                that.updateSelectAll();
                that.update();
                that.options.onOptgroupClick({
                    label: $(this).parent().text(),
                    checked: checked,
                    children: $children.get()
                });
            });
            this.$selectItems.off('click').on('click', function () {
                that.updateSelectAll();
                that.update();
                that.updateOptGroupSelect();
                that.options.onClick({
                    label: $(this).parent().text(),
                    value: $(this).val(),
                    checked: $(this).prop('checked')
                });

                if (that.options.single && that.options.isOpen && !that.options.keepOpen) {
                    that.close();
                }
            });
        },

        open: function () {
            if (this.$choice.hasClass('disabled')) {
                return;
            }
            this.options.isOpen = true;
            this.$choice.find('>div').addClass('open');
            this.$drop.slideDown();

        
            this.$selectAll.parent().show();
            this.$noResults.hide();

        
            if (this.$el.children().length === 0) {
                this.$selectAll.parent().hide();
                this.$noResults.show();
            }

            if (this.options.container) {
                var offset = this.$drop.offset();
                this.$drop.appendTo($(this.options.container));
                this.$drop.offset({ top: offset.top, left: offset.left });
            }
            if (this.options.filter) {
                this.$searchInput.val('');
                this.$searchInput.focus();
                this.filter();
            }
            this.options.onOpen();
        },

        close: function () {
            this.options.isOpen = false;
            this.$choice.find('>div').removeClass('open');
            this.$drop.slideUp();
            if (this.options.container) {
                this.$parent.append(this.$drop);
                this.$drop.css({
                    'top': 'auto',
                    'left': 'auto'
                });
            }
            this.options.onClose();
        },

        update: function (isInit) {
            var selects = this.getSelects(),
                $span = this.$choice.find('>span');

            if (selects.length === 0) {
                $span.addClass('placeholder').html(this.options.placeholder);
            } else if (this.options.countSelected && selects.length < this.options.minumimCountSelected) {
                $span.removeClass('placeholder').html(
                    (this.options.displayValues ? selects : this.getSelects('text'))
                        .join(this.options.delimiter));
            } else if (this.options.allSelected &&
                selects.length === this.$selectItems.length + this.$disableItems.length) {
                $span.removeClass('placeholder').html(this.options.allSelected);
            } else if ((this.options.countSelected || this.options.etcaetera) && selects.length > this.options.minumimCountSelected) {
                if (this.options.etcaetera) {
                    $span.removeClass('placeholder').html((this.options.displayValues ? selects : this.getSelects('text').slice(0, this.options.minumimCountSelected)).join(this.options.delimiter) + '...');
                }
                else {
                    $span.removeClass('placeholder').html(this.options.countSelected
                        .replace('#', selects.length)
                        .replace('%', this.$selectItems.length + this.$disableItems.length));
                }
            } else {
                $span.removeClass('placeholder').html(
                    (this.options.displayValues ? selects : this.getSelects('text'))
                        .join(this.options.delimiter));
            }

            this.$el.val(this.getSelects());


            this.$drop.find('li').removeClass('selected');
            this.$drop.find('input[' + this.selectItemName + ']:checked').each(function () {
                $(this).parents('li').first().addClass('selected');
            });


            if (!isInit) {
                this.$el.trigger('change');
            }
        },

        updateSelectAll: function (Init) {
            var $items = this.$selectItems;
            if (!Init) { $items = $items.filter(':visible'); }
            this.$selectAll.prop('checked', $items.length &&
                $items.length === $items.filter(':checked').length);
            if (this.$selectAll.prop('checked')) {
                this.options.onCheckAll();
            }
        },

        updateOptGroupSelect: function () {
            var $items = this.$selectItems.filter(':visible');
            $.each(this.$selectGroups, function (i, val) {
                var group = $(val).parent().attr('data-group'),
                    $children = $items.filter('[data-group="' + group + '"]');
                $(val).prop('checked', $children.length &&
                    $children.length === $children.filter(':checked').length);
            });
        },


        getSelects: function (type) {
            var that = this,
                texts = [],
                values = [];
            this.$drop.find('input[' + this.selectItemName + ']:checked').each(function () {
                texts.push($(this).parents('li').first().text());
                values.push($(this).val());
            });

            if (type === 'text' && this.$selectGroups.length) {
                texts = [];
                this.$selectGroups.each(function () {
                    var html = [],
                        text = $.trim($(this).parent().text()),
                        group = $(this).parent().data('group'),
                        $children = that.$drop.find('[' + that.selectItemName + '][data-group="' + group + '"]'),
                        $selected = $children.filter(':checked');

                    if ($selected.length === 0) {
                        return;
                    }

                    html.push('[');
                    html.push(text);
                    if ($children.length > $selected.length) {
                        var list = [];
                        $selected.each(function () {
                            list.push($(this).parent().text());
                        });
                        html.push(': ' + list.join(', '));
                    }
                    html.push(']');
                    texts.push(html.join(''));
                });
            }
            return type === 'text' ? texts : values;
        },

        setSelects: function (values) {
            var that = this;
            this.$selectItems.prop('checked', false);
            $.each(values, function (i, value) {
                that.$selectItems.filter('[value="' + value + '"]').prop('checked', true);
            });
            this.$selectAll.prop('checked', this.$selectItems.length ===
                this.$selectItems.filter(':checked').length);
            this.update();
        },

        enable: function () {
            this.$choice.removeClass('disabled');
        },

        disable: function () {
            this.$choice.addClass('disabled');
        },

        checkAll: function () {
            this.$selectItems.prop('checked', true);
            this.$selectGroups.prop('checked', true);
            this.$selectAll.prop('checked', true);
            this.update();
            this.options.onCheckAll();
        },

        uncheckAll: function () {
            this.$selectItems.prop('checked', false);
            this.$selectGroups.prop('checked', false);
            this.$selectAll.prop('checked', false);
            this.update();
            this.options.onUncheckAll();
        },

        focus: function () {
            this.$choice.focus();
            this.options.onFocus();
        },

        blur: function () {
            this.$choice.blur();
            this.options.onBlur();
        },

        refresh: function () {
            this.init();
        },

        filter: function () {
            var that = this,
                text = $.trim(this.$searchInput.val()).toLowerCase();
            if (text.length === 0) {
                this.$selectItems.parent().show();
                this.$disableItems.parent().show();
                this.$selectGroups.parent().show();
            } else {
                this.$selectItems.each(function () {
                    var $parent = $(this).parent();
                    $parent[$parent.text().toLowerCase().indexOf(text) < 0 ? 'hide' : 'show']();
                });
                this.$disableItems.parent().hide();
                this.$selectGroups.each(function () {
                    var $parent = $(this).parent();
                    var group = $parent.attr('data-group'),
                        $items = that.$selectItems.filter(':visible');
                    $parent[$items.filter('[data-group="' + group + '"]').length === 0 ? 'hide' : 'show']();
                });


                if (this.$selectItems.filter(':visible').length) {
                    this.$selectAll.parent().show();
                    this.$noResults.hide();
                } else {
                    this.$selectAll.parent().hide();
                    this.$noResults.show();
                }
            }
            this.updateOptGroupSelect();
            this.updateSelectAll();
        }
    };

    $.fn.multipleSelect = function () {
        var option = arguments[0],
            args = arguments,

            value,
            allowedMethods = [
                'getSelects', 'setSelects',
                'enable', 'disable',
                'checkAll', 'uncheckAll',
                'focus', 'blur',
                'refresh'
            ];

        this.each(function () {
            var $this = $(this),
                data = $this.data('multipleSelect'),
                options = $.extend({}, $.fn.multipleSelect.defaults,
                    $this.data(), typeof option === 'object' && option);

            if (!data) {
                data = new MultipleSelect($this, options);
                $this.data('multipleSelect', data);
            }

            if (typeof option === 'string') {
                if ($.inArray(option, allowedMethods) < 0) {
                    throw "Unknown method: " + option;
                }
                value = data[option](args[1]);
            } else {
                data.init();
                if (args[1]) {
                    value = data[args[1]].apply(data, [].slice.call(args, 2));
                }
            }
        });

        return value ? value : this;
    };

    $.fn.multipleSelect.defaults = {
        name: '',
        isOpen: false,
        placeholder: '',
        selectAll: true,
        selectAllText: 'Select all',
        selectAllDelimiter: ['[', ']'],
        allSelected: 'All selected',
        minumimCountSelected: 3,
        countSelected: '# of % selected',
        noMatchesFound: 'No matches found',
        multiple: false,
        multipleWidth: 80,
        single: false,
        filter: false,
        width: undefined,
        maxHeight: 250,
        container: null,
        position: 'bottom',
        keepOpen: false,
        blockSeparator: '',
        displayValues: false,
        delimiter: ', ',

        styler: function () {
            return false;
        },
        textTemplate: function ($elm) {
            return $elm.text();
        },

        onOpen: function () {
            return false;
        },
        onClose: function () {
            return false;
        },
        onCheckAll: function () {
            return false;
        },
        onUncheckAll: function () {
            return false;
        },
        onFocus: function () {
            return false;
        },
        onBlur: function () {
            return false;
        },
        onOptgroupClick: function () {
            return false;
        },
        onClick: function () {
            return false;
        }
    };
})(jQuery);

(function ( $ ) {
	"use strict";
	
	$(function () {

if(location.hash){
	$('.wpmca_box').removeClass('show').filter(location.hash).addClass('show');
	$('div.wpmca_tabs li').removeClass('active');
	$('div.wpmca_tabs li:has(a[href="'+location.hash+'"])').addClass('active');
}
$('li.material-design a').click(function(e){
	var target = e.target;
    var rect = target.getBoundingClientRect();
    var ripple = target.querySelector('.ripple');
    if (!ripple) {
        ripple = document.createElement('span');
        ripple.className = 'ripple';
        ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
        target.appendChild(ripple);
    }
    ripple.classList.remove('show');
    var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
    var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
    ripple.style.top = top + 'px';
    ripple.style.left = left + 'px';
    ripple.classList.add('show');
    return false;

});
$('.wpmca_menu_icon').click(function(){
  $('.wpmca_menu_box').toggleClass('active'); 
});

$('.wpmca_menu_box a').click(function(e){
    e.preventDefault();
    $(".wpmca_box").removeClass('show');
    $("#"+$(this).attr("href").replace("#",'')).addClass('show');
     $('.wpmca_menu_box').toggleClass('active'); 
     $('.wpmca_menu_title').html($(this).attr("data-title"));    
});

$('button.material-design').click(function(e){
    var target = e.target;
    var rect = target.getBoundingClientRect();
    var ripple = target.querySelector('.ripple');
    if (!ripple) {
        ripple = document.createElement('span');
        ripple.className = 'ripple';
        ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
        target.appendChild(ripple);
    }
    ripple.classList.remove('show');
    var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
    var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
    ripple.style.top = top + 'px';
    ripple.style.left = left + 'px';
    ripple.classList.add('show');
    return false;

});

$('.tabitem a').click(function(e){
	e.preventDefault();
	$(".wpmca_box").removeClass('show');
	$("#"+$(this).attr("href").replace("#",'')).addClass('show');
	$('.tabitem').removeClass("active");
	$(this).parent().addClass('active');
	$('.wpmca_menu_title').html($(this).attr("data-title"));
});

$('.wpmchimp-color-sel').wpColorPicker();
$('#wpmca_update').click(function (e){
			e.preventDefault();
			tinyMCE.triggerSave(false, true);
			$('#wpmcaaction').val('wpmchimpa_us_ajax');
			$(".wpmca_status").hide();
			$('.wpmcaspinner').fadeIn();
			$.ajax({
				type:"POST",
				url: "./admin-ajax.php",
				data: $('#wpmca_form').serialize(),
				success:function(data){
					if(data == '1') ajax_success();
					else ajax_error();
				}
			});
			return false;
		});
$('#wpmca_load_list').click(function (e){
			e.preventDefault();
			$(".wpmca_status").hide();
			$('.wpmcaspinner').fadeIn();
			$('#list_result .list_load_result').html('');
			$.ajax({
				type:"POST",
				url: "./admin-ajax.php",
				dataType: "json",
				data: { action: "wpmchimpa_load_list", api_key: $("#api_key").val() },
				success:function(data){
					if(data.stat == "0"){
						ajax_error();
						$('#list_result .list_load_result').html("Please Create a List in MailChimp");
					}
					else if(data.stat == "1"){
						ajax_success();
						delete data.stat;
						group_opt(data);
					}
					else {
						ajax_success();
						var response= '<div class="group"><div class="wpmcapara">Select Your MailChimp List</div></div>';
						for (var i = 0; i < data.lists.length; i++) { 
    						response += '<div class="group wpmcacb p1"><input type="radio" name="sel_list" id="sel_list'+i+'" value="'+data.lists[i].id+'"><label for="sel_list'+i+'">'+data.lists[i].name+'</label></div>';
						}
						response += '<div class="group"><button class="wpmca_button wpmca_sel_button green material-design" id="wpmca_sel_list">Select List</button></div>';
						$('#list_result .list_load_result').html(response);
						$('#wpmca_sel_list').click(function(){
							e.preventDefault();
							sel_list_func();
							return false});
					}
				}
				});
			return false;
});
function ajax_success(){
	$('.wpmcaspinner').fadeOut(function(){
		$(".wpmca_status").show().addClass('wpmcaupdated').delay('3000').fadeOut(4000,function(){
			$(".wpmca_status").removeClass('wpmcaupdated');
		});
	});
}
function ajax_error(){
	$('.wpmcaspinner').fadeOut(function(){
		$(".wpmca_status").show().addClass('wpmcaerror').delay('3000').fadeOut(4000,function(){
			$(".wpmca_status").removeClass('wpmcaerror');
		});
	});
}
function group_opt(data){
	var response = 'Groups in MailChimp List '+data.list_name;
	if(!data.hasOwnProperty('groups')) {
		show_list_final(data);
	}
	else {
		for (var i = 0; i < data.groups.length; i++) {
			response += '<span class="bulletted">'+data.groups[i].group_name+'</span>';
			for (var j = 0; j < data.groups[i].groups.length; j++) { 
				response += '<div class="group wpmcacb p2"><input type="checkbox" class="sel_groups" name="sel_groups[]" value="'+data.groups[i].groups[j].id+'"><label>'+data.groups[i].groups[j].gname+'</label></div>';
			}
		}
		response += '<div class="group"><button class="wpmca_button wpmca_sel_button green material-design" id="wpmca_sel_group">Select groups</button></div>';
		$('#list_result .list_load_result').html(response);
		$('#wpmca_sel_group').click(function(e){
			e.preventDefault();
			sel_group_func(data);
			return false});
	}
}
function sel_group_func(data){
	$(".wpmca_status").hide();
	$('.wpmcaspinner').fadeIn();
	var mygroups = new Array();
    $(".sel_groups").each(function() {
        if($(this).attr('checked'))
       		mygroups.push($(this).val());
    });
    for(var i=0; i < data.groups.length; i++){
    	for(var j=0; j < data.groups[i].groups.length;j++){
    		if(jQuery.inArray(data.groups[i].groups[j].id+'', mygroups)==-1){
    			data.groups[i].groups.splice(j,1);
    			j--;
    		}
    	}
    	if(data.groups[i].groups.length == 0){
    		data.groups.splice(i,1);
    		i--;
    	}
    }
    if(data.groups.length == 0)
    	delete data.groups;
    ajax_success();
    show_list_final(data);
}
function show_list_final(data){
	$('#wpmca_list_record').val(JSON.stringify(data));
	var response='MailChimp List Name<span class="bulletted">'+data.list_name+'</span>'
	if(data.hasOwnProperty('groups')){
		response +='Groups in MailChimp List';
		for (var i = 0; i < data.groups.length; i++) { 
			response += '<span class="wpmcapara p1">'+data.groups[i].group_name+'</span>';
			for(var j = 0; j < data.groups[i].groups.length; j++)
				response += '<span class="bulletted">'+data.groups[i].groups[j].gname+'</span>';
		}
	}
    $('#list_result .list_load_result').html(response);
}
function sel_list_func(){
	$(".wpmca_status").hide();
	$('.wpmcaspinner').fadeIn();
	$.ajax({
		type:"POST",
		url: "./admin-ajax.php",
		dataType: "json",
		data: { action: "wpmchimpa_sel_list", sel_list: $('input[name=sel_list]:checked').val(), api_key: $("#api_key").val() },
		success:function(data){
			ajax_success();
			group_opt(data);
		}
	});
}

 $.each(wpmchimpa.countries, function(index, value){
			$('#incl').append('<option disabled value="'+value.code+'">'+value.name+'</option>');
		});
		 $('#incl').multipleSelect({
            width: '300px',placeholder: "Exclude Countries", selectAll: false
        });


var goo_app = '<optgroup label="Web Safe Font"><option value="Georgia, serif|ng">Georgia, serif</option><option value="Palatino Linotype, Book Antiqua, Palatino, serif, serif|ng">Palatino Linotype, Book Antiqua, Palatino, serif, serif</option><option value="Times New Roman, Times, serif|ng">Times New Roman, Times, serif</option><option value="Arial, Helvetica, sans-serif|ng">Arial, Helvetica, sans-serif</option><option value="Arial Black, Gadget, sans-serif|ng">Arial Black, Gadget, sans-serif</option><option value="Comic Sans MS, cursive, sans-serif|ng">Comic Sans MS, cursive, sans-serif</option><option value="Impact, Charcoal, sans-serif|ng">Impact, Charcoal, sans-serif</option><option value="Lucida Sans Unicode, Lucida Grande, sans-serif|ng">Lucida Sans Unicode, Lucida Grande, sans-serif</option><option value="Open Sans, sans-serif|ng">Open Sans, sans-serif</option><option value="Tahoma, Geneva, sans-serif|ng">Tahoma, Geneva, sans-serif</option><option value="Trebuchet MS, Helvetica, sans-serif|ng">Trebuchet MS, Helvetica, sans-serif</option><option value="Verdana, Geneva, sans-serif|ng">Verdana, Geneva, sans-serif</option><option value="Courier New, Courier, monospace|ng">Courier New, Courier, monospace</option><option value="Lucida Console, Monaco, monospace|ng">Courier New, Courier, monospace</option></optgroup><optgroup label="Google Fonts">';

  $.each(wpmchimpa.goog_fonts, function(index, value){
			goo_app += '<option value="'+value+'">'+value+'</option>';
		});
    goo_app += '</optgroup>';
   $('.google_fonts').append(goo_app);
  for(var i=1;i<=100;i++){
	$('.google_fonts_size').append('<option value="'+i+'">'+i+'</option>');
}

if(isset(wpmchimpa.lite_heading_f))$("select[name='lite_heading_f']").val(wpmchimpa.lite_heading_f);
if(isset(wpmchimpa.lite_heading_fs))$("select[name='lite_heading_fs']").val(wpmchimpa.lite_heading_fs);
if(isset(wpmchimpa.lite_msg_f))$("select[name='lite_msg_f']").val(wpmchimpa.lite_msg_f);
if(isset(wpmchimpa.lite_msg_fs))$("select[name='lite_msg_fs']").val(wpmchimpa.lite_msg_fs);
if(isset(wpmchimpa.lite_tbox_f))$("select[name='lite_tbox_f']").val(wpmchimpa.lite_tbox_f);
if(isset(wpmchimpa.lite_tbox_fs))$("select[name='lite_tbox_fs']").val(wpmchimpa.lite_tbox_fs);
if(isset(wpmchimpa.lite_button_f))$("select[name='lite_button_f']").val(wpmchimpa.lite_button_f);
if(isset(wpmchimpa.lite_button_fs))$("select[name='lite_button_fs']").val(wpmchimpa.lite_button_fs);

if(isset(wpmchimpa.widget_msg_f))$("select[name='widget_msg_f']").val(wpmchimpa.widget_msg_f);
if(isset(wpmchimpa.widget_msg_fs))$("select[name='widget_msg_fs']").val(wpmchimpa.widget_msg_fs);
if(isset(wpmchimpa.widget_tbox_f))$("select[name='widget_tbox_f']").val(wpmchimpa.widget_tbox_f);
if(isset(wpmchimpa.widget_tbox_fs))$("select[name='widget_tbox_fs']").val(wpmchimpa.widget_tbox_fs);
if(isset(wpmchimpa.widget_button_f))$("select[name='widget_button_f']").val(wpmchimpa.widget_button_f);
if(isset(wpmchimpa.widget_button_fs))$("select[name='widget_button_fs']").val(wpmchimpa.widget_button_fs);

if(isset(wpmchimpa.addon_heading_f))$("select[name='addon_heading_f']").val(wpmchimpa.addon_heading_f);
if(isset(wpmchimpa.addon_heading_fs))$("select[name='addon_heading_fs']").val(wpmchimpa.addon_heading_fs);
if(isset(wpmchimpa.addon_msg_f))$("select[name='addon_msg_f']").val(wpmchimpa.addon_msg_f);
if(isset(wpmchimpa.addon_msg_fs))$("select[name='addon_msg_fs']").val(wpmchimpa.addon_msg_fs);
if(isset(wpmchimpa.addon_tbox_f))$("select[name='addon_tbox_f']").val(wpmchimpa.addon_tbox_f);
if(isset(wpmchimpa.addon_tbox_fs))$("select[name='addon_tbox_fs']").val(wpmchimpa.addon_tbox_fs);
if(isset(wpmchimpa.addon_button_f))$("select[name='addon_button_f']").val(wpmchimpa.addon_button_f);
if(isset(wpmchimpa.addon_button_fs))$("select[name='addon_button_fs']").val(wpmchimpa.addon_button_fs);

$('.wpmccolor').wpColorPicker({
	change:function (event,ui){
		$('#wpmca_preview p').css('color','#'+ui.color._color.toString(16));
	}
});
$('.live_font').change(function (){
	var font_name= $('.live_font.google_fonts').val();
	var font_size= $('.live_font.google_fonts_size').val();
	var font_weight= $('.live_font.google_fonts_weight').val();
	var font_style= $('.live_font.google_fonts_style').val();
	if(font_name.indexOf('|ng') >- 1){
		font_name=font_name.replace('|ng','');
		$('#wpmca_preview p').css('font-family',font_name);
	}
	else {
		WebFont.load({
		    google: {
		      families: [font_name]
		    },
		    active: function() {
		    	 $('#wpmca_preview p').css('font-family',font_name);
		    }
  		});
  	}
 $('#wpmca_preview p').css('font-family',font_name);
	$('#wpmca_preview p').css('font-size',font_size+'px');
	$('#wpmca_preview p').css('font-weight',font_weight);
	$('#wpmca_preview p').css('font-style',font_style);
});



$(window).scroll(function(){
    if($('.wpmca_header').height()>100)$(".wpmca_toolbar").css({"top": '0'});
    else{
  if ($(window).scrollTop() > 110){
    	$(".wpmca_toolbar").css({"top": ($(window).scrollTop()) -110 + "px"});
	}else $(".wpmca_toolbar").css({"top": '0'});
}
});

	
 $('#ms,#ms1').change(function() {
        }).multipleSelect({  
            width: '300px'
        });
	

$('#wpmca_backup').click(function(e){
	e.preventDefault();
	window.open('./admin-ajax.php?action=wpmchimpa_secure&q=backup',"_self");
	return false;
});
$('#wpmca_restore').click(function(e){
	e.preventDefault();
	$('#file_sel').click();
	return false;
});
$('#wpmca_reset').click(function(e){
   e.preventDefault();
   if (confirm('Are you sure you want to reset Plugin values to default?')) {
        $('.wpmcaspinner').fadeIn();
        $.post('./admin-ajax.php?action=wpmchimpa_secure&q=reset','',
                function(e){ajax_success();location.reload();
          });
    }    
   return false; 
});
$('.wpmchimpa_donate').click(function(){
   $('#donate_form').submit(); 
});
$('.feat_buypro').click(function(){
    window.open("http://voltroid.com/wordpress/plugins/chimpmate","_blank");
});
$('#faq_button').click(function(){
    window.open("http://voltroid.com/wordpress/plugins/chimpmate#faq","_blank");
});
$('#sup_button').click(function(){
    window.open("http://voltroid.com/wordpress/plugins/chimpmate#support","_blank");
});
var JsonObj = null;
function handleFileSelect(evt) {
	$('.wpmcaspinner').fadeIn();
    var files = evt.target.files; 
     var f = files[0];
      var reader = new FileReader(); 
    reader.readAsText(f);
    reader.onload = function() {
        var text = JSON.parse(reader.result);
      $.post('./admin-ajax.php?action=wpmchimpa_secure&q=restore',
      	{ 'data' : text},
      		function(e){ajax_success();location.reload();
      });
	}
}
$('#file_sel').change(handleFileSelect);
	
$('.premium').click(function(){
    $(this).closest('.wpmca_group').find('.prefeat').addClass('click');
    $('.prefeat').click(function(){
        window.open("http://voltroid.com/wordpress/plugins/chimpmate","_blank");
    });
    return false;
}); 
$('.premium').hover(function(){
 if(!$(this).closest('.wpmca_group').find('.prefeat').hasClass('click'))
    $(this).closest('.wpmca_group').append('<div class="prefeat"></div>');
},function(){
    if(!$(this).closest('.wpmca_group').find('.prefeat').hasClass('click'))
        $(this).closest('.wpmca_group').find('.prefeat').remove();
});

$('.premiumsp').click(function(){
    $('#premiumshow').find('.prefeat').addClass('click');
    $('.prefeat').click(function(){
        window.open("http://voltroid.com/wordpress/plugins/chimpmate","_blank");
    });
    return false;
}); 
$('.premiumsp').hover(function(){
 if(!$('#premiumshow').find('.prefeat').hasClass('click'))
    $('#premiumshow').append('<div class="prefeat"></div>');
},function(){
    if(!$('#premiumshow').find('.prefeat').hasClass('click'))
        $('#premiumshow').find('.prefeat').remove();
});
$('#view_chart').click(function(){
    $('#goog_charts').show();
    var data = google.visualization.arrayToDataTable([
          ['Date', 'Subs', 'Unsubs', 'Mails Sent', 'Open', 'Click'],
          ['1 Jan',  1000,400,60,40, 20],
          ['3 Jan',  1170,460,80,50,50],
          ['5 Jan',  660,1120,70,50,40],
          ['7 Jan',  1000,400,100,68,32],
          ['9 Jan',  1170,460,72,16,10],
          ['11 Jan',  660,1120,60,40, 20],
          ['13 Jan',  1000,400,80,50,50],
          ['15 Jan',  1170,460,70,50,40],
          ['17 Jan',  660,1120,100,68,32],
          ['19 Jan',  1000,400,72,16,10],
          ['21 Jan',  1170,460,60,40, 20],
          ['23 Jan',  660,1120,80,50,50],
          ['25 Jan',  1000,400,70,50,40],
          ['27 Jan',  1170,460,100,68,32],
          ['29 Jan',  660,1120,72,16,10],
          ['31 Jan',  1030,540,60,40, 20]
        ]);

        var options = {
          title: 'MailChimp Statistics',
          curveType: 'function'
        };

        var chart = new google.visualization.LineChart(document.getElementById('goog_charts'));

        chart.draw(data, options);
});

	});

}(jQuery));
function isset() {
  //  discuss at: http://phpjs.org/functions/isset/
  // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: FremyCompany
  // improved by: Onno Marsman
  // improved by: Rafał Kukawski
  //   example 1: isset( undefined, true);
  //   returns 1: false
  //   example 2: isset( 'Kevin van Zonneveld' );
  //   returns 2: true

  var a = arguments,
    l = a.length,
    i = 0,
    undef;

  if (l === 0) {
    throw new Error('Empty isset');
  }

  while (i !== l) {
    if (a[i] === undef || a[i] === null) {
      return false;
    }
    i++;
  }
  return true;
}