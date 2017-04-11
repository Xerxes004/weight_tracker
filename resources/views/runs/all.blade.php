<table id="run_info_table">
	<tr><th colspan="6">Past Run Data</th></tr>
	<tr>
		<th>Runtime</th>
		<th>Distance</th>
		<th>Cals Burned</th>
		<th>Average Speed</th>
		<th></th>
		<th></th>
	</tr>
@forelse ( $runs as $run )
	<tr>
		<td>{{ $run->dur_min }}:{{ str_pad($run->dur_sec, 2, 0) }}</td>
		<td>{{ $run->dist_mi }} mi</td>
		<td>{{ $run->cals }} kcal</td>
		<td>{{ $run->mph() }} mph</td>
		<td><a href="">update</a></td>
		<td><a href="/runs/delete/{{ $run->id }}">delete</a></td>
	</tr>
@empty
	<tr><td colspan="3">No run data yet.</td></tr>
@endforelse
</table>