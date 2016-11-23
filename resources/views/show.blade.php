<table class="table table-bordered">
				<thead>
					<th>Id</th>
					<th>Title</th>
					<th>Creation Date</th>
					<th>Updated Date</th>
				</thead>
				<tbody>
							<tr>
								<td>{{ $item->id }}</td>
								<td>{{ $item->title }}</td>
								<td>{{ $item->created_at }}</td>
								<td>{{ $item->updated_at }}</td>
							</tr>

				</tbody>
</table>