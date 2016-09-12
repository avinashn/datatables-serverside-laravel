<!DOCTYPE html>
<head>
<link
	href="https://cdn.datatables.net/1.10.12/css/dataTables.material.min.css"
	rel="stylesheet">
<link
	href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"
	rel="stylesheet">
</head>
<body>
	<table class="datatable mdl-data-table dataTable" cellspacing="0"
		width="100%" role="grid" 
		style="width: 100%;">
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Country</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
	<script
		src="https://cdn.datatables.net/1.10.12/js/dataTables.material.min.js"></script>
	<script>
    $(document).ready(function(){
      $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('serverSide') }}',
            columnDefs: [
                         {
                             targets: [ 0, 1, 2 ],
                             className: 'mdl-data-table__cell--non-numeric'
                         }
                     ]
        });
    });
  </script>
</body>