<form method="post" action="/runs/create">
	{{ csrf_field() }}
	<table style="border:1px solid #000">
		<tr>
			<td><label for="run_min">Runtime (min):</label></td>
			<td><input type="number" name="run_min" value="0"></td>
		</tr>
		<tr>
			<td><label for="run_sec">Runtime (sec):</label></td>
			<td><input type="number" name="run_sec" value="0"></td>
		</tr>
		<tr>
			<td><label for="distance">Distance (mi):</label></td>
			<td><input type="number" name="distance" step="0.01" value="0.0"></td>
		</tr>
		<tr>
			<td><label for="cals">Cals burned (kcal):</label></td>
			<td><input type="number" name="cals" value="0"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" text="Submit"></td>
		</tr>
	</table>
</form>