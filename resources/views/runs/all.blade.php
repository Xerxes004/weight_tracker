<table>
	<tr><th colspan="5">Past Run Data</th></tr>
	<tr>
		<th>Runtime</th>
		<th>Distance</th>
		<th>Cals Burned</th>
		<th></th>
		<th></th>
	</tr>
@forelse ( $runs as $run )
	<tr>
		<td>{{ $run->dur_min }}:{{ str_pad($run->dur_sec, 2, 0) }}</td>
		<td>{{ $run->dist_mi }}</td>
		<td>{{ $run->cals }}</td>
		<td><a href="">update</a></td>
		<td><a href="/runs/delete/{{ $run->id }}">delete</a></td>
	</tr>
@empty
	<tr><td colspan="3">No run data yet.</td></tr>
@endforelse
</table>