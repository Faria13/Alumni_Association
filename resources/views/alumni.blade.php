@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<section class="alumni_list">
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover table-bordered nowrap" id="myTable" style="margin-top: 12px;">
				<thead>
					<tr>
						<th>Name</th>
						<th>Department</th>
						<th>Batch</th>
						<th>Session</th>
						<th>Job Title</th>
						<th>Company</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<tr data-href="{{ url('/alumni_profile') }}">
						<td>Shuhan Shuvo</td>
						<td>CSTE</td>
						<td>10th Batch</td>
						<td>2014-15</td>
						<td>Web Developer</td>
						<td>AgamiSoft.Ltd</td>
						<td><img src="{{asset('style/img/Profile-pic.PNG')}}"></td>
					</tr>

					<tr data-href="{{ url('/alumni_profile') }}">
						<td>Shuhan Shuvo</td>
						<td>CSTE</td>
						<td>10th Batch</td>
						<td>2014-15</td>
						<td>Web Developer</td>
						<td>AgamiSoft.Ltd</td>
						<td><img src="{{asset('style/img/Profile-pic.PNG')}}"></td>
					</tr>

					<tr data-href="{{ url('/alumni_profile') }}">
						<td>Shuhan Shuvo</td>
						<td>CSTE</td>
						<td>10th Batch</td>
						<td>2014-15</td>
						<td>Web Developer</td>
						<td>AgamiSoft.Ltd</td>
						<td><img src="{{asset('style/img/Profile-pic.PNG')}}"></td>
					</tr>

					<tr data-href="{{ url('/alumni_profile') }}">
						<td>Shuhan Shuvo</td>
						<td>CSTE</td>
						<td>10th Batch</td>
						<td>2014-15</td>
						<td>Web Developer</td>
						<td>AgamiSoft.Ltd</td>
						<td><img src="{{asset('style/img/Profile-pic.PNG')}}"></td>
					</tr>

					<tr data-href="{{ url('/alumni_profile') }}">
						<td>Shuhan Shuvo</td>
						<td>CSTE</td>
						<td>10th Batch</td>
						<td>2014-15</td>
						<td>Web Developer</td>
						<td>AgamiSoft.Ltd</td>
						<td><img src="{{asset('style/img/Profile-pic.PNG')}}"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<script>

    document.addEventListener("DOMContentLoaded", () => {
    const rows = document.querySelectorAll("tr[data-href]");

	rows.forEach(row => {
	
		row.addEventListener("click", () => {

			window.location.href = row.dataset.href;
		});

	});

});

</script>

@endsection