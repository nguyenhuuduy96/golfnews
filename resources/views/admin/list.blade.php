@extends('main')
@php
$title="Notification"
@endphp
@section('title',$title)
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title"> {{$title}} Table</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="tableNotification">
						<thead class="text-primary">
							<th>
								Title
							</th>
							<th>
								Author
							</th>
							<th>
								day add
							</th>
							<th class="text-right">
								status
							</th>
							<th>
								<a  class="btn btn-primary" id="addNotification" data-toggle="modal" data-target="#ModalNotification"><i class="nc-icon nc-simple-add text-white"></i></a>
							</th>
						</thead>
						<tbody>
							@foreach($notifications as $notification)
							<tr>
								<td>
									{{Str::limit($notification->title,30,'...')}}
								</td>
								<td>
									{{$notification->author}}
								</td>
								<td>
									{{$notification->day_add}}
								</td>
								<td class="text-right">
									{{$notification->status}}
								</td>
								<td>
								<a class="btn btn-danger" onclick="deleteRow(this,{{$notification->id}})"><i class="nc-icon nc-simple-remove"></i></a>
								<a class="btn btn-success" onclick="update(this,{{$notification->id}})" data-toggle="modal" data-target="#ModalNotification"><i class="nc-icon nc-tag-content"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</div>
<!--Modal form notification-->
<div class="modal fade" id="ModalNotification">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="titleProduct">Add new Notification</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="container">
					<form class="row" id="NotificationSubmit" action="javascript:void(0)">
						@csrf
						
						<div class="col-sm-12" id="emptyNotification">
							<div class="form-group" >
								<div id="id">

								</div>
								<label for="type" >Title:</label>
								<input type="hidden" class="form-control" id="rowid" placeholder="ten san pham" name="rowid" value="" >
								<input type="text" class="form-control" id="title" placeholder="title" name="title" >
								<span class="error_title" style="color: red"></span>
							</div>
							<div class="form-group">
								<label for="date">Content:</label>
								<textarea class="form-control content" id="content" name="content" rows="3"></textarea>
								<span class="error_content" style="color: red"></span>
							</div>
						
							<div class="form-group" >
							    <input type="submit" value="submit" class="btn btn-primary">
							</div>
						
						</div>
						
					</form>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
@endsection
@section('js')
<script src="{{asset('admin/js/notification.js')}}"></script>
@endsection