$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord = {

// top9: 1,
search: '',

more: function(){
	var ajaxSetting = {
		method: 'get',
		url: './',
		data: {
			// top9: this.top9,
			search: this.search,
		},
		success: function(data){
			// alert(data.table);
			$('.row.products_row').html(data.table);
		},
	};
	$.ajax(ajaxSetting);
},

removeone: function(id){
	var ajaxSetting = {
		method: 'post',
		url: './clearone',
		data: {
			id: id,
		},
		success: function(data){
			// alert(data);
			BaseRecord.cart();
		},
	};
	$.ajax(ajaxSetting);
},

clearall: function(){
	var ajaxSetting = {
		method: 'post',
		url: './clearall',
		//data: {
		   // id: id,
		//},
		success: function(data){
			// alert(data);
			BaseRecord.cart();
		},
	};
	$.ajax(ajaxSetting);
},

cart: function(){
	var ajaxSetting = {
		method: 'get',
		url: './cart',
		success: function(data){
			$('#cart-items-list').html(data.table);
		    $('.listbuttonremove').click(function(){
    	    BaseRecord.removeone($(this).attr('id'));
     	    return false;
    		});
		},
	};
	$.ajax(ajaxSetting);
},

mailer: function(value){
	var ajaxSetting = {
		method: 'post',
		url: './mailer',
		data: {
			email: value,
		},
		success: function(data){
			// alert(data);
			if (data.answer) {
			var data_json = JSON.parse(data.answer);
				if (data_json['mail'])
				alert('We sent a message to your mail');
			} 
			else {
				data_json = JSON.parse(data);
				error_str = '';
				for(var i in data_json){
					error_str += data_json[i] + '\n';
				}
				alert(error_str);
			}
		},
	};
	$.ajax(ajaxSetting);
},

};