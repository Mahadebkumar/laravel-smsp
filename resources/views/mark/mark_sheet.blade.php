@extends('layouts.master')
@section('title', 'mark_sheet')
@section('content')
	@include('function.gpa')
	<div class="container">
		<table class="table table-striped">
			<h2>View Student Mark_sheet</h2>
			@foreach($info as $student)
				<tr>
					<td>Name:</td>
					<td>{{$student->sname}}</td>
				</tr>
				<tr>
					<td>Roll:</td>
					<td>{{$student->roll}}</td>
				</tr>
				<tr>
					<td>Class:</td>
					<td>{{$student->class}}</td>
				</tr>
			@endforeach
		</table>
		<table class="table table-border">
			<tr>
			<!-- 	<th>Subject Code</th>
				<th>Subject Name</th> -->
				<th>Mark</th>
				<th>GP</th>
			</tr>
			<?php
				$m=0;
				$count=0;
			?>
			@foreach($marks as $mark)
			<tr>
				<td>{{$mark->mark}}</td>
				<td>{{gp($mark->mark)}}</td>
				<?php
					$gp=gp($mark->mark);
					$point[]=$gp;
					$m=$m+$gp;
					$count=$count+1;
				?>
			</tr>
			@endforeach
			<tr>
				<td>
					<?php 
						if(in_array(0, $point)){
							echo "You are fail";
						}
						else{
							echo "Your gpa: ".$m/$count;
						}
					?>
				</td>
			</tr>
		</table>
	</div>
@endsection