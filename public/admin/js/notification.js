var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

function update(r,id) {
	var i = r.parentNode.parentNode.rowIndex;
	$('#id').empty();
	$('#NotificationSubmit')[0].reset();
	$('.error_title').css('display','none');
	$('.error_content').css('display','none');
	console.log(i);
	console.log(id);
	$.ajax({
		url:"update",
		method:"post",
		data:{_token:CSRF_TOKEN,id:id},
		success:function(data){
			console.log(data.notification)
			$('#id').append('<input type="hidden" name="id" value="'+id+'">');
			$('#rowid').attr('value',i);
			$('#title').attr('value',data.notification.title);
			$('#content').html(data.notification.content);
			$('#titleProduct').html('update notification');
					// console.log(data.product);
					// document.getElementById("example1").deleteRow(i);
					
		}
	})

}
function deleteRow(r,id){
	let row = r.parentNode.parentNode.rowIndex;
	// document.getElementById("tableNotification").deleteRow(row);
	let alertdelete = confirm("Are you sure you want to delete!");
	if (alertdelete == true) {
		$.ajax({
			url:'delete',
			method:'post',
			data:{_token:CSRF_TOKEN,id:id},
			success:function(data){
				if (data.error!='') {
					alert(data.error)
					return false;
				}else{
					document.getElementById("tableNotification").deleteRow(row);
				}
				
			}
		})
	}

}
// window.onload = function(){
// 	$('#ModalNotification').modal('hide');
// }
$(document).ready(function(){
	$('#addNotification').click(function(){
		$('#id').empty();
		// var str = 'Some very long string';
		//  str = str.substring(0,9)+'...';
		// console.log(str)
		$('#rowid').attr('value','');
		$('#title').attr('value','');
		$('#content').html('');
		$('#NotificationSubmit')[0].reset();
		$('#titleProduct').html('Add new Notification');
		
	})
})
$(document).ready(function(){
	$('#NotificationSubmit').on('submit',function(){
		let title = $('#title').val();
		let content = $('#content').val();
		let table = document.getElementById("tableNotification");
		let rowid = $('#rowid').val();

		if (title == "") {
			$('.error_title').html('Vui lòng nhập title');
			$('.error_title').css('display','block');
			return false;
		} else {
			$('.error_title').css('display','none');
		}
		if (content == "") {
			$('.error_content').html('Vui lòng nhập content');
			$('.error_content').css('display','block');
			return false;
		} else {
			$('.error_content').css('display','none');
		}
		
		// $('#ModalNotification').modal('hide');
		// return false;
		$.ajax({
			url:"save",
			method:'POST',
			data: new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				// console.log(data.notification);
				if (data.error!="") {
					alert(data.error)
					console.log(data.error)
						
					return false;
				}
				
				if (rowid=='') {
					console.log(data.notification)
					const row = table.insertRow(1);
					
					row.insertCell(0).innerHTML = data.notification.title.substring(0,30)+(data.notification.title.length > 30 ? "..." : "");
					row.insertCell(1).innerHTML = data.notification.author;
					row.insertCell(2).innerHTML = data.notification.day_add;
					row.insertCell(3).innerHTML = 'pendding';
					row.insertCell(4).innerHTML =`<a class="btn btn-danger" onclick="deleteRow(this,`+data.notification.id+`)"><i class="nc-icon nc-simple-remove"></i></a>
								<a class="btn btn-success" onclick="update(this,`+data.notification.id+`)" data-toggle="modal" data-target="#ModalNotification"><i class="nc-icon nc-tag-content"></i></a>`;
								alert('add new success!')
				} else {
					const cells = table.rows[rowid].cells;
					cells[0].innerHTML = data.notification.title.substring(0,30)+(data.notification.title.length > 30 ? "..." : "");
					cells[1].innerHTML = data.notification.author;
					cells[2].innerHTML = data.notification.day_add;
					cells[3].innerHTML = data.notification.status;
					cells[4].innerHTML =`<a class="btn btn-danger" onclick="deleteRow(this,`+data.notification.id+`)"><i class="nc-icon nc-simple-remove"></i></a>
								<a class="btn btn-success" onclick="update(this,`+data.notification.id+`)" data-toggle="modal" data-target="#ModalNotification"><i class="nc-icon nc-tag-content"></i></a>`;
								alert('update success!')

				}
				
				
				
			}

		})
		$('#ModalNotification').modal('hide')
		// window.stop();
		// return false;   
	})
})
 