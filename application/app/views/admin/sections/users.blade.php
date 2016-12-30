<table class="table table-striped">
	<tr class="table-header">
		<th>{{ Lang::get('lang.username') }}</th>
		<th>{{ Lang::get('lang.num_of_flags') }}</th>
		<th>{{ Lang::get('lang.actions') }}</th>
		@foreach($users as $user)
		<tr>
			<td><a href="{{ URL::to('user') . '/' . $user->username }}" target="_blank">
				<?php if(strlen($user->username) > 40){
						echo substr($user->username, 0, 40) . '...';
					  } else {
					  	echo $user->username;
					  }
				?>
				</a>
			</td>
			<td>
				{{ $user->totalFlags() }}
			</td>
			<td>
				@if($user->active)
					<a href="{{ URL::to('admin/deactivate_user') . '/' . $user->id }}" class="btn btn-xs btn-danger disable-username-{{ $user->username }}"><span class="fa fa-minus-circle"></span> {{ Lang::get('lang.disable_user') }}</a>
				@else
					<a href="{{ URL::to('admin/activate_user') . '/' . $user->id }}" class="btn btn-xs btn-success"><span class="fa fa-plus-circle"></span> {{ Lang::get('lang.enable_user') }}</a>
				@endif
			</td>
			
		</tr>
		@endforeach
</table>